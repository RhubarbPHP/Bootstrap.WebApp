<?php
namespace Your\WebApp\Leaves\Users;

use Rhubarb\Leaf\Crud\Leaves\CrudLeaf;
use Your\WebApp\Models\User;

class UsersItem extends CrudLeaf
{
    /**
     * @var UserModel
     */
    protected $model;
    /**
     * Returns the name of the standard view used for this leaf.
     *
     * @return string
     */
    protected function getViewClass()
    {
            return UsersItemView::class;
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();
    }


}