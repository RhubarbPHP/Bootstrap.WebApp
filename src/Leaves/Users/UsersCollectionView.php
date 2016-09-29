<?php

namespace Your\WebApp\Leaves\Users;

use Rhubarb\Leaf\Crud\Leaves\CrudView;
use Your\WebApp\Models\User;

class UsersCollectionView extends CrudView
{
    protected function createSubLeaves()
    {
        parent::createSubLeaves();
    }

    protected function printViewContent()
    {
        parent::printViewContent();
        $users = User::all();
        print "<h1>Users</h1>";
        print "<a href='add/'>New User</a>";
        if (sizeof($users) > 0) {
            print<<<HTML
<table>
    <thead>
        <tr>
            <td></td>
            <td>Username</td>
            <td>Forename</td>
            <td>Surname</td>
        </tr>
    </thead>
HTML;
            foreach ($users as $user) {
            print<<<HTML
<tr>
    <td><a href="$user->UserId/">Edit</a></td>
    <td>$user->Username</td>
    <td>$user->Forename</td>
    <td>$user->Surname</td>
</tr>
HTML;

            }
            print "</table>";
        }
    }
}