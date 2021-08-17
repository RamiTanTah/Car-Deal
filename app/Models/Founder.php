<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $fillable =[
        "first_name",
        "last_name",
        "phone",
        "email",
        "photo",
        "position",];
}
