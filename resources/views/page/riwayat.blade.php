@extends('components.app')
@section('title', 'Riwayat Pembayaran')
@section('content')
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Payment History</h3>

            </div>
            <div class="mb-3 d-flex gap-2">
                <button class="btn btn-outline-dark filter-btn" data-status="all" data-style="dark">All</button>
                <button class="btn btn-outline-success filter-btn" data-status="Complete"
                    data-style="success">Complete</button>
                <button class="btn btn-outline-warning filter-btn" data-status="Pending"
                    data-style="warning">Pending</button>
                <button class="btn btn-outline-danger filter-btn" data-status="Rejected"
                    data-style="danger">Rejected</button>

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
                    <tr data-status="Complete">
                        <td>112310</td>
                        <td>2023/2024 Genap</td>
                        <td>14 Mei 2024</td>
                        <td>Rp. 6.000.000</td>
                        <td><span class="badge bg-success">Complete</span></td>
                        <td>
                            <a href="" class="btn btn-outline-primary"><i class="bx bx-search"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr data-status="Pending">
                        <td>112310</td>
                        <td>2023/2024 Genap</td>
                        <td>14 Mei 2024</td>
                        <td>Rp. 6.000.000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <a href="" class="btn btn-outline-primary"><i class="bx bx-search"></i> Lihat</a>
                        </td>
                    </tr>
                    <tr data-status="Rejected">
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
    <script>
        const buttons = document.querySelectorAll('.filter-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const activeStatus = this.getAttribute('data-status');

                // Reset semua tombol: ubah ke btn-outline-*
                buttons.forEach(b => {
                    const style = b.getAttribute('data-style');
                    b.classList.remove(`btn-${style}`);
                    b.classList.add(`btn-outline-${style}`);
                });

                // Aktifkan tombol yang diklik: ubah ke btn-*
                const style = this.getAttribute('data-style');
                this.classList.remove(`btn-outline-${style}`);
                this.classList.add(`btn-${style}`);

                // Filter baris tabel berdasarkan status
                const rows = document.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    const rowStatus = row.getAttribute('data-status');
                    row.style.display = (activeStatus === 'all' || rowStatus === activeStatus) ?
                        '' : 'none';
                });
            });
        });
    </script>




@endsection
