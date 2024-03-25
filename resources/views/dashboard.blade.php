@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Voltage & Ampere Graph
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                              <div class="chart tab-pane active" id="voltage-chart" style="position: relative;">
                                <canvas id="voltage" class="chart-canvas" style="width: 100%; height: 300px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                         
                             Monitoring Report Graph
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="monitoring-chart" style="position: relative;">
                                <canvas id="monitoring" class="chart-canvas" style="width: 100%; height: 300px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    // Function to generate random RGB color
    function getRandomColor() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        return 'rgba(' + r + ',' + g + ',' + b + ', 0.2)';
    }

    // Render Chart for monitoring
    var ctxMonitoring = document.getElementById('monitoring').getContext('2d');
    var monitoringChart = new Chart(ctxMonitoring, {
        type: 'bar',
        data: {
            labels: {!! json_encode($months) !!}.map(month => {
                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                return monthNames[month - 1];
            }),
            datasets: [{
                label: 'Monitoring Data',
                data: {!! json_encode($counts) !!},
                backgroundColor: Array.from({ length: {!! count($months) !!}}, () => getRandomColor()), // Generate random color for each data point
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    // Render Chart for voltage
    var ctxVoltage = document.getElementById('voltage').getContext('2d');
    var voltageChart = new Chart(ctxVoltage, {
        type: 'bar',
        data: {
            labels: {!! json_encode($months1) !!}.map(month => {
                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                return monthNames[month - 1];
            }),
            datasets: [{
                label: 'Voltage Data',
                data: {!! json_encode($counts1) !!},
                backgroundColor: Array.from({ length: {!! count($months1) !!}}, () => getRandomColor()), // Generate random color for each data point
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>






@endsection

@endsection
