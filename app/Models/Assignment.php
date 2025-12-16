<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class Assignment extends Model
{
    protected $table='assignments';
    protected $primaryKey = 'aid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['aid', 'cid', 'tid', 'due_date'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'cid', 'cid');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'tid', 'tid');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'aid', 'aid');
    }
}

