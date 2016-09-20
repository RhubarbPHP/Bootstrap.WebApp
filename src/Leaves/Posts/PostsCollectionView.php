<?php
namespace Your\WebApp\Leaves\Posts;
use Rhubarb\Leaf\Crud\Leaves\CrudView;

/**
 * Created by PhpStorm.
 * User: janderson
 * Date: 20/09/2016
 * Time: 15:52
 */
class PostsCollectionView extends CrudView
{
    protected function printViewContent()
    {
        parent::printViewContent();
        print "This is the posts collection page!";
    }

}