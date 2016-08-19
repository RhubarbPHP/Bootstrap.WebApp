<?php

namespace Your\WebApp\Leaves;


use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Leaves\LeafModel;

class AdminModel extends LeafModel
{
    public $submitEvent;
    public $postTitle = "";
    public $postContent = "";

    public function __construct()
    {
        parent::__construct();
        $this->submitEvent = new Event();
    }

    public $posts = [];

    public $postData; //for when a post gets sent from the form to the database
}
