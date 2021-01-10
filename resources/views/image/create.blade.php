@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        Buat Produk
    </div>
    <div class="card-body">
        <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="file" id="file" class="form-control" name="file">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
