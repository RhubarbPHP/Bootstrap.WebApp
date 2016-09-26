<?php

namespace Your\WebApp\Leaves;


use Rhubarb\Scaffolds\Authentication\LoginProviders\LoginProvider;
use Your\WebApp\Models\User;

class SiteLogin extends LoginProvider
{
    public function __construct()
    {
        parent::__construct(\Rhubarb\Scaffolds\Authentication\User::class, "Username", "Password", "Enabled");
    }
}