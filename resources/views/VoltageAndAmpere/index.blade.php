@extends('layouts.app')
@section('content')

<style>
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
                <h1 class="m-0">Voltage & Ampere Monitoring</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header w-100 d-flex justify-content-between align-items-center">
                        <h4 class="text-dark w-100 pt-2">Manage Voltage & Ampere </h4>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create">
                            Create
                       </button>
                    </div>
                    <div class="card-body" id="voltage_ampere_data">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">Create</h5>
        </div>
        <form action="{{ route('voltage_ampere.store')}}" method="POST" id="create_voltage_ampere" enctype="multipart/form-data">
            @csrf
            <div class="modal-body p-4 bg-light" style="max-height: 70vh; overflow-y: auto;">
                <div class="row">
                    <div class="col-lg ">
                        <table class="table table-bordered" >
                            <thead>
                            <tr>
                                <th rowspan="2">CKT. No</th>
                                <th rowspan="2">Load Details</th>
                                <th colspan="3" class="text-center">Actual Ampere</th>
                                <th colspan="3" class="text-center">Actual Voltage</th>
                            </tr>
                            <tr>
                                <th>L1</th>
                                <th>L2</th>
                                <th>L3</th>
                                <th>L1-L2</th>
                                <th>L2-L3</th>
                                <th>L3-L1</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><b>BLOWER 1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><b>BLOWER 2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">3</th>
                                    <td><b>BLOWER 3</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">4</th>
                                    <td><b>BLOWER 4</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">5</th>
                                    <td><b>BLOWER 5</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td><b>EQT P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">7</th>
                                    <td><b>EQT P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">8</th>
                                    <td><b>EQT P3</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">9</th>
                                    <td><b>EQT P4</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">10</th>
                                    <td><b>CCT P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">11</th>
                                    <td><b>CCT P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><b>CCT P3</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">13</th>
                                    <td><b>CCT P4</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                <tr>
                                    <th scope="row">14</th>
                                    <td><b>DECANTER P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">15</th>
                                    <td><b>DECANTER P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                <tr>
                                    <th scope="row">16</th>
                                    <td><b>RASD P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">17</th>
                                    <td><b>RASD P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>


                                 <tr>
                                    <th scope="row">18</th>
                                    <td><b>SBR ASD P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">19</th>
                                    <td><b>SBR ASD P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                <tr>
                                    <th scope="row">20</th>
                                    <td><b>SBR ASD P3</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">21</th>
                                    <td><b>SBR ASD P4</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                <tr>
                                    <th scope="row">22</th>
                                    <td><b>TRANSFER P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">23</th>
                                    <td><b>TRANSFER P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                <tr>
                                    <th scope="row">24</th>
                                    <td><b>CENTRIFUGAL P1</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">25</th>
                                    <td><b>CENTRIFUGAL P2</b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                                 <tr>
                                    <th scope="row">26</th>
                                    <td><b>CHLORINE </b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>
                                 <tr>
                                    <th scope="row">27</th>
                                    <td><b>CHEM. FEED </b></td>
                                    <td><input type="number" step="any" name="L1[]"  class="form-control" placeholder="L1"></td>
                                    <td><input type="number" step="any" name="L2[]"  class="form-control" placeholder="L2"></td>
                                    <td><input type="number" step="any" name="L3[]"  class="form-control" placeholder="L3"></td>
                                    <td><input type="number" step="any" name="L1_L2[]"  class="form-control" placeholder="L1 - L2"></td>
                                    <td><input type="number" step="any" name="L2_L3[]"  class="form-control" placeholder="L2 - L3"></td>
                                    <td><input type="number" step="any" name="L3_L1[]"  class="form-control" placeholder="L3 - L1"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
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
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">View</h5>
        </div>
       
            <div class="modal-body p-4 bg-light" style="max-height: 70vh; overflow-y: auto;">
                <div class="row">
                    <div class="col-lg ">
                         <input type="hidden" name="edit_id" id="edit_id">

                        <table class="table table-bordered"  id="printThis">
                            <thead>
                            <tr>
                                <th rowspan="2">CKT. No</th>
                                <th rowspan="2">Load Details</th>
                                <th colspan="3" class="text-center">Actual Ampere</th>
                                <th colspan="3" class="text-center">Actual Voltage</th>
                            </tr>
                            <tr>
                                <th>L1</th>
                                <th>L2</th>
                                <th>L3</th>
                                <th>L1-L2</th>
                                <th>L2-L3</th>
                                <th>L3-L1</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><b>BLOWER 1</b></td>
                                    <td><span id="L1_data_1"></span></td>
                                    <td><span id="L2_data_1"></span></td>
                                    <td><span id="L3_data_1"></span></td>
                                    <td><span id="L1_L2_data_1"></span></td>
                                    <td><span id="L2_L3_data_1"></span></td>
                                    <td><span id="L3_L1_data_1"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><b>BLOWER 2</b></td>
                                    <td><span id="L1_data_2"></span></td>
                                    <td><span id="L2_data_2"></span></td>
                                    <td><span id="L3_data_2"></span></td>
                                    <td><span id="L1_L2_data_2"></span></td>
                                    <td><span id="L2_L3_data_2"></span></td>
                                    <td><span id="L3_L1_data_2"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><b>BLOWER 3</b></td>
                                    <td><span id="L1_data_3"></span></td>
                                    <td><span id="L2_data_3"></span></td>
                                    <td><span id="L3_data_3"></span></td>
                                    <td><span id="L1_L2_data_3"></span></td>
                                    <td><span id="L2_L3_data_3"></span></td>
                                    <td><span id="L3_L1_data_3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><b>BLOWER 4</b></td>
                                    <td><span id="L1_data_4"></span></td>
                                    <td><span id="L2_data_4"></span></td>
                                    <td><span id="L3_data_4"></span></td>
                                    <td><span id="L1_L2_data_4"></span></td>
                                    <td><span id="L2_L3_data_4"></span></td>
                                    <td><span id="L3_L1_data_4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><b>BLOWER 5</b></td>
                                    <td><span id="L1_data_5"></span></td>
                                    <td><span id="L2_data_5"></span></td>
                                    <td><span id="L3_data_5"></span></td>
                                    <td><span id="L1_L2_data_5"></span></td>
                                    <td><span id="L2_L3_data_5"></span></td>
                                    <td><span id="L3_L1_data_5"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td><b>EQT P1</b></td>
                                    <td><span id="L1_data_6"></span></td>
                                    <td><span id="L2_data_6"></span></td>
                                    <td><span id="L3_data_6"></span></td>
                                    <td><span id="L1_L2_data_6"></span></td>
                                    <td><span id="L2_L3_data_6"></span></td>
                                    <td><span id="L3_L1_data_6"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td><b>EQT P2</b></td>
                                    <td><span id="L1_data_7"></span></td>
                                    <td><span id="L2_data_7"></span></td>
                                    <td><span id="L3_data_7"></span></td>
                                    <td><span id="L1_L2_data_7"></span></td>
                                    <td><span id="L2_L3_data_7"></span></td>
                                    <td><span id="L3_L1_data_7"></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><b>EQT P3</b></td>
                                    <td><span id="L1_data_8"></span></td>
                                    <td><span id="L2_data_8"></span></td>
                                    <td><span id="L3_data_8"></span></td>
                                    <td><span id="L1_L2_data_8"></span></td>
                                    <td><span id="L2_L3_data_8"></span></td>
                                    <td><span id="L3_L1_data_8"></td>
                                </tr>

                                <tr>
                                    <th scope="row">9</th>
                                    <td><b>EQT P4</b></td>
                                    <td><span id="L1_data_9"></span></td>
                                    <td><span id="L2_data_9"></span></td>
                                    <td><span id="L3_data_9"></span></td>
                                    <td><span id="L1_L2_data_9"></span></td>
                                    <td><span id="L2_L3_data_9"></span></td>
                                    <td><span id="L3_L1_data_9"></td>
                                </tr>


                                 <tr>
                                    <th scope="row">10</th>
                                    <td><b>CCT P1</b></td>
                                    <td><span id="L1_data_10"></span></td>
                                    <td><span id="L2_data_10"></span></td>
                                    <td><span id="L3_data_10"></span></td>
                                    <td><span id="L1_L2_data_10"></span></td>
                                    <td><span id="L2_L3_data_10"></span></td>
                                    <td><span id="L3_L1_data_10"></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td><b>CCT P2</b></td>
                                    <td><span id="L1_data_11"></span></td>
                                    <td><span id="L2_data_11"></span></td>
                                    <td><span id="L3_data_11"></span></td>
                                    <td><span id="L1_L2_data_11"></span></td>
                                    <td><span id="L2_L3_data_11"></span></td>
                                    <td><span id="L3_L1_data_11"></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><b>CCT P3</b></td>
                                    <td><span id="L1_data_12"></span></td>
                                    <td><span id="L2_data_12"></span></td>
                                    <td><span id="L3_data_12"></span></td>
                                    <td><span id="L1_L2_data_12"></span></td>
                                    <td><span id="L2_L3_data_12"></span></td>
                                    <td><span id="L3_L1_data_12"></td>
                                </tr>

                                <tr>
                                    <th scope="row">13</th>
                                    <td><b>CCT P4</b></td>
                                    <td><span id="L1_data_13"></span></td>
                                    <td><span id="L2_data_13"></span></td>
                                    <td><span id="L3_data_13"></span></td>
                                    <td><span id="L1_L2_data_13"></span></td>
                                    <td><span id="L2_L3_data_13"></span></td>
                                    <td><span id="L3_L1_data_13"></td>
                                </tr>

                                <tr>
                                    <th scope="row">14</th>
                                    <td><b>DECANTER P1</b></td>
                                    <td><span id="L1_data_14"></span></td>
                                    <td><span id="L2_data_14"></span></td>
                                    <td><span id="L3_data_14"></span></td>
                                    <td><span id="L1_L2_data_14"></span></td>
                                    <td><span id="L2_L3_data_14"></span></td>
                                    <td><span id="L3_L1_data_14"></td>
                                </tr>

                                <tr>
                                    <th scope="row">15</th>
                                    <td><b>DECANTER P2</b></td>
                                    <td><span id="L1_data_15"></span></td>
                                    <td><span id="L2_data_15"></span></td>
                                    <td><span id="L3_data_15"></span></td>
                                    <td><span id="L1_L2_data_15"></span></td>
                                    <td><span id="L2_L3_data_15"></span></td>
                                    <td><span id="L3_L1_data_15"></td>
                                </tr>

                                <tr>
                                    <th scope="row">16</th>
                                    <td><b>RASD P1</b></td>
                                    <td><span id="L1_data_16"></span></td>
                                    <td><span id="L2_data_16"></span></td>
                                    <td><span id="L3_data_16"></span></td>
                                    <td><span id="L1_L2_data_16"></span></td>
                                    <td><span id="L2_L3_data_16"></span></td>
                                    <td><span id="L3_L1_data_16"></td>
                                </tr>

                                <tr>
                                    <th scope="row">17</th>
                                    <td><b>RASD P2</b></td>
                                    <td><span id="L1_data_17"></span></td>
                                    <td><span id="L2_data_17"></span></td>
                                    <td><span id="L3_data_17"></span></td>
                                    <td><span id="L1_L2_data_17"></span></td>
                                    <td><span id="L2_L3_data_17"></span></td>
                                    <td><span id="L3_L1_data_17"></td>
                                </tr>


                                <tr>
                                    <th scope="row">18</th>
                                    <td><b>SBR ASD P1</b></td>
                                    <td><span id="L1_data_18"></span></td>
                                    <td><span id="L2_data_18"></span></td>
                                    <td><span id="L3_data_18"></span></td>
                                    <td><span id="L1_L2_data_18"></span></td>
                                    <td><span id="L2_L3_data_18"></span></td>
                                    <td><span id="L3_L1_data_18"></td>
                                </tr>

                                <tr>
                                    <th scope="row">19</th>
                                    <td><b>SBR ASD P2</b></td>
                                    <td><span id="L1_data_19"></span></td>
                                    <td><span id="L2_data_19"></span></td>
                                    <td><span id="L3_data_19"></span></td>
                                    <td><span id="L1_L2_data_19"></span></td>
                                    <td><span id="L2_L3_data_19"></span></td>
                                    <td><span id="L3_L1_data_19"></td>
                                </tr>

                                <tr>
                                    <th scope="row">20</th>
                                    <td><b>SBR ASD P3</b></td>
                                    <td><span id="L1_data_20"></span></td>
                                    <td><span id="L2_data_20"></span></td>
                                    <td><span id="L3_data_20"></span></td>
                                    <td><span id="L1_L2_data_20"></span></td>
                                    <td><span id="L2_L3_data_20"></span></td>
                                    <td><span id="L3_L1_data_20"></td>
                                </tr>

                                <tr>
                                    <th scope="row">21</th>
                                    <td><b>SBR ASD P4</b></td>
                                    <td><span id="L1_data_21"></span></td>
                                    <td><span id="L2_data_21"></span></td>
                                    <td><span id="L3_data_21"></span></td>
                                    <td><span id="L1_L2_data_21"></span></td>
                                    <td><span id="L2_L3_data_21"></span></td>
                                    <td><span id="L3_L1_data_21"></td>
                                </tr>

                                <tr>
                                    <th scope="row">22</th>
                                    <td><b>TRANSFER P1</b></td>
                                    <td><span id="L1_data_22"></span></td>
                                    <td><span id="L2_data_22"></span></td>
                                    <td><span id="L3_data_22"></span></td>
                                    <td><span id="L1_L2_data_22"></span></td>
                                    <td><span id="L2_L3_data_22"></span></td>
                                    <td><span id="L3_L1_data_22"></td>
                                </tr>

                                <tr>
                                    <th scope="row">23</th>
                                    <td><b>TRANSFER P2</b></td>
                                    <td><span id="L1_data_23"></span></td>
                                    <td><span id="L2_data_23"></span></td>
                                    <td><span id="L3_data_23"></span></td>
                                    <td><span id="L1_L2_data_23"></span></td>
                                    <td><span id="L2_L3_data_23"></span></td>
                                    <td><span id="L3_L1_data_23"></td>
                                </tr>


                                <tr>
                                    <th scope="row">24</th>
                                    <td><b>CENTRIFUGAL P1</b></td>
                                    <td><span id="L1_data_24"></span></td>
                                    <td><span id="L2_data_24"></span></td>
                                    <td><span id="L3_data_24"></span></td>
                                    <td><span id="L1_L2_data_24"></span></td>
                                    <td><span id="L2_L3_data_24"></span></td>
                                    <td><span id="L3_L1_data_24"></td>
                                </tr>

                                <tr>
                                    <th scope="row">25</th>
                                    <td><b>CENTRIFUGAL P2</b></td>
                                    <td><span id="L1_data_25"></span></td>
                                    <td><span id="L2_data_25"></span></td>
                                    <td><span id="L3_data_25"></span></td>
                                    <td><span id="L1_L2_data_25"></span></td>
                                    <td><span id="L2_L3_data_25"></span></td>
                                    <td><span id="L3_L1_data_25"></td>
                                </tr>

                                <tr>
                                    <th scope="row">26</th>
                                    <td><b>CHLORINE </b></td>
                                    <td><span id="L1_data_26"></span></td>
                                    <td><span id="L2_data_26"></span></td>
                                    <td><span id="L3_data_26"></span></td>
                                    <td><span id="L1_L2_data_26"></span></td>
                                    <td><span id="L2_L3_data_26"></span></td>
                                    <td><span id="L3_L1_data_26"></td>
                                </tr>

                                <tr>
                                    <th scope="row">27</th>
                                    <td><b>CHEM. FEED </b></td>
                                    <td><span id="L1_data_27"></span></td>
                                    <td><span id="L2_data_27"></span></td>
                                    <td><span id="L3_data_27"></span></td>
                                    <td><span id="L1_L2_data_27"></span></td>
                                    <td><span id="L2_L3_data_27"></span></td>
                                    <td><span id="L3_L1_data_27"></td>
                                </tr>


                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="close_modal">Close</button>
                <button  id="btnPrint" class="btn btn-primary">Print</button>
                <button id="btnExportExcel" class="btn btn-success">Export to Excel</button>
              
            </div>
        
      </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

{{-- PRint --}}

<script>
    document.getElementById("btnPrint").addEventListener("click", function() {
        var printContents = document.getElementById("printThis").outerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    });
</script>

{{-- EXCEL --}}
<script>

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
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        getdata();

        function getdata(){
            $.ajax({
                url: '{{ route('voltage_ampere.fetch') }}',
                method: 'GET',
                success: function(response) {
                   $("#voltage_ampere_data").html(response);
                    $('#voltage_ampere_table').DataTable({
                        order: [0, 'asc']
                    });
                }
            });
        }

        $('#create_voltage_ampere').on('submit',function (e) {

            e.preventDefault();
            $("#btnSubmit").text('Submitting. . .');
            $('#btnSubmit').attr("disabled", true);

            var form = this; 
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
                        getdata();
                        Swal.fire({

                            icon: 'success',
                            title: 'Created Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,

                        });

                        $('#create').modal('hide'); 
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
                url: '{{ route('voltage_ampere.edit') }}',
                method: 'GET',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {

                    $("#edit_id").val(response.id);
                    let decodedData = response.decodedData;
                    decodedData.forEach(function(item, index) {

                        $('#L1_data_' + (index + 1)).text(item.L1);
                        $('#L2_data_' + (index + 1)).text(item.L2);
                        $('#L3_data_' + (index + 1)).text(item.L3);
                        $('#L1_L2_data_' + (index + 1)).text(item.L1_L2);
                        $('#L2_L3_data_' + (index + 1)).text(item.L2_L3);
                        $('#L3_L1_data_' + (index + 1)).text(item.L3_L1);
                    
                    });
                    
                }
            });
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('voltage_ampere.delete') }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            console.log(response);
                            getdata();
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted Successfully.',
                                showConfirmButton: false,
                                timer: 1700,
                            })
                        }
                    });
                }
            })
        });
      

        // $("#edit_data").on('submit', function (e) {
        //     e.preventDefault();
        //     $("#edit_btnSubmit").text('Updating . . . ');
        //     $('#edit_btnSubmit').attr("disabled", true);
        //     var form = this;

        //     $.ajax({
        //         url:$(form).attr('action'),
        //         method:$(form).attr('method'),
        //         data: new FormData(form),
        //         processData: false,
        //         dataType: "json",
        //         contentType:false,
        //         beforeSend: function(){
        //            $(form).find('span.error-text').text('');
        //         },
        //         success: function (response) {

        //             if(response.code == 0){
        //                 $('#edit_btnSubmit').removeAttr("disabled");

        //                 $.each(response.error, function(prefix, val){
        //                     $(form).find('span.'+prefix+'_error').text(val[0]);
        //                 });

        //                 $("#edit_btnSubmit").text('Update');

        //             }
        //             else{

        //                 $(form)[0].reset();
        //                 $('#edit_btnSubmit').removeAttr("disabled");
        //                 $('#edit_btnSubmit').text('Update');
        //                 getdata();
        //                 $("#edit").modal('hide');

        //                 Swal.fire({
        //                     icon: 'success',
        //                     title: 'Updated Successfully',
        //                     showConfirmButton: false,
        //                     timer: 1700,
        //                     timerProgressBar: true,

        //                 })

        //             }

        //             $('#edit_close_modal').on('click', function () {
        //                 $(form)[0].reset();
        //                 $(form).find('span.error-text').text('');
        //             });


        //         }
        //     });
        // });

    });
</script>

@endsection