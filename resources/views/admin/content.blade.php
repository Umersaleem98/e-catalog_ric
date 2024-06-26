<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Male Students</h5>
                                    <p class="card-text">Total: {{ $maleStudents->count() }}</p>
                                    <!-- You can add more details or statistics here -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Female Students</h5>
                                    <p class="card-text">Total: {{ $femaleStudents->count() }}</p>
                                    <!-- You can add more details or statistics here -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Student Gender Distribution (Pie Chart)</h5>
                                    <canvas id="genderPieChart"></canvas>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row mb-3">
                    <div class="col-md-8">
                        <!-- Bar Chart Section -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Students by Discipline (Bar Chart)</h5>
                                <canvas id="disciplineBarChart"></canvas>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('genderPieChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: 'Number of Students',
                    data: [{{ $maleStudents->count() }}, {{ $femaleStudents->count() }}],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(0);
                            }
                        }
                    }
                }
            }
        });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('disciplineBarChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($disciplines) !!},
                datasets: [{
                    label: 'Number of Students',
                    data: {!! json_encode($studentCounts) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Students'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Discipline'
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(0);
                            }
                        }
                    }
                }
            }
        });
    });
</script>
