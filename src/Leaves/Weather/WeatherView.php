<?php

namespace Your\WebApp\Leaves\Weather;

use Rhubarb\Leaf\Views\View;

class WeatherView extends View
{
    /**
    * @var WeatherModel
    */
    protected $model;
    
    protected function printViewContent()
    {
        $userLocation = "moAllowUserLocation:false";
        if($this->model->userLocation!=false)
        {
            $userLocation = "moAllowUserLocation:true";
        }

        print "Weather widget in progress";
    }
}