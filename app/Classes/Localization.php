<?php

namespace App\Classes;


/**
*
*/
class Localization
{
    public function __construct()
    {
    }

    /**
     * Return a language depending on a country
     *
     */
    public static function mapLocale($iso)
    {
        switch ($iso) {
            case 'ES':
                $locale = 'fr';
                break;

            case 'FR':
                $locale = 'fr';
                break;

            default:
                $locale = 'en';
                break;
        }

        $route = \LaravelLocalization::getLocalizedURL($locale);
        return redirect($route);
    }
}