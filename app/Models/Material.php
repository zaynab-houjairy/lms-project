<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table='materials';
    protected $primaryKey = 'mid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['mid', 'cid', 'title'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'cid', 'cid');
    }
}

