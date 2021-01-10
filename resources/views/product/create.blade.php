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
                <label for="name">Nama Produk</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="bahan">Bahan</label>
                <input type="text" id="ingredient" class="form-control" name="ingredient" placeholder="ingredient">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control" name="desc" id="dec" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" id="price" class="form-control" name="price" placeholder="price">
            </div>
            <div class="form-group">
                <label for="">Berat</label>
                <input type="text" id="weight" class="form-control" name="weight" placeholder="weight">
            </div>
            <div class="form-group">
                <label for="">Satuan Berat</label>
                <select name="unit" id="unit" class="form-control">
                    <option value="ml">ml</option>
                    <option value="gr">gr</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Gambar</label>
                <select name="image_id" id="image_id" class="form-control">
                    @foreach ($images as $image)
                    <option value="{{$image->id}}">
                        {{$image->name}}
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
