<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'students';    
    protected $primaryKey = 'sid';     
    public $incrementing = false;      
    protected $keyType = 'string';    

    protected $fillable = [
        'sid',
        'sname',
        'phone',
        'email',
        'address',
        'yearLevel',
        'password',   
    ];

    protected $hidden = [
        'password',
    ];

    public function courses(){
        return $this->belongsToMany(Course::class, 'enrollment', 'sid', 'cid');
    }

    public function assignments(){
        return $this->belongsTo(Assignment::class, 'aid', 'aid');
    }
}