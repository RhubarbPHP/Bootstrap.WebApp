<?php
namespace Your\WebApp\Leaves\Posts;
use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;

class PostItem extends CrudLeaf
{

    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return PostItemView::class;
    }
}