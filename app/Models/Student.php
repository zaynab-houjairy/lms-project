<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'students';    // اسم جدول الطلاب
    protected $primaryKey = 'sid';     // primary key
    public $incrementing = false;      // لأنه char/string
    protected $keyType = 'string';     // نوع المفتاح string

    // الأعمدة المسموح بالملء الجماعي
    protected $fillable = [
        'sid',
        'sname',
        'phone',
        'email',
        'address',
        'yearLevel',
        'password',   // ضروري عشان Auth
    ];

    // الأعمدة المخفية (password)
    protected $hidden = [
        'password',
    ];

    // Relations (اختياري حسب المشروع)
    public function courses(){
        return $this->belongsToMany(Course::class, 'enrollments', 'sid', 'cid');
    }

    public function assignments(){
        return $this->belongsTo(Assignment::class, 'aid', 'aid');
    }
}