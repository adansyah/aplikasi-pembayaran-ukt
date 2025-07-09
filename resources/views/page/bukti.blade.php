@extends('components.app')
@section('title', 'Bukti Pembayaran')
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
        <div class="top-banner">PEMBAYARAN BERHASIL !</div>

        <p class="mb-2 text-muted">Home &gt;&gt; Payment Info &gt;&gt; Payment History &gt;&gt; Bukti Pembayaran</p>

        <div class="card card-custom shadow-sm">
            <div class="header-blue">
                <div>
                    <h6 class="mb-0">BUKTI PEMBAYARAN UANG KULIAH TUNGGAL (UKT)</h6>
                    <small>Berisi informasi mengenai laporan bukti pembayaran mahasiswa yang sah</small>
                </div>
                <div>
                    <button class="btn btn-none btn-sm text-white"><i class="bx bxs-download me-2 "></i>Unggah Bukti
                        Pembayaran</button>
                </div>
            </div>

            <div class="text-section position-relative">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Transaksi ke : 098-755-081-900 a/n Universitas Negeri Satu</span>
                    <img src="bri.png" width="150" alt="BRI">
                </div>
                <p>Tanggal : 14 Juni 2024, 10 : 30 WIB</p>
                <p>Penerima Teraf Status : <strong class="text-success">BERHASIL</strong></p>
                <hr>

                <table class="table table-borderless mt-3">
                    <tr>
                        <td style="width: 180px">Nama</td>
                        <td>: PAHLIPAI</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: 00456</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>Virtual Account</td>
                        <td>: 1502********4832</td>
                    </tr>
                </table>

                <hr>

                <div class="d-flex justify-content-between ">
                    <div>
                        <p>JUMLAH PEMBAYARAN :</p>
                        <p>Terbilang : (Enam Juta Rupiah)</p>
                    </div>
                    <div class="ms-auto">
                        <h5 class="fw-bold">Rp 6.000.000</h5>
                        <p class="mb-0 text-center">Tertanda</p>
                        <img src="{{ asset('lunas.png') }}" alt="LUNAS" width="100" class="">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
