<?php

namespace PayBills\Supports;
use Auth;

class ServiceManager
{	
    const API_PREFIX = '/api';
    const API_SERVICES = '/services';

    public static function getApiServices($version)
    {
    	return self::API_PREFIX . '/' . $version . self::API_SERVICES . '?api_token=' . Auth::user()->api_token;
    }

    public static function getPaymentServices()
    {
    	return [
			[ 'id' => 1, 'text' => 'Telecom operators' ],
			[ 'id' => 2, 'text' => 'Internet ISPs' ],
			[ 'id' => 3, 'text' => 'Home rents' ],
			[ 'id' => 4, 'text' => 'Social services' ],
			[ 'id' => 5, 'text' => 'Tuition fees' ],
			[ 'id' => 6, 'text' => 'Transport Ticket' ],
		];
    }
}