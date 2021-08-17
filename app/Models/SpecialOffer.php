<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    protected $fillable =[
        "description",
        "ratio",
        "start_date",
        "end_date",];
}
