<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable =[
        "title",
        "category",
        "description",
        "pic",
        "link",
        "status" 
    ];
}
