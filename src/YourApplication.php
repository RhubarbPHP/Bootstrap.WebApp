<?php

namespace Your\WebApp;

use Rhubarb\Crown\Application;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\UrlHandlers\ClassMappedUrlHandler;
use Rhubarb\Leaf\LeafModule;
use Rhubarb\Stem\Repositories\MySql\MySql;
use Rhubarb\Stem\Repositories\Repository;
use Rhubarb\Stem\Schema\SolutionSchema;
use Rhubarb\Stem\StemModule;
use Your\WebApp\Layouts\DefaultLayout;
use Your\WebApp\Leaves\Admin;
use Your\WebApp\Leaves\Index;
use Your\WebApp\Models\MyAppSolutionSchema;


class YourApplication extends Application
{
    protected function initialise()
    {
        parent::initialise();

        $this->developerMode = true;

        if(file_exists(APPLICATION_ROOT_DIR . "/settings/site.config.php"))
        {
            include_once(APPLICATION_ROOT_DIR . "/settings/site.config.php");
        }

        SolutionSchema::registerSchema('myApp', MyAppSolutionSchema::class);
        Repository::setDefaultRepositoryClassName(MySql::class);

    }

    protected function registerUrlHandlers()
    {
        parent::registerUrlHandlers();


        // Add a simple home page URL handler . We're using one of the simplest handlers the
        // ClassMappedUrlHandler, but you should look at the other handlers particularly
        // the MvpUrlHandler and CrudUrlHandler
        $this->addUrlHandlers(
            [
                "/app/" => new ClassMappedUrlHandler(Index::class),
                "/admin/" => new ClassMappedUrlHandler(Admin::class)
            ]
        );
    }

    /**
     * Should your module require other modules, they should be returned here.
     */
    protected function getModules()
    {
        return [
            new LayoutModule(DefaultLayout::class),
            new LeafModule(),
            new StemModule()
        ];
    }
}