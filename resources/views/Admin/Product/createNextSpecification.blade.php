@extends('layouts.mainLayout')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('product.specificationStore')}}" method="post">
            @csrf
            <input type="hidden" name="productId" value="{{$productId}}">
        <div id="faqList" class="mt-4 mb-4">
            <div class="row">
                <div class="col-md-5">
                    <h5 class="text-muted text-center">Question</h5>
                </div>
                <div class="col-md-5">
                    <h5 class="text-muted text-center">Answer</h5>
                </div>
            </div>
            <div class="row">

                <div class="col-md-5">
                    <textarea name="faqQuestion[]" id="faqQuestion" class="form-control" placeholder="Question" required></textarea>
                </div>
                <div class="col-md-5">
                    <textarea name="faqAnswer[]" id="faqAnswer" class="form-control" placeholder="Answer" required></textarea>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" id="addMore">Add More</button>
                </div>
            </div>

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
    </script>
    @endsection