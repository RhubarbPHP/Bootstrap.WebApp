<?php

namespace Your\WebApp;

use Rhubarb\Stem\StemSettings;

class DockerApplication extends YourApplication
{
    protected function initialise()
    {
        parent::initialise();

        StemSettings::singleton()->username = "blog";
        StemSettings::singleton()->password = "blog";
        StemSettings::singleton()->host = "db";
        StemSettings::singleton()->database = "blog";
    }
}