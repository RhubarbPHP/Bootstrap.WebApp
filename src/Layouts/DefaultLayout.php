<?php

namespace Your\WebApp\Layouts;

use Rhubarb\Crown\Html\ResourceLoader;
use Rhubarb\Crown\Layout\LayoutModule;
use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Patterns\Layouts\BaseLayout;

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