<?php

namespace Your\WebApp\Leaves;


use post;
use Rhubarb\Leaf\Leaves\Leaf;
use Rhubarb\Leaf\Leaves\LeafModel;
use Rhubarb\Stem\Models\Model;

class Admin extends Leaf
{

    protected $model;

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
        $posts = $this->model->posts;
    }
    
}