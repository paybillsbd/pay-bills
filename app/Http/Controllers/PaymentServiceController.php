<?php

namespace App\Http\Controllers;

use App\PaymentService;
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
            return response()->json(PaymentService::getPaymentServices());
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
     * @param  \App\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentService $paymentService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentService  $paymentService
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
     * @param  \App\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentService $paymentService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentService  $paymentService
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentService $paymentService)
    {
        //
    }
}
