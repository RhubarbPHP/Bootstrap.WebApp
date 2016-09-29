<?php

namespace Your\WebApp\Leaves\Facebook;

use Rhubarb\Leaf\Views\View;

class FacebookView extends View
{
    /**
    * @var FacebookModel
    */
    protected $model;

    protected function printViewContent()
    {
        $height = "";
        $width = "width=\"180\"";
        if($this->model->width != ""){
            $width = "width=\"".$this->model->width."\"";
        }

        $height = "height =\"70px\"";
        if($this->model->height != ""){
            $height = "height =\"".$this->model->height."\"";
        }

        $scrolling = "scrolling=\"yes\"";
        if($this->model->scrolling !=""){
            $scrolling = "scrolling=\"".$this->model->scrolling."\"";
        }

        print '<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGCDTechnologies%2F&tabs=timeline&width=180&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" ' . $width . $height . ' style="border:none;overflow:hidden" '.$scrolling.' frameborder="0" allowTransparency="true"></iframe>';
    }
}