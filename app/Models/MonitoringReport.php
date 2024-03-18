<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonitoringReport extends Model
{
    use HasFactory;
    public $fillable = [

        'date',
        'reports_data',
    ];

}
