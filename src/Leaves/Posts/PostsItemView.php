<?php

namespace Your\WebApp\Leaves\Posts;


use Rhubarb\Leaf\Crud\Leaves\CrudView;

class PostsItemView extends CrudView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();
        $this->registerSubLeaf(
            "Title",
            "Date",
            "Content"
        );
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        print "Title<br>".$this->leaves["Title"]."<br>";
        print "Date<br>". $this->leaves["Date"]."<br>";
        print "Content<br>". $this->leaves["Content"]."<br>";
        print $this->leaves["Save"];
        print $this->leaves["Cancel"];
        print $this->leaves["Delete"];
    }

}