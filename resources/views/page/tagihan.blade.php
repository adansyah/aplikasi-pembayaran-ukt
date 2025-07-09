@extends('components.app')
@section('title', 'Informasi Tagihan')
@section('content')
    <style>
        .top-banner {
            background-color: #0042a4;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }

        .card-custom {
            border: none;
            border-radius: 8px;
            overflow: hidden;
        }

        .header-blue {
            background-color: #0d2d6c;
            color: white;
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text-section {
            padding: 20px;
        }

        .text-section table {
            width: 100%;
        }
    </style>
    <div class="content">

        <p class="mb-2 text-muted">Home &gt;&gt; Payment Info &gt;&gt; Payment History &gt;&gt; Bukti Pembayaran</p>

        <div class="card card-custom shadow-sm">
            <div class="header-blue">
                <div>
                    <h6 class="mb-0 fw-bold">INFORMASI TAGIHAN</h6>
                    <small>Berisi informasi lengkap mengenai tagihan</small>
                </div>

            </div>

            <div class="text-section position-relative">
                <div class="d-flex ">
                    <span>Rincian Informasi Tagihan UKT</span>
                    {{-- <img src="bri.png" width="150" alt="BRI"> --}}
                    <div class="ms-auto">
                        <a href="bukti" class="btn btn-danger">Bayar</a>
                        <a href="" class="btn btn-primary">Cetak</a>
                    </div>
                </div>

                <hr>

                <div class="">
                    <div class="d-flex justify-content-between ">
                        <div class="d-flex flex-column">
                            <Strong>Nomor Tagihan</Strong>
                            <small>#15378</small>
                        </div>
                        <div class="d-flex flex-column" style="margin-right: 25rem">
                            <Strong>Subtotal</Strong>
                            <small>Rp.6.000.000</small>
                        </div>
                    </div>
                    <div class="d-flex flex-column py-4">
                        <Strong>Peuntukan</Strong>
                        <small>Tahun Ajaran Genap 2023/2024</small>
                    </div>
                    <div class="d-flex flex-column">
                        <strong>Peruntukan</strong>
                        <small>Biaya UKT</small>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
