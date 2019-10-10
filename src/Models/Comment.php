<?php
namespace Your\WebApp\Models;

use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\DateColumn;
use Rhubarb\Stem\Schema\Columns\ForeignKeyColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

/**
 *
 *
 * @property int $CommentId Repository field
 * @property int $UserId Repository field
 * @property int $PostId Repository field
 * @property string $Comment Repository field
 * @property \Rhubarb\Crown\DateTime\RhubarbDate $Date Repository field
 */
class Comment extends Model
{

    /**
     * Returns the schema for this data object.
     *
     * @return \Rhubarb\Stem\Schema\ModelSchema
     */
    protected function createSchema()
    {
        $schema = new ModelSchema("tblComment");

        $schema->addColumn(
            new AutoIncrementColumn("CommentId"),
            new ForeignKeyColumn("UserId"),
            new ForeignKeyColumn("PostId"),
            new StringColumn("Comment", 200),
            new DateColumn("Date")
        );
        return $schema;
    }
}