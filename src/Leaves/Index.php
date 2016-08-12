<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\DateTime\RhubarbDate;
use Your\WebApp\Models\Post;
use Rhubarb\Leaf\Leaves\Leaf;
use Rhubarb\Leaf\Leaves\LeafModel;

class Index extends Leaf
{
    protected $model;
    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return IndexView::class;
    }

    /**
     * Should return a class that derives from LeafModel
     *
     * @return LeafModel
     */
    protected function createModel()
    {
        return new IndexModel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();
        $posts = Post::all();
        $test = new Post();
        $test->Title = "First Post!";
        $test->Date = new RhubarbDate("now");
        $test->Content = "This is the content of my first blog post!!";
        $test->save();
        $this->model->posts = $posts;
    }
}