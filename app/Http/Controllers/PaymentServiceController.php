<?php

namespace PayBills\Http\Controllers;

use PayBills\Supports\ServiceManager;
use Illuminate\Http\Request;

class PaymentServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax())
        {
            $term = $request->input('search');
            $servicesNotFiltered = ServiceManager::getPaymentServices();
            
            $filteredChildren = [];
            $servicesArr = collect(array_where($servicesNotFiltered, function ($item, $key) use($term, &$filteredChildren) {
                
                $children = array_get($item, 'children');
                $result = array_where($children, function ($item, $key) use($term) {
                    $text = array_get($item, 'text');                   
                    return is_array($item) && array_has($item, 'text') && is_string($text) && str_contains(strtolower($text), strtolower($term));
                });
                if(count($result) > 0)
                    $filteredChildren []= collect($result)->values();
                return is_array($item) && count($result) > 0;

            }))->mapWithKeys(function ($item) use($term, $filteredChildren) { // mapWithKeys maps the filtered children with group titles
                return [
                    [ 'text' => $item['text'], 'children' => array_collapse($filteredChildren) ] // array_collapse() removes outer wrapped array from filter
                ];
            });
            $data = [
                'items' => count($servicesArr) == 0 ? $servicesNotFiltered : $servicesArr,
                'total_count' => count($servicesArr) == 0 ? count($servicesNotFiltered) : count($servicesArr)
            ];
            return response()->json($data);
        }
        return response('No view implemented', 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \PayBills\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentService $paymentService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \PayBills\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentService $paymentService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \PayBills\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentService $paymentService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PayBills\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentService $paymentService)
    {
        //
    }
}
