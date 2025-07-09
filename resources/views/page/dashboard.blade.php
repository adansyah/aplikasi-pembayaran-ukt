@extends('components.app')
@section('title', 'Halaman Utama')
@section('content')
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>

        </div>
        <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a>
    </div>

    <div class="welcome-box d-flex align-items-center justify-content-between p-4 mb-4 rounded-4">
        <div>
            <small class="text-white">7 juli, 2025</small>
            <h4 class="fw-bold text-white mt-2">Selamat Datang, Syahdan Mutahariq</h4>
            <p class="text-white-50 mb-0">Selalu perbarui pengetahuan dalam pembelajaran Anda!</p>
        </div>
        <div class="welcome-img">
            <img src="{{ asset('wisuda.png') }}" alt="Character" loading="lazy" />
        </div>
    </div>

    <ul class="box-info" style="margin-right: 30px">
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


    {{-- Buat disini --}}
    <div class="card rounded-4 shadow-sm p-4 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0 fw-bold">Statistic</h5>
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-sm btn-outline-secondary">&lt;</button>
                <span class="fw-semibold">Aug 2021</span>
                <button class="btn btn-sm btn-outline-secondary">&gt;</button>
            </div>
        </div>

        <div class="mb-3">
            <span class="text-muted">Progress score</span>
            <div class="float-end">
                <span class="d-inline-block rounded-circle bg-primary" style="width:10px; height:10px;"></span> Average
                grade
                <span class="ms-3 d-inline-block rounded-circle bg-success" style="width:10px; height:10px;"></span> Exams
            </div>
        </div>

        <div>
            <canvas id="statChart" height="100"></canvas>
        </div>
    </div>
    @push('scripts')
        <script>
            const ctx = document.getElementById('statChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                            label: 'Average grade',
                            data: [2, 2.5, 3.5, 3, 2, 2.8, 3, 2.7, 2.9, 3.1, 3.2, 3.4],
                            borderColor: '#3b82f6',
                            backgroundColor: '#3b82f6',
                            tension: 0.4,
                            pointRadius: 0
                        },
                        {
                            label: 'Exams',
                            data: [2.5, 3, 2.8, 2.5, 3.2, 3, 2.5, 3, 3.3, 3.4, 3.5, 3.7],
                            borderColor: '#10b981',
                            backgroundColor: '#10b981',
                            tension: 0.4,
                            pointRadius: 5,
                            pointBackgroundColor: '#10b981'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.raw + ' Point';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 0.5
                            }
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
