<?php

namespace Your\WebApp\Leaves\TwitterFeed;

use Rhubarb\Leaf\Views\View;

class TwitterFeedView extends View
{
    /**
    * @var TwitterFeedModel
    */
    protected $model;
    
    protected function printViewContent()
    {
        $twitterAccount = $this->model->username;

        $dataWidth = "";
        if($this->model->width != "")
        {
            $dataWidth = "data-width=\"".$this->model->width."\"";
        }

        $dataHeight = "";

        if($this->model->height != "")
        {
            $dataHeight = "data-height=\"".$this->model->height."\"";
        }

        $linkColour = "";
        if($this->model->linkColor != "")
        {
            $linkColour = "data-link-color=\"".$this->model->linkColor."\"";
        }

        print  '<a class="twitter-timeline" '.$dataWidth." ".$dataHeight." ".$linkColour.' href="https://twitter.com/'.$twitterAccount.'">Tweets by '.$twitterAccount.'</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>';
    }
}