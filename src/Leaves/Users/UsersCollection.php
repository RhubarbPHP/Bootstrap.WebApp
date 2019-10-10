<?php
namespace Your\WebApp\Leaves\Users;
use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;

class UsersCollection extends CrudLeaf
{

    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
        return UsersCollectionView::class;
    }
}