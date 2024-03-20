<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MonitoringReport;
use Illuminate\Support\Facades\DB;

class MonitoringReportController extends Controller
{
    public function index(){

        return view('MonitoringReport.index');
       
    }
    public function store(Request $request){

        $statusArray = $request->input('status');
        $remarksArray = $request->input('remarks');
    
       
        $data = [];

        foreach ($statusArray as $key => $status) {

            $data[] = [

                'code' => $status,
                'status' => $status,
                'remarks' => $remarksArray[$key],
            ];
        }
    
        // Convert data array to JSON
        $jsonData = json_encode($data);
    
        MonitoringReport::create([

            'reports_data' => $jsonData,
            'date' => Carbon::now('GMT+8')->format('Y-m-d') 
        ]);
        
        return response()->json([
            'code' => 200,
            'msg' => 'Created Successfully',
        ]);
    }

    public function fetch() {

        $datas = MonitoringReport::all();
        $i = 1;
        $output = '';
        if ($datas->count() > 0) {
            $output .= '<table class="table table-striped align-end" id="all_data_table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Monitoring Report</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>';
            foreach ($datas as $data) {

                $output .= '<tr>
                        <td>' . $data->id. '</td>
                        <td>'.Carbon::parse($data->date)->format('M d Y').'</td>
                        <td>
                            <a href="#" id="'. $data->id .'" class="text-default  btn btn-success btn-sm mx-1 edit" data-bs-toggle="modal" data-bs-target="#edit">View</a>
                         </td>
                    </tr>';
            }

            $output .= '</tbody></table>';
            echo $output;
        }
        else {
            
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }

	}

    public function edit(Request $request) {
        
        $data = MonitoringReport::find($request->id);
        $decodedData = json_decode($data->reports_data, true); 

        return response()->json(['id' => $data->id, 'decodedData' => $decodedData]);
    
    }
    

}
