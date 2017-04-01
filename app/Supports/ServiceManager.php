<?php

namespace PayBills\Supports;
use Auth;

class ServiceManager
{	
    const API_PREFIX = '/api';
    const API_SERVICES = '/services';
    const SERVICES = [
        'Technology' => [ 'Telecom operators', 'Internet ISPs' ],
        'Social' => [ 'Home rents', 'Water bills', 'Electricity Bills' ],
        'Education' => [ 'Tuition fees' ],
        'Transportation' => [ 'Air tickets', 'Bus tickets', 'Train tickets' ]
    ];

    public static function getApiServices($version)
    {
    	return self::API_PREFIX . '/' . $version . self::API_SERVICES . '?api_token=' . Auth::user()->api_token;
    }

    public static function search($term)
    {
        $filteredChildren = [];
        $servicesNotFiltered = self::getPaymentServices();
        $servicesArr = collect(array_where($servicesNotFiltered, function ($item, $key) use($term, &$filteredChildren) {

            // $filteredChildren is pointer (by reference) and is modified inside function
            // $term is passed by values
                
            $children = array_get($item, 'children');
            $result = array_where($children, function ($item, $key) use($term) {
                $text = array_get($item, 'text');                   
                return is_array($item) && array_has($item, 'text') && is_string($text) && str_contains(strtolower($text), strtolower($term));
            });
            if(count($result) > 0)
                $filteredChildren[ array_get($item, 'text') ] = collect($result)->values();
            return is_array($item) && count($result) > 0;

        }))->mapWithKeys(function ($item) use($term, $filteredChildren) { // mapWithKeys maps the filtered children with group titles
            return [
                [ 'text' => $item['text'], 'children' => $filteredChildren[$item['text']] ] // array_collapse() removes outer wrapped array from filter
            ];
        });
        $data = [
            'items' => count($servicesArr) == 0 ? $servicesNotFiltered : $servicesArr,
            'total_count' => count($servicesArr) == 0 ? count($servicesNotFiltered) : count($servicesArr)
        ];
        return $data;
    }

    private static function getPaymentServices()
    {
        $options = [];
        $optionId = 0;
        foreach (self::SERVICES as $group => $services)
        {
            $children = [];
            foreach ($services as $id => $service)
            {
                $children []= [ 'id' => ++$optionId, 'text' => $service ];
            }
            $options []= [ 'text' => $group, 'children' => $children ];
        }
    	return $options;
    }
}