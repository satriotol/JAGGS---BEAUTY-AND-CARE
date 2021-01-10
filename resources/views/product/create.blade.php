@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        Buat Produk
    </div>
    <div class="card-body">
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" id="name" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" id="ingredient" class="form-control" name="ingredient" placeholder="ingredient">
            </div>
            <div class="form-group">
                <input type="text" id="desc" class="form-control" name="desc" placeholder="desc">
            </div>
            <div class="form-group">
                <input type="text" id="price" class="form-control" name="price" placeholder="price">
            </div>
            <div class="form-group">
                <input type="text" id="weight" class="form-control" name="weight" placeholder="weight">
            </div>
            <div class="form-group">
                <label for="category">Image</label>
                <select name="image_id" id="image_id" class="form-control">
                    @foreach ($images as $image)
                    <option value="{{$image->id}}">
                        {{$image->id}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
