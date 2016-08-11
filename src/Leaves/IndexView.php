<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\Settings\HtmlPageSettings;
use Rhubarb\Leaf\Views\View;

class IndexView extends View
{
    protected function printViewContent()
    {
        parent::printViewContent();

        $settings = HtmlPageSettings::singleton();
        $settings->pageTitle = "You're up and running!";

        ?>
        <p>Add more URLs by configuring URL Handlers in the settings/app.config.php file</p>

        <?php
    }
}