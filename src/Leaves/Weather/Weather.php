<?php

namespace Your\WebApp\Leaves\Weather;

use Rhubarb\Leaf\Leaves\Leaf;

class Weather extends Leaf
{
    /**
    * @var WeatherModel
    */
    protected $model;
    
    protected function getViewClass()
    {
        return WeatherView::class;
    }
    
    protected function createModel()
    {
        $model = new WeatherModel();
        return $model;
    }

    public function displayUserLocation($displayUserLocation = false)
    {
        $this->model->userLocation = $displayUserLocation;
    }
}