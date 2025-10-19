<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'enrollment_id',
        'assignemnt',
        'quiz',
        'final'
    ];

    public function enrollment(){
        return $this->hasOne(Enrollment::class);
    }


}
