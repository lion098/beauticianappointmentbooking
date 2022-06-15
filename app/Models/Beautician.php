<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beautician extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function beautician()
    {
        return $this->hasMany('App\Models\WorkingHour', 'beautician_id', 'id');
    }
}
