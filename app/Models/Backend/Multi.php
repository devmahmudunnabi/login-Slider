<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multi extends Model
{
    use HasFactory;
    protected $fileable =[
       's_id',
       'images',
    ];
}
   