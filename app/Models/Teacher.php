<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    protected $table = 'teachers';
    protected $primaryKey = 'tid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'tid','tname','phone','email','address','specialization','password'
    ];

    protected $hidden = [
        'password',
    ];

    public function courses(){
        return $this->hasMany(Course::class,'tid','tid');
    }

    public function assignments(){
        return $this->hasMany(Assignment::class,'tid','tid');
    }
}