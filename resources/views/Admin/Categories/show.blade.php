@extends('layouts.mainLayout')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <p class="card-description text-right">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal-4"
                            data-whatever="@getbootstrap">Add New
                    </button>
                </p>
                <table class="table table-striped user" >
                    <thead>
                    <tr>
                        <th> Category Name </th>
                        <th> Category Type </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                    <tr>

                        <td class="py-1">
                            {{$cat->c_name}}
                        <td>
                            @foreach(Category as $key=>$value)
                                @if($cat->c_type==$key)
                                    {{$value}}
                                @endif
                                @endforeach
                        </td>
                        <td>

                                <button class="btn btn-primary btn-sm" id="editButton" data-panel-id="{{$cat->id}}" onclick="editCategory(this)">
                                    <i class="mdi mdi-tooltip-edit"></i>
                                </button>
                               <button class="btn btn-danger btn-sm" id="deleteButton" data-panel-id="{{$cat->id}}" onclick="deleteCategory(this)">
                                   <i class="mdi  mdi-delete"></i>
                               </button>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--Add New Modal--}}
    <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-4">Add New category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label for="c_name" class="col-form-label">Category Name:</label>
                            <input type="text" class="form-control" id="c_name" name="c_name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Category Type:</label>
                            <select class="form-control" id="c_type" name="c_type">
                            @foreach(Category as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>

                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="c_name" class="col-form-label">Category image:</label>--}}
                            {{--<input type="file" class="form-control" id="c_image" name="c_image" accept="image/jpeg">--}}
                        {{--</div>--}}
                    </form>
                   <div id="c_error" class="error mt-2 text-danger"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="saveCategory()" class="btn btn-success">Save Category</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



{{--Edit Modal--}}


    <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-4">Add New category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="editUserBody">

                </div>

            </div>
        </div>
    </div>
    @endsection


@section('js')
    <script>
        function saveCategory() {
            $.ajax({
                type: 'POST',
                url: "{!! route('category.store') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'c_type':$('#c_type').val(),'c_name':$('#c_name').val()},
                success: function (data) {

                    if(data){
                        $('#c_type').val("");
                        $('#c_name').val("");
                        swal({
                            title: 'Congratulations!',
                            text: 'Category Saved',
                            icon: 'success',
                            button: {
                                text: "Continue",
                                value: true,
                                visible: true,
                                className: "btn btn-primary"
                            }
                        })
                        $('#exampleModal-4').modal('hide');
                        $('.user').load(location.href +' .user');
                    }
                },
                error:function (er) {
                    swal({
                        title: 'fail!',
                        text: 'Category Already Exists',
                        icon: 'warning',
                        button: {
                            text: "Continue",
                            value: true,
                            visible: true,
                            className: "btn btn-primary"
                        }
                    })
                }

            })
        }
        function editCategory(x) {
            var id=$(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url: "{!! route('category.create') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'id': id},
                success: function (data) {
//                    console.log(data);
                    $('#editUserBody').html(data);
                    $('#editCategory').modal();
                }
            });
        }

        function deleteCategory(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        var id=$(x).data('panel-id');
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('category.destroy') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $.alert('Category Deleted!');
                                $('.user').load(location.href +' .user');
                            }
                        });

                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                }
            });

        }
    </script>
    @endsection