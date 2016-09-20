<?php
namespace Your\WebApp\Leaves\Posts;
use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;

/**
 * Created by PhpStorm.
 * User: janderson
 * Date: 20/09/2016
 * Time: 15:51
 */
class PostsCollection extends CrudLeaf
{

    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return PostsCollectionView::class;
    }
}