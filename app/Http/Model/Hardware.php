<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    protected $table = 'hardware';
    protected $primaryKey = 'hardware_id';
    public    $timestamps = True;
    protected $guarded =[];



}
