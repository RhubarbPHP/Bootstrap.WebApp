<?php

namespace Your\WebApp\Layouts;

use Rhubarb\Crown\Application;
use Rhubarb\Crown\Html\ResourceLoader;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Patterns\Layouts\BaseLayout;
use Rhubarb\Scaffolds\Authentication\User;
use Your\WebApp\Leaves\SiteLogin;

class DefaultLayout extends BaseLayout
{
    function __construct()
    {
        ResourceLoader::loadResource( "/static/css/base.css" );
    }

    protected function printPageHeading()
    {
        ?>
        <div id="top">
            <?php

            $title = $this->getTitle();

            if ($title != "") {
                print "<h1><a href='/'>" . $title . "</a></h1>";
            }
            $siteLogin = SiteLogin::singleton();

            if ( $siteLogin->isLoggedIn() )
            {
                print "<div class='helloUser'>Welcome back ".$siteLogin->getModel()->Forename."!<a href=\"/admin/\"> | Admin Area |</a><a href='/login/?logout=1'> Log Out</a></div>";
            }
            else
            {
                print "<div class='loginLink'><a href='/login/'>Login</a> </div>";
            }

            ?>
        </div>
        <div id="content">
        <?php
    }

    protected function printTail()
    {
        parent::printTail();

        ?>
        </div>
        <div id="tail">

        </div>
        <?php
    }

    protected function getTitle()
    {
        $pageSettings = HtmlPageSettings::singleton();
        $pageSettings->pageTitle = "Compost Corner";
        return $pageSettings->pageTitle;
    }

    protected function printContent($content)
    {
        print $content;
    }

    protected function printLayout($content)
    {
        ?>
        <html>
        <head>
            <title><?= $this->getTitle(); ?> </title>
            <?= LayoutModule::getHeadItemsAsHtml(); ?>
            <?= ResourceLoader::getResourceInjectionHtml(); ?>
        </head>
        <body>
        <?= LayoutModule::getBodyItemsAsHtml(); ?>
        <?php $this->printPageHeading(); ?>
        <?php $this->printContent($content); ?>
        <?php $this->printTail(); ?>
        </body>
        </html>
        <?php

    }
}