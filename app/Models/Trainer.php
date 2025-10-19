<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    
    protected $fillable =[
        'name',
        'specialization',
        'years_exp'
    ];

    protected $casts = [
        'years_exp' => 'integer'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
