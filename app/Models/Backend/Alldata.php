<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alldata extends Model
{
    use HasFactory;
    protected $fileable =[
          'name',
          'email',
          'phone',
          'address',
          'clientid',
          'token',
          'appname',
          'description',
          'url',
          'status'
    ];
}
