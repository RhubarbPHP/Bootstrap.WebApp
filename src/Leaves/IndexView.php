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
        $settings->pageTitle = "Compost Corner";

        ?>
        <h1>Welcome to Compost Corner!</h1>
        <h2>Recent</h2>
        <?php
        echo "<p>this is from PHP</p>";
        //loop to print all of the posts

    }
}