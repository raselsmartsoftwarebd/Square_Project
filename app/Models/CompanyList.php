<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company_category()
    {
        return $this->hasMany(CompanyCategory::class);
    }

}
