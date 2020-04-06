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
        $date = Carbon::today();
        $today = ucwords($date->isoFormat('dddd Do MMMM'));
        $quote = __('quotes.' . rand(0,6));

        if ($geoData = geoip(env('IP'))) {
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

                default:
                    $start = 'unknown';
                    break;
            }
        } else {
            $geoData['country'] = $geoData['city'] = 'unknown';
        }

        return view('covid.index',[
            'country' => __('country.' . strtolower($geoData['country'])),
            'city' => $geoData['city'],
            'start' => $start,
            'today' => $today,
            'quote' => $quote
        ]);
    }
}
