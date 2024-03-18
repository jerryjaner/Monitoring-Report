@extends('layouts.app')
@section('content')


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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">Create</h5>
        </div>
        <form action="{{ route('voltage_ampere.store')}}" method="POST" id="create_voltage_ampere" enctype="multipart/form-data">
            @csrf
            <div class="modal-body p-4 bg-light">

                <div class="row">
                    <div class="col-lg ">
                        <label>Load Description</label>
                        <input type="text" name="load_description"  class="form-control" placeholder="Load Description" >
                        <span class="text-danger error-text load_description_error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Breaker Rating</label>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_AT" class="form-control" placeholder="AT" aria-label="AT">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_AF" class="form-control" placeholder="AF" aria-label="AF">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_P" class="form-control" placeholder="P" aria-label="P">
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Actual Ampere</label>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L1" class="form-control" placeholder="L1" aria-label="L1">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L2" class="form-control" placeholder="L2" aria-label="L2">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L3" class="form-control" placeholder="L3" aria-label="L3">
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Actual Voltage</label>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L1_L2" class="form-control" placeholder="L1-L2" aria-label="L1-L2">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L2_L3" class="form-control" placeholder="L2-L3" aria-label="L2-L3">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L3_L1" class="form-control" placeholder="L3-L1" aria-label="L3-L1">
                        </div>
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

{{-- edit --}}
<div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="exampleModalLabel">Edit</h5>
        </div>
        <form action="{{route('voltage_ampere.update')}}" method="POST" id="edit_data" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="edit_id" id="edit_id">
            <div class="modal-body p-4 bg-light">
               
                <div class="row">
                    <div class="col-lg ">
                        <label>Load Description</label>
                        <input type="text" name="load_description" id="load_description"  class="form-control" placeholder="Load Description" >
                        <span class="text-danger error-text load_description_error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Breaker Rating</label>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_AT" id="breaker_rating_AT" class="form-control" placeholder="AT" aria-label="AT">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_AF" id="breaker_rating_AF" class="form-control" placeholder="AF" aria-label="AF">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="breaker_rating_P" id="breaker_rating_P" class="form-control" placeholder="P" aria-label="P">
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Actual Ampere</label>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L1" id="actual_ampere_L1" class="form-control" placeholder="L1" aria-label="L1">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L2" id="actual_ampere_L2" class="form-control" placeholder="L2" aria-label="L2">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_ampere_L3" id="actual_ampere_L3" class="form-control" placeholder="L3" aria-label="L3">
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="row g-3">
                        <label>Actual Voltage</label>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L1_L2" id="actual_voltage_L1_L2" class="form-control" placeholder="L1-L2" aria-label="L1-L2">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L2_L3" id="actual_voltage_L2_L3" class="form-control" placeholder="L2-L3" aria-label="L2-L3">
                        </div>
                        <div class="col-sm">
                          <input type="text" name="actual_voltage_L3_L1" id="actual_voltage_L3_L1" class="form-control" placeholder="L3-L1" aria-label="L3-L1">
                        </div>
                      </div>
                </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="edit_close_modal">Close</button>
                <button type="submit"  id="edit_btnSubmit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

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
                    $("#load_description").val(response.load_description);
                    $("#breaker_rating_AT").val(response.breaker_rating_AT);
                    $("#breaker_rating_AF").val(response.breaker_rating_AF);
                    $("#breaker_rating_P").val(response.breaker_rating_P);
                    $("#actual_ampere_L1").val(response.actual_ampere_L1);
                    $("#actual_ampere_L2").val(response.actual_ampere_L2);
                    $("#actual_ampere_L3").val(response.actual_ampere_L3);
                    $("#actual_voltage_L1_L2").val(response.actual_voltage_L1_L2);
                    $("#actual_voltage_L2_L3").val(response.actual_voltage_L2_L3);
                    $("#actual_voltage_L3_L1").val(response.actual_voltage_L3_L1);
                }
            });
        });

        $("#edit_data").on('submit', function (e) {
            e.preventDefault();
            $("#edit_btnSubmit").text('Updating . . . ');
            $('#edit_btnSubmit').attr("disabled", true);
            var form = this;

            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: "json",
                contentType:false,
                beforeSend: function(){
                   $(form).find('span.error-text').text('');
                },
                success: function (response) {

                    if(response.code == 0){
                        $('#edit_btnSubmit').removeAttr("disabled");

                        $.each(response.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });

                        $("#edit_btnSubmit").text('Update');

                    }
                    else{

                        $(form)[0].reset();
                        $('#edit_btnSubmit').removeAttr("disabled");
                        $('#edit_btnSubmit').text('Update');
                        getdata();
                        $("#edit").modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Updated Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,

                        })

                    }

                    $('#edit_close_modal').on('click', function () {
                        $(form)[0].reset();
                        $(form).find('span.error-text').text('');
                    });


                }
            });
        });

    });
</script>

@endsection