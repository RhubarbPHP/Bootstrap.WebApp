<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\DateTime\RhubarbDate;
use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;
use Your\WebApp\Models\Post;
use Rhubarb\Leaf\Leaves\Leaf;
use Rhubarb\Leaf\Leaves\LeafModel;

class Admin extends Leaf
{

    protected $model;
    protected $submitEvent;

    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return AdminView::class;
    }

    /**
     * Should return a class that derives from LeafModel
     *
     * @return LeafModel
     */
    protected function createModel()
    {
        return new AdminModel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();
        $this->model->posts = Post::all();

        $this->model->postTitle;
        $this->model->postContent;

        $this->model->submitEvent->attachHandler(function () {
            $postTitle = $this->model->postTitle;
            $postContent = $this->model->postContent;
            $this->makeANewPost($postTitle, $postContent);
        });
    }

    protected function makeANewPost($title, $content, $userName = "", $imageUrl = "")
    {
        $post = new Post();
        $post->Date = new RhubarbDate("now");
        $post->User = $userName;
        $post->Content = $content;
        $post->Title = $title;
        $post->ImageUrl = $imageUrl;
        $post->save();
    }
}