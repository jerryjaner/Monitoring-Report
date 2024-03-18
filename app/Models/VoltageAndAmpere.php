<?php

namespace App\Models;

use App\Models\MonitoringReport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VoltageAndAmpere extends Model
{
    use HasFactory;

    public $fillable = [
        
        'ckt_no',
        'load_description',
        'breaker_rating_AT',
        'breaker_rating_AF',
        'breaker_rating_P',
        'actual_ampere_L1',
        'actual_ampere_L2',
        'actual_ampere_L3',
        'actual_voltage_L1_L2',
        'actual_voltage_L2_L3',
        'actual_voltage_L3_L1',
        
    ];

     
}
