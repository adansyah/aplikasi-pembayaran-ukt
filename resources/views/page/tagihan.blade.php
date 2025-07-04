@extends('components.app')
@section('content')
    <div class="card">
        <div class="container" style="background: rgb(3, 3, 121);height: 80px">
            <div class="card-header d-flex-column align-items-center  ">
                <h5 class="fw-bold text-white">INFORMASI TAGIHAN</h5>
                <p class="text-white fs-6">Berisi Informasi lengkap mengenai tagihan mahasiswa</p>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <h3>Rincian Informasi Tagihan UKT</h3>
                <div class="ms-auto">
                    <a href="" class="btn btn-outline-primary fw-bold text-blue-700">Lunas</a>
                    <a href="" class="btn btn-outline-primary fw-bold text-blue-700">Cetak</a>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="d-flex">
                    <div class="ml-auto">
                        <p class="fw-bold">Nomor Tagihan</p>
                        <p>#1533587</p>
                    </div>
                    <div class="m-auto">
                        <p class="fw-bold">Sub Total</p>
                        <p>Rp. 6.000.000</p>
                    </div>
                </div>
                <div>
                    <p class="fw-bold">Peruntukan</p>
                    <p>Genap 2023/2024</p>
                    <p class="fw-bold">Peruntukan</p>
                    <p>Biaya Uang Kuliah</p>
                </div>
            </div>
        </div>

    </div>
@endsection
