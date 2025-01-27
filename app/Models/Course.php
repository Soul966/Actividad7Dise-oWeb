<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
