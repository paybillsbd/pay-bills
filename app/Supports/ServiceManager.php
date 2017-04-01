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

    public static function getPaymentServices()
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