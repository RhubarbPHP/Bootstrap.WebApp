<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Scaffolds\Authentication\LoginProviders\LoginProvider;
use Rhubarb\Scaffolds\Authentication\User;

class SiteLogin extends LoginProvider
{
    public function __construct()
    {
        parent::__construct(User::class, "Username", "Password", "Enabled");
    }
}