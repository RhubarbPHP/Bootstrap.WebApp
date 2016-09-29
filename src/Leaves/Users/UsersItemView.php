<?php
namespace Your\WebApp\Leaves\Users;
use Rhubarb\Leaf\Controls\Common\Text\TextBox;
use Rhubarb\Leaf\Crud\Leaves\CrudView;

class UsersItemView extends CrudView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();
        $this->registerSubLeaf(
            "Username",
            "Forename",
            "Surname"
        );
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        print "Username<br>" . $this->leaves["Username"] . "<br>";
        print "Forename<br>" . $this->leaves["Forename"] . "<br>";
        print "Surname<br>" . $this->leaves["Surname"] . "<br>";
        print $this->leaves["Save"];
        print $this->leaves["Cancel"];
    }

}