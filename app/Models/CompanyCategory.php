<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company_list()
    {
        return $this->belongsTo(CompanyList::class);
    }


}
