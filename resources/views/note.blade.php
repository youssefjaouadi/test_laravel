@extends('layouts.parent')
@section('layout_content')

{{--<div>--}}
{{--    @foreach ($data as $d)--}}
{{--        Hello, {{ $d->user->name }} <br />--}}
{{--    @endforeach--}}
{{--</div>--}}
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




        <form method="POST" action="/submit-note">
            @csrf

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <h3>Title</h3>
                <br>
                <input name="title" class='form-control no_borders' type="text"/>
                <br>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="inline-headers">
                    <h3>Description </h3>
                    <h5>
                    </h5>
                </div>
                <br>
                <textarea name="description" class='form-control no_borders' rows=15, cols="35"></textarea>
                <br>
                <br>
                <div>
                    public :
                    yes <input type="radio" name="public" value="1" checked>
                    no <input type="radio" name="public" value="0">
                </div>
                <br>
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="submit" value="submit" class="form-control no_borders btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
