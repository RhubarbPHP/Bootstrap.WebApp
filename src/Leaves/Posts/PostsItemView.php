<?php

namespace Your\WebApp\Leaves\Posts;

use Rhubarb\Leaf\Controls\Html5Upload\Html5FileUpload;
use Rhubarb\Leaf\Crud\Leaves\CrudView;

class PostsItemView extends CrudView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();
        $this->registerSubLeaf(
            "Title",
            "Date",
            "Content",
            $image = new Html5FileUpload("Image")
        );
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        print "Title<br>".$this->leaves["Title"]."<br>";
        print "Content<br>". $this->leaves["Content"]."<br>";
        print $this->leaves["Save"];
        print $this->leaves["Cancel"];
        print $this->leaves["Delete"];
    }

}