<?php
namespace Your\WebApp\Custard;
use Rhubarb\Crown\DateTime\RhubarbDate;
use Rhubarb\Scaffolds\Authentication\User;
use Rhubarb\Stem\Custard\DemoDataSeederInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Your\WebApp\Models\Post;
use Your\WebApp\YourApplication;

/**
 * Class CompostDataSeeder
 * @package Your\WebApp\Custard
 * This class is used to seed data. This runs when you first vagrant up.
 * You can run this by using the following commands from the root directory of your project
 *  <ul><li>vagrant ssh</li>
 *  <li>cd /vagrant</li>
 *  <li>bin/custard stem:seed-data</li></ul>
 *
 * This will save time when you want to create data for demonstration and development /non-live purposes
 * You need to register this class in your projects application
 * @see YourApplication::getCustardCommands()
 */
class CompostDataSeeder implements DemoDataSeederInterface
{

    /**
     * @param OutputInterface $output
     */
    public function seedData(OutputInterface $output)
    {
        // Make a new User that we can log in as
        $user = new User();
        $user->Username = "Lettuce";
        $user->setNewPassword("LettuceIn");
        $user->Forename = "Ivy";
        $user->Surname  = "Gardiner";
        $user->Enabled = 1;
        $user->Email = "ivy@compostcorner.com";
        $user->save();

        // Make a new Post using the user we created above
        $post = new Post();
        $post->Date = new RhubarbDate("now");
        $post->Title = "First Post!";
        $post->User = $user->UserID;
        $post->Content = "This is your first post!";
        $post->save();
    }
}