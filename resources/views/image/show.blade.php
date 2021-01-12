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
            <h5>{{$product->name}}</h5>
            <p>With {{$product->ingredient}}</p>
            <p>{{$product->desc}}</p>
            <p><i>Netto</i> {{$product->weight}}{{$product->unit}} | IDR. {{$product->price}}</p>
            <div class="d-flex justify-content-end mb-2">
                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning mx-1">Edit</a>
                <button class="btn btn-danger mx-1" onclick="handleDelete({{$product->id}})">Hapus</button>
            </div>
            @endif
        </div>
        @endforeach
        @if ($count == $image->template)
        full
        @endif
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST" id="deleteProductForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-bold">Are you sure want to delete this product?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </form>
        </div>
</section>
@endsection
@section('script')
<script>
    function handleDelete(id) {
        var form = document.getElementById('deleteProductForm');
        form.action = '/product/' + id;
        $('#deleteModal').modal('show');
    }

</script>
@endsection
