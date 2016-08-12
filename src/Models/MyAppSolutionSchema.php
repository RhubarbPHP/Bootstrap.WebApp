<?php

namespace Your\WebApp\Models;


use Rhubarb\Stem\Schema\SolutionSchema;

class MyAppSolutionSchema extends SolutionSchema
{
    public function __construct()
    {
        parent::__construct();
        $this->addModel('Post', Post::class);
        $this->addModel('User', Comment::class);
        $this->addModel('Comment', User::class);
    }
}