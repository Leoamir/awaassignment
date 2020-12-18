@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <!-- <div class="card-header">{{ __('Posts') }}</div> -->


                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- {{ __('You are logged in!') }} -->
                <!-- </div>
            </div>
        </div>
    </div> <br> -->


@foreach($posts  as $posts)
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Posted on: {{$posts->created_at}}</div>
                <div class="card-body" align="center">
                  <img src="{{url('/storage/photos')}}/{{$posts->content}}" width="200px"/>
                </div>
            </div>
        </div>
    </div> <br>
@endforeach

</div>
@endsection
