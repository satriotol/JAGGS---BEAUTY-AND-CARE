@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('image.create')}}" class="btn btn-primary">Tambah Produk</a>
</div>
<div class="card card-default">
    <div class="card-header">
        Image
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($images as $image)
                <tr>
                    <td><img src="{{asset('storage/'.$image->file)}}" width="auto" height="60px" alt=""></td>
                    <td>
                        @foreach ($products as $product)
                        @if ($product->image_id === $image->id)
                        {{$product->name}} <br>
                        @endif
                        @endforeach
                    </td>
                    <td><a href="{{route('product.create',$image->id)}}" class="btn btn-success">Tambah</a>
                        <a href="{{route('image.show',$image->id)}}" class="btn btn-primary">Detail</a>
                        <form action="{{route('image.destroy',$image->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
