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
            $servicesArr = collect(array_where(ServiceManager::getPaymentServices(), function ($item, $key) use($term) {
                return is_string($item['text']) && str_contains(strtolower($item['text']), strtolower($term));
            }))->values();
            $data = [
                'items' => count($servicesArr) == 0 ? ServiceManager::getPaymentServices() : $servicesArr,
                'total_count' => count($servicesArr) == 0 ? count(ServiceManager::getPaymentServices()) : count($servicesArr)
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
