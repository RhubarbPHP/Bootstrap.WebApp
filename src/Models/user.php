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
            new AutoIncrementColumn("UserID"),
            new StringColumn("Username"),
            new StringColumn("Password"),
            new StringColumn("Forename"),
            new StringColumn("Surname"),
            new StringColumn("Bio")
        );
        return $schema;
    }
}