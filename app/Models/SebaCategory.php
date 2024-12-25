<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SebaCategory extends Model
{
    use HasFactory;
    protected $table = 'seba_category';
    protected $fillable = ["name", "icon", "description"];
}
