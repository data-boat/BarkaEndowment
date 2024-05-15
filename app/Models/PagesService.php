<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesService extends Model
{
    use HasFactory;
    protected $fillable = ["description", "tital", "file_path", "Date",  "By", "DesHeader", "DesBody", "DesFooter", "created_at", "updated_at"];
}
