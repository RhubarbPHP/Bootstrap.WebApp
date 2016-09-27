<?php
namespace Your\WebApp\Leaves\Users;
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
//        print $this->leaves["Save"]; ///TODO: It is not possible to create a user from here
        print $this->leaves["Cancel"];
        print $this->leaves["Delete"];

        /// TODO: Password reset and creation ability
    }

}