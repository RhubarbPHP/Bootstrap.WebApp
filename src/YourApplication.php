<?php

namespace Your\WebApp;

use Rhubarb\Crown\Application;
use Rhubarb\Crown\DependencyInjection\Container;
use Rhubarb\Crown\Encryption\HashProvider;
use Rhubarb\Crown\Encryption\Sha512HashProvider;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\LoginProviders\LoginProvider;
use Rhubarb\Crown\LoginProviders\UrlHandlers\ValidateLoginUrlHandler;
use Rhubarb\Crown\String\StringTools;
use Rhubarb\Crown\UrlHandlers\CallableUrlHandler;
use Rhubarb\Crown\UrlHandlers\ClassMappedUrlHandler;
use Rhubarb\Leaf\Crud\UrlHandlers\CrudUrlHandler;
use Rhubarb\Leaf\LeafModule;
use Rhubarb\Scaffolds\Authentication\Leaves\Login;
use Rhubarb\Scaffolds\Authentication\User;
use Rhubarb\Stem\Custard\SeedDemoDataCommand;
use Rhubarb\Stem\Repositories\MySql\MySql;
use Rhubarb\Stem\Repositories\Repository;
use Rhubarb\Stem\Schema\SolutionSchema;
use Rhubarb\Stem\StemModule;
use Your\WebApp\Custard\CompostDataSeeder;
use Your\WebApp\Layouts\DefaultLayout;
use Your\WebApp\Leaves\Admin;
use Your\WebApp\Leaves\Index;
use Your\WebApp\Leaves\Posts\PostsCollection;
use Your\WebApp\Leaves\SiteLogin;
use Your\WebApp\Leaves\Users\UsersCollection;
use Your\WebApp\Models\MyAppSolutionSchema;
use Your\WebApp\Models\Post;



class YourApplication extends Application
{
    protected function initialise()
    {
        parent::initialise();

        $this->developerMode = true;

        SolutionSchema::registerSchema('myApp', MyAppSolutionSchema::class);
        Repository::setDefaultRepositoryClassName(MySql::class);
        HashProvider::setProviderClassName(Sha512HashProvider::class);
        LoginProvider::setProviderClassName(SiteLogin::class);
    }

    protected function registerUrlHandlers()
    {
        parent::registerUrlHandlers();


        $this->addUrlHandlers(
            ["/admin/" => new ValidateLoginUrlHandler(new SiteLogin(), "/login/")]
        );
        // Add a simple home page URL handler . We're using one of the simplest handlers the
        // ClassMappedUrlHandler, but you should look at the other handlers particularly
        // the MvpUrlHandler and CrudUrlHandler
        $this->addUrlHandlers(
            [
                "/" => new ClassMappedUrlHandler(Index::class, [
                    "login/" => new CallableUrlHandler(function() {
                        return new Login(new SiteLogin());
                        }),
                    "admin/" => new ClassMappedUrlHandler(Admin::class, [
                        "posts/" => new CrudUrlHandler(Post::class, StringTools::getNamespaceFromClass(PostsCollection::class)),
                        "users/" => new CrudUrlHandler(User::class, StringTools::getNamespaceFromClass(UsersCollection::class))
                    ]),
                ])
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

    public function getCustardCommands()
    {
        SeedDemoDataCommand::registerDemoDataSeeder(new CompostDataSeeder());
        return parent::getCustardCommands();
    }

}