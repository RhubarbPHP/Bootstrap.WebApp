<?php

namespace Your\WebApp\Leaves\Posts;


use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;

class PostsItem extends CrudLeaf
{

    /**
     * @var PostModel
     */
    protected $model;
    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return PostsItemView::class;
    }

    protected function redirectAfterSave()
    {
        parent::redirectAfterSave();
    }

    protected function redirectAfterCancel()
    {
        parent::redirectAfterCancel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

    }


}