<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    

    protected $fillable = [
        'name',
        'duration',
        'fee'
    ];

    protected $casts = [
        'duration' => 'integer',
        'fee' => 'decimal:2'
    ];

    protected $keytype = 'string';

    public function trainers(){
        return $this->belongsToMany(Trainer::class);
        
    }
    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }

}
