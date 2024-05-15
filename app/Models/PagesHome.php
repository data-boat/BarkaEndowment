<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesHome extends Model
{
    use HasFactory;
    protected $fillable = ["homedescription", "hometital", "created_at", "updated_at"];
}
