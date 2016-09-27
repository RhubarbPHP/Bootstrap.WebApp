<?php
namespace Your\WebApp\Custard;
use Rhubarb\Crown\DateTime\RhubarbDate;
use Rhubarb\Scaffolds\Authentication\User;
use Rhubarb\Stem\Custard\DemoDataSeederInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Your\WebApp\Models\Post;

class CompostDataSeeder implements DemoDataSeederInterface
{

    public function seedData(OutputInterface $output)
    {
        $user = new User();
        $user->Username = "Lettuce";
        $user->setNewPassword("LettuceIn");
        $user->Forename = "Ivy";
        $user->Surname  = "Gardiner";
        $user->Enabled = 1;
        $user->Email = "ivy@compostcorner.com";
        $user->save();

        $post = new Post();
        $post->Date = new RhubarbDate("now");
        $post->Title = "First Post!";
        $post->User = $user->UserID;
        $post->Content = "This is your first post!";
        $post->save();
    }
}