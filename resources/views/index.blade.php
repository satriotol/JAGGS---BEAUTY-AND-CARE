@extends('layouts.main')
@section('content')
<style>
    body {
        background-color: #2AB45E;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .h-100px {
        height: 500px;
        width: auto;
    }

    .txt-ijo {
        color: #2AB45E;
    }

    .border-top {
        border-bottom: 10px solid white !important;
    }

    .border-bottom {
        border-bottom: 5px solid white !important;
    }

    img {
        position: relative;
        z-index: 1;
        height: 100%;
        max-height: 500px;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .btn {
        font-weight: bold;
        font-size: 20px;
        border-radius: 50px;
    }

    h3 {
        font-size: 25px;
    }

    h4 {
        font-size: 18px;
    }

    p {
        font-size: 15px;

    }

    @media (max-width: 767.98px) {
        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 16px;
        }

        .btn,
        p {
            font-size: 15px;
        }

        .h-100px {
            height: 200px;
            width: auto;
        }
    }

    .txt-kuning {
        color: #D9C145;
    }

</style>
<section class="title">
    <div class="container-fluid border-bottom py-5" style="background-color:#D9C145">
        <div class="text-center mt-5">
            <img class="h-100px img-fluid" src="{{asset('logo.png')}}" alt="">
            <div class="mt-5">

                <p>PT. Muntira Kosmeditama <br>
                    Clinic Skin Care : Jl. Sunan Kudus No. 223, Kudus, Jawa Tengah, 59316 Indoneia
                    <br> Telp : 0291439010</p>

                <p>Manufacture : Jl. Kudus - Jepara No 5050 Garung Lor, Kaliwungu. Kudus
                    <br> Telp : 0291444443
                </p>
            </div>
            <div class="container">
                <a target="_blank"
                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Mendaftar Reseller, Bagaimana Caranya?"
                    class="btn btn-light txt-kuning w-100">
                    JOIN RESELLER
                </a>
                <button class="mt-3 add-button btn btn-light txt-kuning w-100">INSTALL APLIKASI</button>
            </div>
        </div>
    </div>
</section>
@foreach ($images as $image)
@if ($image->template == '2')
<section class="content">
    <div class="container-fluid border-bottom py-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div>
                            <a class="image-link" href="{{asset('storage/'.$image->file)}}">
                                @foreach ($products as $product)
                                @if ($loop->first)
                                <img src="{{asset('storage/'.$image->file)}}" alt="">
                                @endif
                                @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="row mt-2" data-aos="fade-down" data-aos-duration="1500">
                        @foreach ($products as $product)
                        @if ($product->image_id === $image->id)
                        <div class="col-sm-12 col-md-6 border pt-4">
                            <h3>{{$product->name}}</h3>
                            <h4>With {{$product->ingredient}}</h4>
                            <p class="text-justify">{{$product->desc}}</p>
                            <div class="pb-4">
                                <p><i>Netto {{$product->weight}} {{$product->unit}}</i> | <i>IDR. {{$product->price}}</i></p>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk {{$product->name}},apakah masih ada ?"
                                    class="btn btn-light">BELI PRODUK</a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>
@elseif($image->template == '1')
<section class="content">
    <div class="container-fluid border-bottom py-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a class="image-link" href="{{asset('storage/'.$image->file)}}">
                                @foreach ($products as $product)
                                @if ($loop->first)
                                <img src="{{asset('storage/'.$image->file)}}" alt="">
                                @endif
                                @endforeach
                            </a>
                        </div>
                        @foreach ($products as $product)
                        @if ($product->image_id === $image->id)
                        <div class="col-sm-12 col-md-6 border pt-4 mt-2" data-aos="fade-right" data-aos-duration="1500">
                            <h3>{{$product->name}}</h3>
                            <h4>With {{$product->ingredient}}</h4>
                            <p class="text-justify">{{$product->desc}}</p>
                            <div class="pb-4">
                                <p><i>Netto {{$product->weight}} {{$product->unit}}</i> | <i>IDR. {{$product->price}}</i></p>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk {{$product->name}},apakah masih ada ?"
                                    class="btn btn-light">BELI PRODUK</a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@elseif($image->template == '3')
<section class="content">
    <div class="container-fluid border-bottom py-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="container">
                    <div class="row text-center">
                        <div>
                            <a class="image-link" href="{{asset('storage/'.$image->file)}}">
                                @foreach ($products as $product)
                                @if ($loop->first)
                                <img src="{{asset('storage/'.$image->file)}}" alt="">
                                @endif
                                @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="mt-2">
                        @foreach ($products as $product)
                        @if ($product->image_id === $image->id)
                        <div class="row" data-aos="fade-down" data-aos-duration="1500">
                            <div class="col-md-12 border pt-4">
                                <h3>{{$product->name}}</h3>
                                <h4>With {{$product->ingredient}}</h4>
                                <p class="text-justify">{{$product->desc}}</p>
                                <div class="pb-4">
                                    <p><i>Netto {{$product->weight}} {{$product->unit}}</i> | <i>IDR. {{$product->price}}</i></p>
                                    <a target="_blank"
                                        href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk {{$product->name}},apakah masih ada ?"
                                        class="btn btn-light">BELI PRODUK</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@elseif($image->template =='100')
<section class="content">
    <div class="container-fluid border-bottom py-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="container">
                    <div class="row text-center">
                        <div>
                            <a class="image-link" href="{{asset('storage/'.$image->file)}}">
                                @foreach ($products as $product)
                                @if ($loop->first)
                                <img src="{{asset('storage/'.$image->file)}}" alt="">
                                @endif
                                @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="row mt-2" data-aos="fade-down" data-aos-duration="1500">
                        <div class="col-md-12 border pt-4">
                            @foreach ($products as $product)
                            @if ($product->image_id === $image->id)
                            <h3>{{$product->name}}</h3>
                            <h4>with {{$product->ingredient}}</h4>
                            <p class="text-justify">{{$product->desc}}</p>
                            <p><i>Netto {{$product->weight}} {{$product->unit}}</i> | <i>IDR. {{$product->price}}</i></p>
                            <div class="pb-4 text-center">
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk {{$product->name}},,apakah masih ada ?,apakah masih ada ?"
                                    class="btn btn-light">BELI PRODUK</a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endforeach


@endsection
