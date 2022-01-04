@extends('layouts.front')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset($meal->pdf)}}" style="width: 100%" alt="">
            </div>
            <div class="col-md-6">
                {!! $meal->title !!}
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
