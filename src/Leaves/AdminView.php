<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Leaf\Controls\Common\Buttons\Button;
use Rhubarb\Leaf\Controls\Common\Text\TextArea;
use Rhubarb\Leaf\Controls\Common\Text\TextBox;
use Rhubarb\Leaf\Views\View;

class AdminView extends View
{
    /**
     * @var AdminModel
     */
    protected $model;
    
    protected function createSubLeaves()
    {
        parent::createSubLeaves();
        $this->registerSubLeaf(
            $postTitle = new TextBox("postTitle"),
            $postContent = new TextArea("postContent"),
            $submit = new Button("SubmitPost", "Submit", function (){
                $this->model->submitEvent->raise();
            })
        );
        $postTitle->setLabel("Title");
        $postContent->setLabel("Content");
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        $settings = HtmlPageSettings::singleton();
        $settings->pageTitle = "Compost Corner: Admin";
        print "<div id='postArea'>";
        print "<h1>New Post</h1>";
        print "<h2>Post Title</h2>";
        print $this->leaves["postTitle"];
        print "<h2>Post Content</h2>";
        print $this->leaves["postContent"];
        print "<br>";
        print $this->leaves["SubmitPost"];
        print "</post>";
    }
}