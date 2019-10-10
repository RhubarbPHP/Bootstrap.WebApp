<?php

namespace Your\WebApp\Leaves\Facebook;

use Rhubarb\Leaf\Leaves\Leaf;

class Facebook extends Leaf
{
    /**
     * @var FacebookModel
     */
    protected $model;

    protected function getViewClass()
    {
        return FacebookView::class;
    }

    protected function createModel()
    {
        $model = new FacebookModel();

        return $model;
    }

    /**
     * @param $width
     * min = 180px
     * max = 500px
     */
    public function setWidth($width)
    {
        $this->model->width = $width;
    }


    public function setHeight($height)
    {
        $this->model->height = $height;
    }

    public function setScrolling($scrolling = "yes")
    {
        $this->model->scrolling = $scrolling;
    }
}