@extends('layouts.mainLayout')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('product.faq.update')}}" method="post">
                @csrf
                <div class="row">
                    <div class="float-left"><button type="button" class="btn btn-danger" id="addMore">Add More</button></div>
                </div>
                <div id="faqList" class="mt-4 mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <h5 class="text-muted text-center">Question</h5>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-muted text-center">Answer</h5>
                    </div>
                </div>
                    <input type="hidden" value="{{$productId}}" name="product_id">
                    @foreach($faqLists as $list)
                        <div class="row mt-3">

                            <div class="col-md-5">
                                <textarea name="faqQuestion[]" id="faqQuestion" class="form-control" placeholder="Question" required>
                                    {{$list->faq_question}}
                                </textarea>
                            </div>
                            <div class="col-md-5">
                                <textarea name="faqAnswer[]" id="faqAnswer" class="form-control" placeholder="Answer" required>
                                     {{$list->faq_answer}}
                                </textarea>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-danger"
                                        data-panel-id="{{$list->id}}" onclick="deleteSingleFaq(this)"
                                        id="deleteButton"><i class="fa fa-trash"></i></button>
                            </div>

                        </div>
                        @endforeach



                </div>
                <div id="faqBody">

                </div>
                <button class="float-right btn btn-danger" type="submit">Next</button>
            </form>
        </div>
    </div>
@endsection


@section('js')
    <script>
        var counter = 1;
        $('#addMore').click(function () {
            counter++;
            $('#faqBody').append(`<div id="faqList${counter}" class="mt-4 mb-4">
            <div class="row">
                <div class="col-md-5">
                    <textarea name="faqQuestion[]" id="faqQuestion" class="form-control" placeholder="Question" required></textarea>
                </div>
                <div class="col-md-5">
                    <textarea name="faqAnswer[]" id="faqAnswer" class="form-control" placeholder="Answer" required></textarea>
                </div>
                <div class="col-md-2">
                    <button type="button" id="${counter}" class="btn btn-danger btn-remove" id="removeMore"><i class="fa fa-trash"></i></button>
                </div>
            </div>

        </div>`);
            $('.btn-remove').click(function () {
                var buttonId = $(this).attr('id');
                $('#faqList'+buttonId).remove();
                counter--;
            });
        });
        
        function deleteSingleFaq(x) {
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        var id = $(x).data('panel-id');
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('product.faq.delete') !!}",
                            cache: false,
                            data: {_token: "{{csrf_token()}}",'id': id},
                            success: function (data) {
                                $('#faqList').load(location.href +' #faqList');
                                $.alert('Faq deleted Successfully');
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