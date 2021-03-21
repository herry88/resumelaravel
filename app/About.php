<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $primaryKey ='id';
    protected $fillable = ['name','description'];
}
