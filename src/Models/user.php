<?php

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

class user extends Model
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
            new StringColumn("Password",30),
            new StringColumn("Forename",20),
            new StringColumn("Surname",20),
            new StringColumn("Bio",200)
        );
        return $schema;
    }
}