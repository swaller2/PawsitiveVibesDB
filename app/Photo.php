<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Photo extends Model
{
    //
    public function getUrlPath()
    {
    	return Storage::url($this->path);
    }
}
