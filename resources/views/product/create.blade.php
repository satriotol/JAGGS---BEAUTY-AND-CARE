@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        @isset($product)
        Update Produk
        @endisset
        @empty($product)
        Buat Produk
        @endempty
    </div>
    <div class="card-body">
        <form
            action="@isset($product){{route('product.update',$product->id)}}@endisset @empty($product){{route('product.store')}}@endempty"
            method="POST">
            @csrf
            @if (isset($product))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="name"
                    value="{{isset($product)? $product->name:''}}">
            </div>
            <div class="form-group">
                <label for="bahan">Bahan</label>
                <input type="text" id="ingredient" class="form-control" name="ingredient" placeholder="ingredient"
                    value="{{isset($product)? $product->ingredient:''}}">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi</label>
                <textarea class="form-control" name="desc" id="desc"
                    rows="3">{{isset($product)? $product->desc:''}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" id="price" class="form-control" name="price" placeholder="price"
                    value="{{isset($product)? $product->price:''}}">
            </div>
            <div class="form-group">
                <label for="">Berat</label>
                <input type="text" id="weight" class="form-control" name="weight" placeholder="weight"
                    value="{{isset($product)? $product->weight:''}}">
            </div>
            <div class="form-group">
                <label for="">Satuan Berat</label>
                @isset($product)
                <select name="unit" id="unit" class="form-control">
                    @if ($product->unit == 'ml')
                    <option selected value="{{isset($product)? $product->unit:''}}">
                        {{isset($product)? $product->unit:''}}
                    </option>
                    <option value="gr">gr</option>
                    @else
                    <option selected value="{{isset($product)? $product->unit:''}}">
                        {{isset($product)? $product->unit:''}}
                    </option>
                    <option value="ml">ml</option>
                    @endif
                </select>
                @endisset
                @empty($product)
                <select name="unit" id="unit" class="form-control">
                    <option value="ml">ml</option>
                    <option value="gr">gr</option>
                </select>
                @endempty
            </div>
            <div class="form-group">
                <label for="category">Gambar</label>
                @isset($product)
                <select name="image_id" id="image_id" class="form-control">
                    <option selected value="{{$product->image_id}}">{{$product->image->name}}</option>
                    @foreach ($images as $image)
                    <option value="{{$image->id}}">{{$image->name}}</option>
                    @endforeach
                </select>
                @endisset
                @empty($product)
                <select name="image_id" id="image_id" class="form-control">
                    @foreach ($images as $image)
                    <option value="{{$image->id}}">
                        {{$image->name}}
                    </option>
                    @endforeach
                </select>
                @endempty
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
