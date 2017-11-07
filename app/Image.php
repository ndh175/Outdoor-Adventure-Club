<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = array('url','name');

    public $timestamps = true;

    public static function insertImage($imagedata)
    {
        $image = new Image;
        $image->fill($imagedata);
        $image->save();
        return $image->id;
    }
}
