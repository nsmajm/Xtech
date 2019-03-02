<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FilesModel extends Model
{
    protected $table='product_files';
    protected $primaryKey='id';
    public $timestamps=false;
}
