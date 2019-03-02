@extends('layouts.mainLayout')

@section('css')
    <style>
        ul#tempList {
            width: 100%;
            height: 170px;
            overflow-y: scroll;
        }
    </style>
    @endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <p class="float-left">
                <button class="btn btn-success" data-toggle="modal" data-target="#specification" id="addNew"
                        data-whatever="@getbootstrap">Add New Specification
                </button>
            </p>
            <div class="container mt-5" >
                <form  method="post" action="{{route('product.storeNext')}}">
                    <input type="hidden" value="{{$product->id}}" name="productSpecId">
                    @csrf
                <div id="specificationList" class="mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <select name="specificationId[]"  id="specificationId" class="form-control">
                            </select>
                        </div>
                        <div class="col-md-6">
                            <textarea name="SpecificationValue[]" id="SpecificationValue" class="form-control"></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger" id="addMore">Add More</button>
                        </div>
                    </div>
                </div>
                    <div id="specificationBody">
                        
                    </div>
                    <button type="submit" id="submitSpecification" class="btn btn-primary float-right mr-5" >next</button>
                </form>
            </div>
        </div>
    </div>



    {{--//Specification modal--}}
     <div class="modal fade" id="specification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" style="display: none;" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel-4 addNewSpecification">Add New Specification</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form>
                         @csrf
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Specification List:</label>
                             <ul id="tempList">

                             </ul>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="col-form-label">Specification Name:</label>
                             <input type="text" class="form-control" id="s_name" name="s_name">
                         </div>
                     </form>
                     <div id="c_error" class="error mt-2 text-danger"></div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" id="saveSpecification" class="btn btn-success">Save Specification</button>
                     <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
    @endsection


@section('js')

    <script>
        var selectTagId = [];
        
            $(document).ready(function () {
                var counter = 1;
                $.ajax({
                    type: 'POST',
                    url: "{!! route('specification.getData') !!}",
                    cache: false,
                    delay: 250,
                    data: {_token: "{{csrf_token()}}"},
                    success: function (data) {
                        console.log(data)
                        if(data){
                            $.each(data, function(key, value){
                                $('#specificationId').append('<option value="'+ value.name +'">' + value.name + '</option>');

                            });
                        }
                    },
                    error:function (er) {
                        toastr.error('Specification Already Added', {timeOut: 5000})
                    }

                })


                /*

                 */

                $('#addMore').click(function () {
                    counter++;
                    $.ajax({
                        type: 'POST',
                        url: "{!! route('specification.getData') !!}",
                        cache: false,
                        delay: 250,
                        data: {_token: "{{csrf_token()}}"},
                        success: function (data) {
                            console.log(data)
                            if(data){
                                $.each(data, function(key, value){
                                    $('#specificationId'+counter).append('<option value="'+ value.name +'">' + value.name + '</option>');

                                });
                            }
                        },
                        error:function (er) {
                            toastr.error('Specification Already Added', {timeOut: 5000})
                        }
                    })
                    $('#specificationBody').append("<div id=\"specificationList"+counter+"\" class=\"mt-4 mb-4\">\n" +
                        "                    <div class=\"row\">\n" +
                        "                        <div class=\"col-md-4 mt-3\">\n" +
                        "                            <select name=\"specificationId[]\"  id=\"specificationId"+counter+"\" class=\"form-control\">\n" +
                        "                            </select>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"col-md-6\">\n" +
                        "                            <textarea name=\"SpecificationValue[]\" id=\"SpecificationValue\" class=\"form-control\"></textarea>\n" +
                        "                        </div>\n" +
                        "                        <div class=\"col-md-2\">\n" +
                        "                            <button type=\"button\" id='"+counter+"' class=\"btn btn-danger btn-remove\"><i class=\"fa fa-trash\"></i></button>\n" +
                        "                        </div>\n" +
                        "                    </div>\n" +
                        "                </div>");
                        selectTagId.push("specificationId"+counter);
                        console.log(selectTagId);

                    $('.btn-remove').click(function () {
                        var buttonId = $(this).attr('id');
                        $('#specificationList'+buttonId).remove();
                        counter--;

                        console.log("selectTagId"+buttonId);
                        for (var i =0 ; i<selectTagId.length;i++){
                            if(selectTagId[i]=="specificationId"+buttonId){
                                selectTagId.splice(i,1);
                            }
                        }
                        console.log(selectTagId);

                    });



                });
            });


        $('#saveSpecification').click(function () {
            $.ajax({
                type: 'POST',
                url: "{!! route('specification.store') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'name':$('#s_name').val()},
                success: function (data) {
                    console.log(data.name)
                    if(data){
                        $('#specification').modal('hide');
                        toastr.success('Specification Added', {timeOut: 5000})
                        $('#specificationId').append('<option value="'+data.name +'">' + data.name + '</option>');
                        // $('#tempList').append('<option value="">''</option>');
                        for (var i =0 ; i<selectTagId.length;i++){
                            console.log('sdsd')    ;
                            $('#'+selectTagId[i]).append('<option value="'+data.name +'">' + data.name + '</option>');
                        }


                        $('#s_name').val(" ")
                    }
                },
                error:function (er) {
                    toastr.error('Specification Already Added', {timeOut: 5000})
                }

            })
        });
            $('#addNew').click(function () {
                $.ajax({
                    type: 'POST',
                    url: "{!! route('specification.getData') !!}",
                    cache: false,
                    delay: 250,
                    data: {_token: "{{csrf_token()}}"},
                    success: function (data) {
                        console.log(data)
                        $('#tempList').html("");
                        if(data){
                            $.each(data, function(key, value){
                                $('#tempList').append(`<li>${value.name}</li>`);
                            });
                        }
                    },
                    error:function (er) {
                        toastr.error('Specification Already Added', {timeOut: 5000})
                    }
                })
            });
                

            
    </script>

    @endsection