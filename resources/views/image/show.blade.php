@extends('layouts.app')
@section('content')
<section class="content">
    <div class="container">
        <div class="text-center">
            <img src="{{asset('storage/'.$image->file)}}" alt="..." class="img-thumbnail">
            <h2>{{$image->name}}</h2>
        </div>
        @foreach ($products as $product)
        <div class="content border">
            @if ($product->image == $image)
            {{-- {{$counter++}} --}}
            <h5>{{$product->name}}</h5>
            <p>With {{$product->ingredient}}</p>
            <p>{{$product->desc}}</p>
            <p><i>Netto</i> {{$product->weight}}{{$product->unit}} | IDR. {{$product->price}}</p>
            <div class="d-flex justify-content-end mb-2">
                <a href="" class="btn btn-warning mx-1">Edit</a>
                <a href="" class="btn btn-danger mx-1">Hapus</a>
            </div>
            @endif
        </div>
            @endforeach

    </div>
</section>
@endsection
