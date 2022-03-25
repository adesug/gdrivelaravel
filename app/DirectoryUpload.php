<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryUpload extends Model
{
    protected $fillable = [
        'name', 'directory_id'
    ];
}
