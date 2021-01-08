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

</style>
<section class="title">
    <div class="container-fluid border-bottom py-5">
        <div class="text-center mt-5">
            <img class="h-100px img-fluid" src="{{asset('logo.jpg')}}" alt="">
            <div class="mt-5">
                <p>Klinik Skin Care : <br>
                    Jl. Siliwangi RT 005/RW 007 Jekulo, Kudus, Jawa Tengah , Indonesia. 59382
                    <br> Telp : 02914246290</p>
            </div>
            <div class="container">
                <a target="_blank"
                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Mendaftar Reseller, Bagaimana Caranya?"
                    class="btn btn-light txt-ijo w-100">
                    JOIN RESELLER
                </a>
                <button class="mt-3 add-button btn btn-light txt-ijo w-100">INSTALL APLIKASI</button>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid border-bottom py-5">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div>
                            <a class="image-link" href="Asset/KATALOG 20 HAL IN COVER FIX PDF_page-0002.jpg">
                                <img src="Asset/KATALOG 20 HAL IN COVER FIX PDF_page-0002.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row mt-2" data-aos="fade-down" data-aos-duration="1500">
                        <div class="col-sm-12 col-md-6 border pt-4">
                            <h3>WHITENING DAY CREAM</h3>
                            <h4>With Vitamin B3, Aloe Vera and UVA UVB Protector</h4>
                            <p class="text-justify">Merawat kecantikan dan kecerahan kulit dengan kandungan yang
                                menutrisi dan
                                melindungi dari pengaruh buuk sinar matahari secara optimal.</p>
                            <div class="pb-4">
                                <p><i>Netto 12,5g</i> | <i>IDR. 55.000</i></p>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk WHITENING DAY CREAM,apakah masih ada ?"
                                    class="btn btn-light">BELI PRODUK</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 border pt-4">
                            <h3>WHITENING NIGHT CREAM</h3>
                            <h4>With Vitamin B3, Alfa Arbutin, Retinol, Aloe Vera and Vitamin E</h4>
                            <p class="text-justify">Mencerahkan warna kulit secara optimal saat Anda istirahat dimalam
                                hari
                                dengan kandungan yang sinergi untuk menghambat proses pembentukan melanin, menyamarkan
                                tanda
                                penuaan, mengencangkan dan menutrisi.</p>
                            <div class="pb-4">
                                <p><i>Netto 12,5g</i> | <i>IDR. 60.000</i></p>
                                <a target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+6285772631690&text=Saya Ingin Membeli Produk WHITENING NIGHT CREAM,apakah masih ada ?"
                                    class="btn btn-light">BELI PRODUK</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

@endsection
