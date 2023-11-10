<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityLoan extends Model
{
    use HasFactory;
    protected $table = 'city_loans';

    public static $rules = [
        'slug' => 'required|unique:city_loans,slug',
       
    ];

    public static $messages = [
        'slug.unique' => 'The slug has already been taken.',
    ];
   
}
