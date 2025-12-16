<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


    class Course extends Model
{
    protected $table='courses';
    protected $primaryKey = 'cid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['cid', 'tid', 'cname', 'description']; 
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'tid', 'tid');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments', 'cid', 'sid')
                    ->withTimestamps(); 
    }
    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'cid', 'cid');
    }
    public function materials()
    {
        return $this->hasMany(Material::class, 'cid', 'cid');
    }
}

