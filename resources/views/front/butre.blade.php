@extends('layouts.front')
@section('content')
    <div class="container mt-5" id="butre">
        <div class="row">
            <div class="col-md-12">
                <img style="width: 100%" src="{{asset($content->image_9)}}" alt="">
                <br>
                <br>
               {!! $content->d_5 !!}
                <img style="width: 100%" src="{{asset($content->image_10)}}" alt="">
            </div>
        </div>
    </div>
@endsection
