<form>
    @csrf
    <div class="form-group">
        <input type="hidden" value="{{$category->id}}" name="c_id" id="c_id">
        <label for="recipient-name" class="col-form-label">Category Name:</label>
        <input type="text" class="form-control c_name" value="{{$category->c_name}}" name="c_name" > </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label">Category Type:</label>
        <select class="form-control c_type"  name="c_type">
            @foreach(Category as $key=>$value)
                <option value="{{$key}}" {{ $category->c_type == $key ? 'selected="selected"' : '' }}>{{$value}}</option>
            @endforeach
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" onclick="updateCategory()"  class="btn btn-success">Save Category</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>

    </div>
</form>
<script>
    function updateCategory() {
        $.ajax({
            type: 'POST',
            url: "{!! route('category.update') !!}",
            cache: false,
            data: {_token: "{{csrf_token()}}",'id':$('#c_id').val(),'c_type':$('.c_type').val(),'c_name':$('.c_name').val()},
            success: function (data) {
                console.log(data)
                if(data){
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
                    $('#editCategory').modal('hide');
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
</script>