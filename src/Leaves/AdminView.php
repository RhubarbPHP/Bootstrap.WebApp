<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Leaf\Controls\Common\Buttons\Button;
use Rhubarb\Leaf\Controls\Common\Text\TextArea;
use Rhubarb\Leaf\Controls\Common\Text\TextBox;
use Rhubarb\Leaf\Views\View;
use Rhubarb\Patterns\Mvp\Crud\CrudView;

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
        print<<<HTML
        <h1>Admin</h1>
        <h2>Quick Links:</h2>
        <ul>
<li><a href="posts/">All Posts</a></li>
<li><a href="posts/add/">New Post</a></li>
<li><a href="users/">All Users</a></li>
<li><a href="users/add/">New User</a></li>
</ul>

HTML;

    }
}