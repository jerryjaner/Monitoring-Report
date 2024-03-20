<?php

namespace App\Models;

use App\Models\MonitoringReport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoltageAndAmpere extends Model
{
    use HasFactory;

    public $fillable = [
        
        'date',
        'voltage_amperes_report_data',  
    ];

     
}
