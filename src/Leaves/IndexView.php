<?php

namespace Your\WebApp\Leaves;

use Rhubarb\Crown\Settings\HtmlPageSettings;

use Rhubarb\Leaf\TwitterFeed\TwitterFeed;
use Rhubarb\Leaf\Views\View;

class IndexView extends View
{
    protected $model;

    protected function createSubLeaves()
    {
        parent::createSubLeaves();
        $this->registerSubLeaf(
          $twitter = new TwitterFeed("Twitter", "gcdtechnologies")
        );

        $twitter->setLinkColor("#19CF86");
        $twitter->setHeight("250px");
        $twitter->setWidth("250px");
    }


    protected function printViewContent()
    {
        parent::printViewContent();
        $settings = HtmlPageSettings::singleton();
        $settings->pageTitle = "Compost Corner";
        $posts = $this->model->posts;
        ?>
        <h1>Welcome to Compost Corner!</h1>
        <h2>Recent</h2>
        <?php
        echo "Total Number of posts: " . sizeof($posts);
        if (sizeof($posts) > 0) {
            foreach ($posts as $post) {
                echo '<div class = "post">';
                echo '<h2>' . $post->Title . '</h2>';
                echo '<h3>' . $post->Date . '</h3>';
                echo '<p>' . $post->Content . '</p>';
                echo '</div>';
            }
        }
        print $this->leaves["Twitter"];
        ?>
        <?php
    }
}