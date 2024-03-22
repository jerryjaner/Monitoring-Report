<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\VoltageAndAmpere;
use Illuminate\Support\Facades\Cache;

class VoltageAndAmpereController extends Controller
{
    public function index(){

        return view ('VoltageAndAmpere.index');
    }
    public function store(Request $request){

        $L1 = $request->input('L1');
        $L2 = $request->input('L2');
        $L3 = $request->input('L3');

        $L1_L2 = $request->input('L1_L2');
        $L2_L3 = $request->input('L2_L3');
        $L3_L1 = $request->input('L3_L1');

        $data = [];
        foreach ($L1 as $key => $value) {
            $data[] = [
                'L1' => $L1[$key],
                'L2' => $L2[$key],
                'L3' => $L3[$key],
                'L1_L2' => $L1_L2[$key],
                'L2_L3' => $L2_L3[$key],
                'L3_L1' => $L3_L1[$key],
            ];
        }

        // Convert data array to JSON
        $jsonData = json_encode($data);

        VoltageAndAmpere::create([
            'voltage_amperes_report_data' => $jsonData,
            'date' => Carbon::now('GMT+8')->format('Y-m-d')
        ]);

        // Return JSON response
        return response()->json([ 
            'code' => 200,
            'msg' => 'Created Successfully',
        ]);
       
       
       
    }

    public function fetch() {

       $datas = VoltageAndAmpere::all();
         $i = 1;
        $output = '';
        if ($datas->count() > 0) {
            $output .= 
            '<table class="table table-bordered align-end" id="voltage_ampere_table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Report Name</th>
                        <th>Report Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>';
            foreach ($datas as $data) {
                $output .= 
                    '<tr>
                        <td>' . $i++ . '</td>
                         <td> Voltage & Ampere Report</td>
                        <td>' .Carbon::parse($data->date)->format('M d, Y'). '</td>
                        <td>
                            <a href="#" id="' . $data->id . '" class="text-default  btn btn-success btn-sm mx-1 edit" data-bs-toggle="modal" data-bs-target="#edit">View</a>
                            <a href="#" id="'. $data->id .'" class="text-default  btn btn-danger btn-sm mx-1 delete">Delete</a>
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

		$data = VoltageAndAmpere::find($request->id);
        $decodedData = json_decode($data->voltage_amperes_report_data, true); 

        return response()->json(['id' => $data->id, 'decodedData' => $decodedData]);

	
	}

    public function delete(Request $request){

       VoltageAndAmpere::find($request->id); 
       VoltageAndAmpere::destroy($request->id);

       return response()->json([

            'status' => 200,
            'msg' => 'Deleted Successfully'

       ]);

   }

   
}
