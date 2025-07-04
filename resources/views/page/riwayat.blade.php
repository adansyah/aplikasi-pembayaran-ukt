@extends('components.app')
@section('content')
    <ul class="box-info">
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <p>Biaya UKT Mahasiswa</p>
                <h3 style="color: green">6.000.000</h3>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <p>Jenjang Kuliah</p>
                <h3 style="color: blue">S1 - Teknik Informatika</h3>
            </span>
        </li>
        <li>
            <i class='bx bxs-bank'></i>
            <span class="text">
                <p>Nomor Rekening</p>
                <h3>15612*****123</h3>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Payment History</h3>

            </div>
            <div class="mb-3 d-flex gap-4">
                <button class="btn btn-outline-dark">All</button>
                <button class="btn btn-outline-dark">Complete</button>
                <button class="btn btn-outline-dark">Pending</button>
                <button class="btn btn-outline-dark">Rejected</button>
                <a href="" class="btn btn-outline-success ms-auto">Unggah Bukti Pembayaran</a>
            </div>
            <table class="">
                <thead>
                    <tr>
                        <th>No Tagihan</th>
                        <th>Tahun Akademik</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>112310</td>
                        <td>2023/2024 Genap</td>
                        <td>14 Mei 2024</td>
                        <td>Rp. 6.000.000</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>
                            <a href="" class="btn btn-outline-primary"><i class="bx bx-search"></i> Lihat</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
@endsection
