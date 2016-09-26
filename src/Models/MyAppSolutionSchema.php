<?php

namespace Your\WebApp\Models;


use Rhubarb\Scaffolds\Authentication\User;
use Rhubarb\Stem\Schema\SolutionSchema;

class MyAppSolutionSchema extends SolutionSchema
{
    public function __construct($version = 0.01)
    {
        parent::__construct();
        $this->addModel('Post', Post::class, 0.1);
        $this->addModel('User', Comment::class, 0.1);
        $this->addModel('Comment', User::class);//this is the auth one, let's break some stuff
    }
}