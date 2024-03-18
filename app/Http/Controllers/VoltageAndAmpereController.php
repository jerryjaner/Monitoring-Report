<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoltageAndAmpere;
use Illuminate\Support\Facades\Cache;

class VoltageAndAmpereController extends Controller
{
    public function index(){

        return view ('VoltageAndAmpere.index');
    }
    public function store(Request $request){

        $validator = \Validator::make($request -> all(),[

            'load_description'  => 'required',
        ]);

        if($validator -> fails()){

            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }
        else{

            $create = new VoltageAndAmpere();

            $create->load_description = $request->load_description;
            $create->breaker_rating_AT = $request->breaker_rating_AT;
            $create->breaker_rating_AF = $request->breaker_rating_AF;
            $create->breaker_rating_P = $request->breaker_rating_P;
            $create->actual_ampere_L1 = $request->actual_ampere_L1;
            $create->actual_ampere_L2 = $request->actual_ampere_L2;
            $create->actual_ampere_L3 = $request->actual_ampere_L3;
            $create->actual_voltage_L1_L2 = $request->actual_voltage_L1_L2;
            $create->actual_voltage_L2_L3 = $request->actual_voltage_L2_L3;
            $create->actual_voltage_L3_L1 = $request->actual_voltage_L3_L1;
            
            $create->save();
            
            // Now that the instance is saved, you can access its ID
            $create->ckt_no = $create->id;
            
            // Update the instance with the ckt_no attribute set
            $create->save();
            Cache::put('voltage_and_ampere_' . $create->id, $create, 3600);
            return response()->json([
                'code' => 200,
                'msg' => 'Created Successfully',
            ]);
        }

    }

    public function fetch() {

       $datas = VoltageAndAmpere::all();
  
        $output = '';
        if ($datas->count() > 0) {
            $output .= 
            '<table class="table table-bordered align-end" id="voltage_ampere_table">
                    <thead>
                    <tr>
                        <th rowspan="2">CKT. No</th>
                        <th rowspan="2">Load Details</th>
                        <th colspan="3" class="text-center">Breaker Rating</th>
                        <th colspan="3" class="text-center">Actual Ampere</th>
                        <th colspan="3" class="text-center">Actual Voltage</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>AT</th>
                        <th>AF</th>
                        <th>P</th>
                        <th>L1</th>
                        <th>L2</th>
                        <th>L3</th>
                        <th>L1-L2</th>
                        <th>L2-L3</th>
                        <th>L3-L1</th>
                    </tr>
                    </thead>
                    <tbody>';
            foreach ($datas as $data) {
                $output .= 
                    '<tr>
                        <td>' . $data->ckt_no . '</td>
                        <td>' . $data->load_description . '</td>
                        <td>' . $data->breaker_rating_AT . '</td>
                        <td>' . $data->breaker_rating_AF . '</td>
                        <td>' . $data->breaker_rating_P . '</td>
                        <td>' . $data->actual_ampere_L1 . '</td>
                        <td>' . $data->actual_ampere_L2 . '</td>
                        <td>' . $data->actual_ampere_L3 . '</td>
                        <td>' . $data->actual_voltage_L1_L2 . '</td>
                        <td>' . $data->actual_voltage_L2_L3 . '</td>
                        <td>' . $data->actual_voltage_L3_L1 . '</td>
                        <td>
                            <a href="#" id="' . $data->id . '" class="text-default  btn btn-success btn-sm mx-1 edit" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
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

		return response()->json($data);
	}

    public function update(Request $request){

        $validator = \Validator::make($request -> all(),[
            
            'load_description'  => 'required',
        ]);

        if($validator -> fails()){

            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }
        else{

            $update = VoltageAndAmpere::find($request->edit_id);
            $update->load_description = $request->load_description;
            $update->breaker_rating_AT = $request->breaker_rating_AT;
            $update->breaker_rating_AF = $request->breaker_rating_AF;
            $update->breaker_rating_P = $request->breaker_rating_P;
            $update->actual_ampere_L1 = $request->actual_ampere_L1;
            $update->actual_ampere_L2 = $request->actual_ampere_L2;
            $update->actual_ampere_L3 = $request->actual_ampere_L3;
            $update->actual_voltage_L1_L2 = $request->actual_voltage_L1_L2;
            $update->actual_voltage_L2_L3 = $request->actual_voltage_L2_L3;
            $update->actual_voltage_L3_L1 = $request->actual_voltage_L3_L1;
            $update->update();
            
            return response()->json([
                'code' => 200,
                'msg' => 'Updated Successfully',
            ]);
        }

    }
}
