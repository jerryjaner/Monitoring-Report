<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\MonitoringReport;
use App\Models\VoltageAndAmpere;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentYear = Carbon::now()->year;

        $data = MonitoringReport::selectRaw('MONTH(date) as month, COUNT(*) as count')
            ->whereYear('date', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = [];
        $counts = [];

        foreach ($data as $item) {
            $months[] = $item->month;
            $counts[] = $item->count;
        }

        $data1 = VoltageAndAmpere::selectRaw('MONTH(date) as month, COUNT(*) as count')
            ->whereYear('date', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months1 = [];
        $counts1 = [];

        foreach ($data1 as $item) {
            $months1[] = $item->month;
            $counts1[] = $item->count;
        }

        return view('dashboard', compact('months', 'counts', 'months1', 'counts1'));
    
    }

   
}
