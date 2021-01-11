@extends('layouts.app')
@section('content')
<section class="content">
    <div class="container">
        <div class="text-center">
            <img src="{{asset('storage/'.$image->file)}}" alt="..." class="img-thumbnail">
            <h2>{{$image->name}}</h2>
        </div>
    </div>
</section>
@endsection
