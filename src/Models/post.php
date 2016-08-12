<?php
namespace Your\WebApp\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\DateColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

class Post extends Model
{

    /**
     * @return ModelSchema
     * @property AutoIncrementColumn $PostId
     * @property StringColumn $Title
     * @property DateColumn $Date
     * @property StringColumn $Content
     * @property StringColumn ImageUrl
     */
    protected function createSchema()
    {
        $schema = new ModelSchema("tblPost");

        $schema->addColumn(
            new AutoIncrementColumn("PostId"),
            new StringColumn("Title", 120),
            new DateColumn("Date"),
            new StringColumn("Content", 500),
            new StringColumn("ImageUrl", 120)
        );
        return $schema;
    }
}