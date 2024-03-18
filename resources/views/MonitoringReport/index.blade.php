@extends('layouts.app')
@section('content')
<style>
    /* Custom CSS to enforce scrolling */
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal {
    overflow-x: hidden;
    overflow-y: auto;
}

</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Monitoring Report</h1>
            </div>
        </div>
    </div>
</div>

<div class="content" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header w-100 d-flex justify-content-between align-items-center">
                        <h4 class="text-dark w-100 pt-2">Manage Monitoring Report </h4>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create_report">
                            Create 
                       </button>
                    </div>
                    <div class="card-body" id="all_data">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
  

<div class="modal fade" id="create_report" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">Create</h5>
        </div>
        <form action="{{ route('monitoring_report.store') }}" method="POST" id="create_monitoring_report" enctype="multipart/form-data">
            @csrf
            <div class="modal-body p-4 bg-light" style="max-height: 70vh; overflow-y: auto;">

               <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" >ITEM #</th>
                                <th scope="col">EQUIPMENT DESCRIPTION</th>
                                <th scope="col">CODE</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">REMARKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- #1 --}}
                            <tr>
                                <th scope="row">1</th>
                                <td><b>AERATION BLOWER 1</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>LUBRICATION</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Code</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>PARTS REPLACEMENT</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>PULLEY</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BEARING</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL SEAL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BUTTERFLY VALVES</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>V-BELTS</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL LEVEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="HL">HL - HIGH LEVEL</option>
                                        <option value="ML">ML - MID LEVEL</option>
                                        <option value="LL">LL - LOW LEVEL</option>
                                        <option value="FC">FC - FOR CHANGE OIL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>

                            {{-- #2 --}}

                            <tr>
                                <th scope="row">2</th>
                                <td><b>AERATION BLOWER 2</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>LUBRICATION</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Code</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>PARTS REPLACEMENT</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>PULLEY</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BEARING</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL SEAL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BUTTERFLY VALVES</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>V-BELTS</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL LEVEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="HL">HL - HIGH LEVEL</option>
                                        <option value="ML">ML - MID LEVEL</option>
                                        <option value="LL">LL - LOW LEVEL</option>
                                        <option value="FC">FC - FOR CHANGE OIL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>

                            {{-- #3 --}}

                            <tr>
                                <th scope="row">3</th>
                                <td><b>AERATION BLOWER 3</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>LUBRICATION</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Code</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>PARTS REPLACEMENT</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>PULLEY</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BEARING</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL SEAL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BUTTERFLY VALVES</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>V-BELTS</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL LEVEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="HL">HL - HIGH LEVEL</option>
                                        <option value="ML">ML - MID LEVEL</option>
                                        <option value="LL">LL - LOW LEVEL</option>
                                        <option value="FC">FC - FOR CHANGE OIL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>

                             {{-- #4 --}}

                             <tr>
                                <th scope="row">4</th>
                                <td><b>AERATION BLOWER 4</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>LUBRICATION</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Code</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>PARTS REPLACEMENT</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>PULLEY</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BEARING</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL SEAL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BUTTERFLY VALVES</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>V-BELTS</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL LEVEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="HL">HL - HIGH LEVEL</option>
                                        <option value="ML">ML - MID LEVEL</option>
                                        <option value="LL">LL - LOW LEVEL</option>
                                        <option value="FC">FC - FOR CHANGE OIL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>

                            {{-- #5 --}}

                             <tr>
                                <th scope="row">5</th>
                                <td><b>AERATION BLOWER 5</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>LUBRICATION</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Code</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>PARTS REPLACEMENT</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>PULLEY</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BEARING</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL SEAL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>BUTTERFLY VALVES</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>V-BELTS</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>OIL LEVEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="HL">HL - HIGH LEVEL</option>
                                        <option value="ML">ML - MID LEVEL</option>
                                        <option value="LL">LL - LOW LEVEL</option>
                                        <option value="FC">FC - FOR CHANGE OIL</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                <td></td>
                                <td>
                                    <select name="status[]" class="form-select" id="">
                                        <option value="">Select Status</option>
                                        <option value="OG">OG - OPERATION AND IN GOOD CONDITION</option>
                                        <option value="OR">OR - OPERATION BUT NEED MINOR REPAIR</option>
                                        <option value="NO">NO - NOT OPERATION</option>
                                        <option value="FR">FR - FOR REPLACEMENT</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="remarks[]"  class="form-control" placeholder="Remarks" >
                                </td>
                            </tr>

                        </tbody>
                    </table>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="close_modal">Close</button>
                <button type="submit"  id="btnSubmit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-primary" id="exampleModalLabel">Create</h5>
          </div>
          <form action=""  id="" enctype="multipart/form-data">
              @csrf
              <div class="modal-body p-4 bg-light" style="max-height: 70vh; overflow-y: auto;" >
                <input type="hidden" name="edit_id" id="edit_id">
                 <div class="row">
                      <table class="table table-bordered" id="printThis">
                          <thead>
                              <tr>
                                  <th colspan="5" class="">
                                    <div class="row">
                                        <h6><b>PROJECT: </b> NUSTAR RESORT AND CASINO</h6> <br>
                                        <h6><b>LOCATION: </b> KAWIT POINT, SRP CEBU CITY</h6> <br>
                                        <h6><b>DATE: </b></h6> <br>

                                    </div>

                                  </th>
                              </tr>
                              <tr>
                                  <th colspan="5" class="text-center"><b>SEWAGE TREATMENT PLANT MONTHLY PREVENTIVE MAINTENCE</b></th>
                              </tr>
                              <tr>
                                  
                                  <th scope="col" >ITEM #</th>
                                  <th scope="col">EQUIPMENT DESCRIPTION</th>
                                  <th scope="col">CODE</th>
                                  <th scope="col">STATUS</th>
                                  <th scope="col">REMARKS</th>
                              </tr>
                          </thead>
                          <tbody>
                                 {{-- #1 --}}
                                <tr>
                                  <th scope="row">1</th>
                                  <td><b>AERATION BLOWER 1</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                <tr>
                                    <th scope="row"></th>
                                    <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                    <td><span id="code_1"></span></td>
                                    <td><span id="status_1"></span></td>
                                    <td><span id="remarks_1"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>LUBRICATION</td>
                                    <td><span id="code_2"></span></td>
                                    <td><span id="status_2"></span></td>
                                    <td><span id="remarks_2"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><b>PARTS REPLACEMENT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>PULLEY</td>
                                    <td><span  id="code_3"></span></td>
                                    <td><span id="status_3"></span></td>
                                    <td><span  id="remarks_3"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BEARING</td>
                                    <td><span  id="code_4"></span></td>
                                    <td><span id="status_4"></span></td>
                                    <td><span  id="remarks_4"></span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL SEAL</td>
                                    <td> <span  id="code_5"></span></td>
                                    <td><span id="status_5"></span></td>
                                    <td> <span  id="remarks_5"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BUTTERFLY VALVES</td>
                                    <td><span  id="code_6"></span></td>
                                    <td><span id="status_6"></span></td>
                                    <td><span  id="remarks_6"></span></td>
                                </tr>   
                                <tr>
                                    <th scope="row"></th>
                                    <td>V-BELTS</td>
                                    <td><span  id="code_7"></span></td>
                                    <td><span id="status_7"></span></td>
                                    <td> <span  id="remarks_7"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL LEVEL</td>
                                    <td><span  id="code_8"></span></td>
                                    <td><span id="status_8"></span></td>
                                    <td><span  id="remarks_8"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                    <td><span  id="code_9"></span></td>
                                    <td><span id="status_9"></span></td>
                                    <td><span  id="remarks_9"></span></td>
                                </tr>

                                {{--  #2  --}}

                                <tr>
                                  <th scope="row">2</th>
                                  <td><b>AERATION BLOWER 2</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                <tr>
                                    <th scope="row"></th>
                                    <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                    <td><span id="code_10"></span></td>
                                    <td><span id="status_10"></span></td>
                                    <td><span id="remarks_10"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>LUBRICATION</td>
                                    <td><span id="code_11"></span></td>
                                    <td><span id="status_11"></span></td>
                                    <td><span id="remarks_11"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><b>PARTS REPLACEMENT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>PULLEY</td>
                                    <td><span  id="code_12"></span></td>
                                    <td><span id="status_12"></span></td>
                                    <td><span  id="remarks_12"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BEARING</td>
                                    <td><span  id="code_13"></span></td>
                                    <td><span id="status_13"></span></td>
                                    <td><span  id="remarks_13"></span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL SEAL</td>
                                    <td> <span  id="code_14"></span></td>
                                    <td><span id="status_14"></span></td>
                                    <td> <span  id="remarks_14"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BUTTERFLY VALVES</td>
                                    <td><span  id="code_15"></span></td>
                                    <td><span id="status_15"></span></td>
                                    <td><span  id="remarks_15"></span></td>
                                </tr>   
                                <tr>
                                    <th scope="row"></th>
                                    <td>V-BELTS</td>
                                    <td><span  id="code_16"></span></td>
                                    <td><span id="status_16"></span></td>
                                    <td> <span  id="remarks_16"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL LEVEL</td>
                                    <td><span  id="code_17"></span></td>
                                    <td><span id="status_17"></span></td>
                                    <td><span  id="remarks_17"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                    <td><span  id="code_18"></span></td>
                                    <td><span id="status_18"></span></td>
                                    <td><span  id="remarks_18"></span></td>
                                </tr>

                                {{-- #3 --}}

                                <tr>
                                  <th scope="row">3</th>
                                  <td><b>AERATION BLOWER 3</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                <tr>
                                    <th scope="row"></th>
                                    <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                    <td><span id="code_19"></span></td>
                                    <td><span id="status_19"></span></td>
                                    <td><span id="remarks_19"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>LUBRICATION</td>
                                    <td><span id="code_20"></span></td>
                                    <td><span id="status_20"></span></td>
                                    <td><span id="remarks_20"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><b>PARTS REPLACEMENT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>PULLEY</td>
                                    <td><span  id="code_21"></span></td>
                                    <td><span id="status_21"></span></td>
                                    <td><span  id="remarks_21"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BEARING</td>
                                    <td><span  id="code_22"></span></td>
                                    <td><span id="status_22"></span></td>
                                    <td><span  id="remarks_22"></span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL SEAL</td>
                                    <td> <span  id="code_23"></span></td>
                                    <td><span id="status_23"></span></td>
                                    <td> <span  id="remarks_23"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BUTTERFLY VALVES</td>
                                    <td><span  id="code_24"></span></td>
                                    <td><span  id="status_24"></span></td>
                                    <td><span  id="remarks_24"></span></td>
                                </tr>   
                                <tr>
                                    <th scope="row"></th>
                                    <td>V-BELTS</td>
                                    <td><span  id="code_25"></span></td>
                                    <td><span id="status_25"></span></td>
                                    <td> <span  id="remarks_25"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL LEVEL</td>
                                    <td><span  id="code_26"></span></td>
                                    <td><span id="status_26"></span></td>
                                    <td><span  id="remarks_26"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                    <td><span  id="code_27"></span></td>
                                    <td><span  id="status_27"></span></td>
                                    <td><span  id="remarks_27"></span></td>
                                </tr>

                                {{-- #4 --}}

                                <tr>
                                  <th scope="row">4</th>
                                  <td><b>AERATION BLOWER 4</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                <tr>
                                    <th scope="row"></th>
                                    <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                    <td><span id="code_28"></span></td>
                                    <td><span id="status_28"></span></td>
                                    <td><span id="remarks_28"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>LUBRICATION</td>
                                    <td><span id="code_29"></span></td>
                                    <td><span id="status_29"></span></td>
                                    <td><span id="remarks_29"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><b>PARTS REPLACEMENT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>PULLEY</td>
                                    <td><span  id="code_30"></span></td>
                                    <td><span id="status_30"></span></td>
                                    <td><span  id="remarks_30"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BEARING</td>
                                    <td><span  id="code_31"></span></td>
                                    <td><span id="status_31"></span></td>
                                    <td><span  id="remarks_31"></span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL SEAL</td>
                                    <td> <span  id="code_32"></span></td>
                                    <td><span id="status_32"></span></td>
                                    <td> <span  id="remarks_32"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BUTTERFLY VALVES</td>
                                    <td><span  id="code_33"></span></td>
                                    <td><span  id="status_33"></span></td>
                                    <td><span  id="remarks_33"></span></td>
                                </tr>   
                                <tr>
                                    <th scope="row"></th>
                                    <td>V-BELTS</td>
                                    <td><span  id="code_34"></span></td>
                                    <td><span id="status_34"></span></td>
                                    <td> <span  id="remarks_34"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL LEVEL</td>
                                    <td><span  id="code_35"></span></td>
                                    <td><span id="status_35"></span></td>
                                    <td><span  id="remarks_35"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                    <td><span  id="code_36"></span></td>
                                    <td><span  id="status_36"></span></td>
                                    <td><span  id="remarks_36"></span></td>
                                </tr>

                                {{-- #5 --}}

                                 <tr>
                                  <th scope="row">5</th>
                                  <td><b>AERATION BLOWER 5</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                <tr>
                                    <th scope="row"></th>
                                    <td>RE-ALIGNMENT AND RETIGHTEN</td>
                                    <td><span id="code_37"></span></td>
                                    <td><span id="status_37"></span></td>
                                    <td><span id="remarks_37"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>LUBRICATION</td>
                                    <td><span id="code_38"></span></td>
                                    <td><span id="status_38"></span></td>
                                    <td><span id="remarks_38"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><b>PARTS REPLACEMENT</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>PULLEY</td>
                                    <td><span  id="code_39"></span></td>
                                    <td><span id="status_39"></span></td>
                                    <td><span  id="remarks_39"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BEARING</td>
                                    <td><span  id="code_40"></span></td>
                                    <td><span id="status_40"></span></td>
                                    <td><span  id="remarks_40"></span> </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL SEAL</td>
                                    <td> <span  id="code_41"></span></td>
                                    <td><span id="status_41"></span></td>
                                    <td> <span  id="remarks_41"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>BUTTERFLY VALVES</td>
                                    <td><span  id="code_42"></span></td>
                                    <td><span  id="status_42"></span></td>
                                    <td><span  id="remarks_42"></span></td>
                                </tr>   
                                <tr>
                                    <th scope="row"></th>
                                    <td>V-BELTS</td>
                                    <td><span  id="code_43"></span></td>
                                    <td><span id="status_43"></span></td>
                                    <td> <span  id="remarks_43"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>OIL LEVEL</td>
                                    <td><span  id="code_44"></span></td>
                                    <td><span id="status_44"></span></td>
                                    <td><span  id="remarks_44"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td>ELECTRONIC COMPONENTS WITHIN MCC PANEL</td>
                                    <td><span  id="code_45"></span></td>
                                    <td><span  id="status_45"></span></td>
                                    <td><span  id="remarks_45"></span></td>
                                </tr>
                          </tbody>
                      </table>
                 </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="close_modal">Close</button>
                  <button  id="btnPrint" class="btn btn-primary">Print</button>
                  <button id="btnExportExcel" class="btn btn-success">Export to Excel</button>
              </div>
          </form>
        </div>
      </div>
</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

<script>
    document.getElementById("btnPrint").onclick = function () {
        // Hide content outside the modal
        var outsideContent = document.querySelector('.content');
        outsideContent.style.display = 'none';

        // Hide other modals
        var otherModals = document.querySelectorAll('.modal');
        otherModals.forEach(function(modal) {
            if (modal.id !== 'edit') {
                modal.style.display = 'none';
            }
        });

        // Hide AdminLTE footer before printing
        var adminLTEFooter = document.querySelector('.main-footer');
        adminLTEFooter.style.display = 'none';

        // Print the table
        printElement(document.getElementById("printThis"));

        // Show content outside the modal
        outsideContent.style.display = 'block';

        // Show other modals again after printing
        otherModals.forEach(function(modal) {
            modal.style.display = 'block';
        });

        // Restore AdminLTE footer after printing
        adminLTEFooter.style.display = 'block';
    }

    document.getElementById("btnExportExcel").onclick = function () {
        exportToExcel(document.getElementById("printThis"));
    }

    function printElement(elem) {
        var domClone = elem.cloneNode(true);
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }

   function exportToExcel(table) {
    const filename = 'export.xlsx';
    const ws = XLSX.utils.table_to_sheet(table);
    
    // Auto-fit column widths based on content
    const range = XLSX.utils.decode_range(ws['!ref']);
    for (let C = range.s.c; C <= range.e.c; ++C) {
        let max_width = 0;
        for (let R = range.s.r; R <= range.e.r; ++R) {
            const cell_address = { c: C, r: R };
            const cell_ref = XLSX.utils.encode_cell(cell_address);
            if (!ws[cell_ref]) continue;
            const cell_value = ws[cell_ref].w || '';
            const cell_width = cell_value.length * 8; // Adjust this factor as needed
            max_width = Math.max(max_width, cell_width);
        }
        ws['!cols'] = ws['!cols'] || [];
        ws['!cols'][C] = { width: max_width / 8 }; // Convert to Excel column width units
    }
    
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
    XLSX.writeFile(wb, filename);
}

</script>

{{-- <script>
    document.getElementById("btnPrint").onclick = function () {
        // Hide content outside the modal
        var outsideContent = document.querySelector('.content');
        outsideContent.style.display = 'none';

        // Hide other modals
        var otherModals = document.querySelectorAll('.modal');
        otherModals.forEach(function(modal) {
            if (modal.id !== 'edit') {
                modal.style.display = 'none';
            }
        });

        // Hide AdminLTE footer before printing
        var adminLTEFooter = document.querySelector('.main-footer');
        adminLTEFooter.style.display = 'none';

        // Print the table
        printElement(document.getElementById("printThis"));

        // Show content outside the modal
        outsideContent.style.display = 'block';

        // Show other modals again after printing
        otherModals.forEach(function(modal) {
            modal.style.display = 'block';
        });

        // Restore AdminLTE footer after printing
        adminLTEFooter.style.display = 'block';
    }

    function printElement(elem) {
        var domClone = elem.cloneNode(true);
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
        $printSection.innerHTML = "";
        $printSection.appendChild(domClone);
        window.print();
    }


</script> --}}
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        alldata();

        function alldata(){
            $.ajax({
                url: '{{ route('monitoring_report.fetch') }}',
                method: 'GET',
                success: function(response) {
                   $("#all_data").html(response);
                    $('#all_data_table').DataTable({
                        order: [0, 'asc']
                    });
                }
            });
        }

        $('#create_monitoring_report').on('submit',function (e) {

            e.preventDefault();
            $("#btnSubmit").text('Submitting. . .');
            $('#btnSubmit').attr("disabled", true);

            var form = this; //FORM
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: "json",
                contentType:false,
                beforeSend: function(){
                    $(form).find('span.error-text').text('')
                },
                success: function(response) {
                    if(response.code == 0)
                    {
                        $('#btnSubmit').removeAttr("disabled"); 
                        $.each(response.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        $('#btnSubmit').text('Submit');

                    }
                    else
                    {
                        $(form)[0].reset(); 
                        $('#btnSubmit').removeAttr("disabled");
                        $('#btnSubmit').text('Submit'); 
                        alldata();
                        Swal.fire({

                            icon: 'success',
                            title: 'Created Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,

                        });

                        $('#create_report').modal('hide'); 
                    }
                    $('#close_modal').on('click', function () {
                        $(form)[0].reset();
                        $(form).find('span.error-text').text('');
                    });

                }
            });
        });

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('monitoring_report.edit') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#edit_id").val(response.id);
                    
                    // Get the decoded data
                    let decodedData = response.decodedData;
                    
                    // Loop through the decoded data and set values
                    decodedData.forEach(function(item, index) {
                                           
                        
                        let OG = "OG - OPERATION AND IN GOOD CONDITION";
                        let OR = "OR - OPERATION BUT NEED MINOR REPAIR";
                        let NO = "NO - NOT OPERATION";
                        let FR = "FR - FOR REPLACEMENT";
                        let HL = "HL - HIGH LEVEL";
                        let ML = "ML - MID LEVEL";
                        let LL = "LL - LOW LEVEL";
                        let FC = "FC - FOR CHANGE OIL";

                        let statusValue = item.status;

                        // Check if the status value matches any predefined value
                        switch (statusValue) {
                            case "OG":
                                statusValue = OG;
                                break;
                            case "OR":
                                statusValue = OR;
                                break;
                            case "NO":
                                statusValue = NO;
                                break;
                            case "FR":
                                statusValue = FR;
                                break;
                            case "HL":
                                statusValue = HL;
                                break;
                            case "ML":
                                statusValue = ML;
                                break;
                            case "LL":
                                statusValue = LL;
                                break;
                            case "FC":
                                statusValue = FC;
                                break;
                            default:
                                break;
                        }


                         // Set code value
                        $('#code_' + (index + 1)).text(item.code);
                        // Set status value
                        $('#status_' + (index + 1)).text(statusValue);
                        // Set remarks value
                        $('#remarks_' + (index + 1)).text(item.remarks);
                    });
                    
                }
                
            });
        });

       

    });
</script>
@endsection