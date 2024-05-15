<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        "country_id",
        "CompanyName",
        "CompanyLogo",
        "CompanyDesHeader",
        "CompanyDesBody",
        "CompanyDesFooter",
        "CompanyImage",
        "created_at",
        "updated_at"
    ];
    public function Country()
    {
        return $this->belongsTo(PagesCountry::class, 'country_id', 'id');
    }
}
