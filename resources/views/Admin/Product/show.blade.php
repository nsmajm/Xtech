@extends('layouts.mainLayout')


@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12" id="table-load">
                    <table id="order-listing" class="table">
                        <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php  $counter=1?>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$counter++}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->c_name}}</td>
                            <td>{{$product->created_at->toDateString()}}</td>
                            <td>
                                <a target="_blank" style="padding: 10px;color: #fff;" href="{{route('singleProduct',[$product->id])}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{route('product.edit',[$product->id])}}" style="padding: 10px;color: #fff;" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <button style="padding: 10px" class="btn btn-sm btn-danger" data-panel-id="{{$product->id}}" onclick="deleteProduct(this)" ><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('js')
    <script src="{{url('public/assets/js/shared/data-table.js')}}"></script>
    <script>
        {{--$(document).ready(function () {--}}
            {{--$('#newRecordButton').click(function () {--}}
                    {{--window.open('{!! route('product.create') !!}')--}}
            {{--});--}}
            {{--/*--}}
                   {{--get id from data-panel id--}}
                   {{--#deleteProduct id the delete button--}}
                   {{----}}
             {{--*/--}}
            {{----}}
            {{--$('#deleteProduct').click(function () {--}}
                {{----}}
            {{--});--}}

        {{--})--}}

        function deleteProduct(x){
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        var id = $(x).data('panel-id');
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('product.destroy') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id':id},
                            success: function (data) {
                                toastr.success('Product Deleted Successfully', {timeOut: 5000})
                                location.reload();
                            },
                            error:function (er) {
                                toastr.error('Error', {timeOut: 5000})
                            }
                        })

                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                }
            });

        }
    </script>
    @endsection