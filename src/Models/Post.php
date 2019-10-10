<?php
namespace Your\WebApp\Models;

use Rhubarb\Crown\DateTime\RhubarbDate;
use Rhubarb\Stem\Models\Model;
use Rhubarb\Stem\Schema\Columns\AutoIncrementColumn;
use Rhubarb\Stem\Schema\Columns\DateColumn;
use Rhubarb\Stem\Schema\Columns\LongStringColumn;
use Rhubarb\Stem\Schema\Columns\StringColumn;
use Rhubarb\Stem\Schema\ModelSchema;

/**
 *
 *
 * @property int $PostId Repository field
 * @property string $User Repository field
 * @property string $Title Repository field
 * @property \Rhubarb\Crown\DateTime\RhubarbDate $Date Repository field
 * @property string $Content Repository field
 * @property string $ImageUrl Repository field
 */
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
            new StringColumn("User", 30),
            new StringColumn("Title", 120),
            new DateColumn("Date"),
            new LongStringColumn("Content"),
            new StringColumn("ImageUrl", 120)
        );
        return $schema;
    }

    //Save the date that the post was created
    protected function beforeSave()
    {
        parent::beforeSave();
        if($this->isNewRecord()){
            $this->Date = new RhubarbDate("now");
        }
    }


}