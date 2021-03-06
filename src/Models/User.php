<?php
namespace Your\WebApp\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

/**
 *
 *
 * @property int $UserId Repository field
 * @property string $Username Repository field
 * @property string $Password Repository field
 * @property string $Forename Repository field
 * @property string $Surname Repository field
 * @property string $Bio Repository field
 */
class User extends Model
{

    /**
     * Returns the schema for this data object.
     *
     * @return \Rhubarb\Stem\Schema\ModelSchema
     */
    protected function createSchema()
    {
        $schema = new ModelSchema("tblUser");

        $schema->addColumn(
            new AutoIncrementColumn("UserId"),
            new StringColumn("Username", 20),
            new StringColumn("Password", 30),
            new StringColumn("Forename", 20),
            new StringColumn("Surname", 20),
            new StringColumn("Bio", 200)
        );
        return $schema;
    }
}