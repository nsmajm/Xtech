<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FaqModel extends Model
{
    protected $table='product_faq';
    protected $primaryKey='id';
    public $timestamps=false;
}
