<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use QCod\ImageUp\HasImageUploads;

class Book extends Model
{
    use HasImageUploads;
    protected $table = "books";

    protected static $imageFields = ['image_url'];
}
