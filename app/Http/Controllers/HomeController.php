<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index()
    {
        $data['location'] = Location::get();
    	return view('home.homepage',$data);	
    }

    public function single()
    {
        $data['location'] = Location::get();
    	return view('home.single',$data);	
    }

    public function ajaxSaveSample(Request $request)
    {
       //insert value here
       // dd($request->value);
        return $request->input('value');
    }

    public function parameter()
    {
        $data['location'] = Location::get();
    	return view('home.parameter', $data);	
    }

    public function geoTest()
    {
    	$location = Location::get();
        // dd($location);
        echo 'IP: '.$location->ip.'<br />';
        echo 'ISP: '.$location->isp.'<br />';
        echo 'Country Name: '.$location->countryName.'<br />';
        echo 'Country Code: '.$location->countryCode.'<br />';
        echo 'City Code: '.$location->cityName.'<br />';
        
    }
}
