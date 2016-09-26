<?php
namespace Your\WebApp\Leaves\Posts;

use Rhubarb\Leaf\Crud\Leaves\CrudView;
use Your\WebApp\Models\Post;


class PostsCollectionView extends CrudView
{
    protected function printViewContent()
    {
        parent::printViewContent();
        $posts = Post::all();
        print "<a href='add/'>New Post</a>";
        if(sizeof($posts) > 0){
        print<<<HTML
<table>
    <thead>
        <tr>
            <td></td>
            <td>User</td>
            <td>Title</td>
            <td>Date</td>
            <td>Content</td>
        </tr>
    </thead>
HTML;
            foreach ($posts as $post) {
                print<<<HTML
<tr>
            <td><a href="$post->PostId/edit/">Edit</a> </td>
            <td>$post->User</td>
            <td>$post->Title</td>
            <td>$post->Date</td>
            <td>$post->Content</td>
        </tr>
HTML;
            }
            print "</table>";
        }
    }
}