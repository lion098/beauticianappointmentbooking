<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'beautician_id', 'day', 'open_time', 'close_time'
    ];

    public function beautician_id()
    {
        return $this->belongsTo('App\Models\Beautician', 'beautician_id', 'id');
    }
}
