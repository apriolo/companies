<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'companies';

    protected $fillable = ['title', 'telephone', 'address', 'postalcode', 'city', 'country', 'descript'];

    public function companies () {
        return $this->belongsToMany(Categories::class,'categories_companies','companies_id','categories_id');
    }

    public function search ($filter = "") {
        $result = $this->with('companies')->whereHas('companies', function($q) use ($filter) {
            $q->where('title', 'LIKE', "%{$filter}%")
                ->orWhere('address', 'LIKE', "%{$filter}%")
                ->orWhere('postalcode', 'LIKE', "%{$filter}%")
                ->orWhere('city', 'LIKE', "%{$filter}%")
                ->orWhere('category', 'LIKE', "%{$filter}%");
        })->paginate(4);
        /*$result = $this->with('companies')->where(function ($query) use ($filter) {
            $query->where('title', 'LIKE', "%{$filter}%")
                ->orWhere('address', 'LIKE', "%{$filter}%")
                ->orWhere('postalcode', 'LIKE', "%{$filter}%")
                ->orWhere('city', 'LIKE', "%{$filter}%");
        })
        ->paginate(4);*/
        return $result;
    }
}
