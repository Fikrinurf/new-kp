@extends('owner.layout.app')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush
@section('content')
    <h1 class="app-page-title">Dashboard</h1>
    <div class="row ">
        <div class="col-md-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title ">Jumlah User</h5>
                    <p class="card-text">{{ $userCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Booking</h5>
                    <p class="card-text">{{ $bookingCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-dark bg-white">
                <div class="card-body">
                    <h5 class="card-title ">Jumlah Admin</h5>
                    <p class="card-text">{{ $adminCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik booking dengan native date input -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Statistik Booking</h5>
                        <div class="d-flex gap-2 align-items-center">
                            <input type="date" id="startDate" class="form-control form-control-sm">
                            <span>s/d</span>
                            <input type="date" id="endDate" class="form-control form-control-sm">
                            <button id="filterBtn" class="btn btn-sm btn-primary">Tampilkan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="bookingChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let chartInstance = null;

        function createChart(data) {
            if (chartInstance) {
                chartInstance.destroy();
            }

            const ctx = document.getElementById('bookingChart').getContext('2d');
            chartInstance = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Jumlah Booking (Sudah Bayar)',
                        data: data.data,
                        borderColor: '#198754',
                        backgroundColor: 'rgba(25, 135, 84, 0.1)',
                        tension: 0.1,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Trend Booking Futsal',
                            font: {
                                size: 14
                            }
                        },
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Set default date values (last 30 days)
            const today = new Date();
            const thirtyDaysAgo = new Date(today);
            thirtyDaysAgo.setDate(today.getDate() - 30);

            document.getElementById('startDate').valueAsDate = thirtyDaysAgo;
            document.getElementById('endDate').valueAsDate = today;

            // Load initial data
            loadChartData();

            // Handle filter button click
            document.getElementById('filterBtn').addEventListener('click', loadChartData);
        });

        function loadChartData() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;

            fetch(`/booking-chart-data?start_date=${startDate}&end_date=${endDate}`)
                .then(response => response.json())
                .then(data => createChart(data));
        }
    </script>
@endpush
