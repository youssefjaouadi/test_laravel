@extends('layouts.parent')
@section('layout_content')
    <div class="container"  style="padding-top: 2%">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <br>
            <table class="table table-hover table-striped table-bordered" style="background-color: white;">
                <thead class="text-center">
                <tr>
                    <th class="text-center">#</th>
                    <th>Note Title</th>
                    <th>Author</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $d)
                <tr>
                    <td class="text-center">{{ $d->id }}</td>
                    <td>{{ $d->title }}</td>
                    <td>{{ $d->user->name }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
