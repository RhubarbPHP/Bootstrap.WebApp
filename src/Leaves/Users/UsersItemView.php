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
          "Surname",
          "Password",
          "Bio"
        );
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        print "Username<br>" . $this->leaves["Username"] . "<br>";
        print "Forename<br>" . $this->leaves["Forename"] . "<br>";
        print "Surname<br>" . $this->leaves["Surname"] . "<br>";
        print "Password<br>" . $this->leaves["Password"] . "<br>";
        print "Bio<br>" . $this->leaves["Bio"] . "<br>";
        print $this->leaves["Save"];
        print $this->leaves["Cancel"];
        print $this->leaves["Delete"];
    }

}