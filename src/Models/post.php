<?php

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\DateColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

class post extends Model
{

    /**
     * Returns the schema for this data object.
     *
     * @return \Rhubarb\Stem\Schema\ModelSchema
     */
    protected function createSchema()
    {
        $schema = new ModelSchema("tblPost");

        $schema->addColumn(
            new AutoIncrementColumn("PostId"),
            new StringColumn("Title",120),
            new DateColumn("Date"),
            new StringColumn("Post",500),
            new StringColumn("ImageUrl",120)
        );
        return $schema;
    }
}