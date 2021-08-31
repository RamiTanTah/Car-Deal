<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $fillable =[
        "action",
        "client_id",
        "vehicle_id",];

}