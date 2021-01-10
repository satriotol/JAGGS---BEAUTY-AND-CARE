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
                <input type="text" id="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <input type="file" id="file" class="form-control" name="file">
            </div>
            <div class="form-group">
                <label for="category">Template</label>
                <select name="template" id="template" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="100">full</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
