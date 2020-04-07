<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\Localization;
Use \Carbon\Carbon;

class Home extends Controller
{
    public function index()
    {
        $geoData = geoip()->getLocation(env('IP'));
        $date = Carbon::today();
        $today = ucwords($date->isoFormat('dddd Do MMMM'));
        $quote = __('quotes.' . rand(0,6));

        $start = 'unknown';
        if (isset($geoData['country'])){
            // Lockdown start date
            switch ($geoData['country']) {
                case 'Spain':
                    $start = '2020-03-14 00:00:01';
                    break;

                case 'United States':
                    $start = '2020-03-14 00:00:01';
                    break;

                case 'France':
                    $start = '2020-03-17 12:00:00';
                    break;
            }
        } else {
            $geoData['country'] = $geoData['city'] = 'unknown';
        }

        return view('covid.index',[
            'country' => isset($geoData['country']) ? __('country.' . strtolower($geoData['country'])) : '',
            'city' => isset($geoData['city']) ? $geoData['city'] : '',
            'start' => isset($start) ? $start : 'unknown',
            'today' => $today,
            'quote' => $quote
        ]);
    }
}
