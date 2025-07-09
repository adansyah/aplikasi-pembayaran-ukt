@extends('components.app')
@section('title', 'Riwayat Pembayaran')
@section('content')
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Payment History</h3>

            </div>
            <div class="mb-3 d-flex gap-2">
                <button class="btn btn-outline-dark">All</button>
                <button class="btn btn-outline-success">Complete</button>
                <button class="btn btn-outline-warning">Pending</button>
                <button class="btn btn-outline-danger">Rejected</button>
                <a href="bukti" class="btn btn-outline-success ms-auto">Unggah Bukti Pembayaran</a>
            </div>
            <table class="text-center">
                <thead>
                    <tr>
                        <th style="margin-left: 10px">No Tagihan</th>
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
                    <tr>
                        <td>112310</td>
                        <td>2023/2024 Genap</td>
                        <td>14 Mei 2024</td>
                        <td>Rp. 6.000.000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <a href="" class="btn btn-outline-primary"><i class="bx bx-search"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr>
                        <td>112310</td>
                        <td>2023/2024 Genap</td>
                        <td>14 Mei 2024</td>
                        <td>Rp. 6.000.000</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                        <td>
                            <a href="" class="btn btn-outline-primary"><i class="bx bx-search"></i> Lihat</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
