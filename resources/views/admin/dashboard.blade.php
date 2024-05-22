@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
{{-- Conteúdo --}}

<div class="main-content ">
    <div class="container">
        <h3>Dashboard</h3>
        @if (Auth::check())
            <p>Hello 👋, {{ Auth::user()->name }}</p>
        @endif
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">            
                        <p class="card-text"><i class="bi bi-list-task"></i>Blog</p>
                        <p class="card-text">{{ $blogsCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i class="bi bi-person-check"></i>User</p>
                        <p class="card-text">{{ $usersCount }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i class="bi bi-ticket-detailed"></i>Ticket Open</p>
                        <p class="card-text">--</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i class="bi bi-ticket-detailed-fill"></i>Ticket Closed</p>
                        <p class="card-text">--</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <h4>Blogs por Mês</h4>
                <div class="card">
                    <div class="card-body">
                        <div id="blogsChartContainer" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h4>Usuários por Dia</h4>
                <div class="card">
                    <div class="card-body">
                        <div id="usersChartContainer" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
            </div>
          </div>
        <!-- Adicione isso no corpo da sua view (admin.dashboard) -->
        {{-- <div>
            <h3>Blogs por Mês</h3>
            <div class="card" >
                <div class="card-body" >
                    <canvas id="blogsChart" width="400" height="120"></canvas>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h3>Usuários por Dia</h3>
            <div class="card">
                <div class="card-body">
                    <canvas id="usersChart" width="400" height="120"></canvas>
                </div>
            </div>
        </div> --}}
        <br>
        <!-- Adicione isso no corpo da sua view (admin.dashboard) -->
        {{-- <div class="card">
            <div class="card-body">
                <canvas id="myChart" width="400" height="120"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
            </div>
        </div> --}}
        <br>
       
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Adicione isso na sua view (admin.dashboard) dentro da seção head ou antes de fechar o body -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        $(document).ready(function() {
            // Dados passados do controlador
            var blogData = {!! $blogDataJson !!};
            var userData = {!! $userDataJson !!};

            // Preparar os dados para o gráfico de blogs
            var blogDataPoints = Object.keys(blogData).map(function(key) {
                return { label: 'Mês ' + key, y: blogData[key] };
            });

            // Configurar e renderizar o gráfico de blogs
            var blogsChart = new CanvasJS.Chart("blogsChartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: ""
                },
                axisY: {
                    includeZero: true
                },
                data: [{
                    type: "column",
                    dataPoints: blogDataPoints
                }]
            });
            blogsChart.render();

            // Preparar os dados para o gráfico de usuários
            var userDataPoints = Object.keys(userData).map(function(key) {
                return { label: 'Dia ' + key, y: userData[key] };
            });

            // Configurar e renderizar o gráfico de usuários
            var usersChart = new CanvasJS.Chart("usersChartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: ""
                },
                axisY: {
                    includeZero: true
                },
                data: [{
                    type: "column",
                    dataPoints: userDataPoints
                }]
            });
            usersChart.render();
        });
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Dados passados do controlador
            var blogData = {!! $blogDataJson !!};
            var userData = {!! $userDataJson !!};

            // Preparar os dados para o gráfico de blogs
            var blogLabels = Object.keys(blogData).map(function(key) {
                return 'Mês ' + key;
            });
            var blogCounts = Object.values(blogData);

            // Configurar e renderizar o gráfico de blogs
            var ctxBlogs = document.getElementById('blogsChart').getContext('2d');
            new Chart(ctxBlogs, {
                type: 'bar',
                data: {
                    labels: blogLabels,
                    datasets: [{
                        label: 'Número de Blogs',
                        data: blogCounts,
                        backgroundColor: '#0058b1',
                        borderColor: '#0058b1',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Preparar os dados para o gráfico de usuários
            var userLabels = Object.keys(userData).map(function(key) {
                return 'Dia ' + key;
            });
            var userCounts = Object.values(userData);

            // Configurar e renderizar o gráfico de usuários
            var ctxUsers = document.getElementById('usersChart').getContext('2d');
            new Chart(ctxUsers, {
                type: 'bar',
                data: {
                    labels: userLabels,
                    datasets: [{
                        label: 'Número de Usuários',
                        data: userCounts,
                        backgroundColor: '#0058b1',
                        borderColor: '#0058b1',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script> --}}

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const blogData = @json($blogDataJson);

            // Organizar os dados para o gráfico
            const dataValues = labels.map((label, index) => {
                // index + 1 porque os meses no banco de dados são 1-12
                return blogData[index + 1] || 0;
            });

            console.log('Blog Data:', blogData); // Adicione este log para depuração
            console.log('Data Values:', dataValues); // Adicione este log para depuração

            const data1 = {
                labels: labels,
                datasets: [{
                    label: 'Blog Total 2024',
                    data: dataValues,
                    backgroundColor: '#0058b1',
                    borderColor: '#0058b1',
                    borderWidth: 1
                }]
            };

            const config1 = {
                type: 'bar',
                data: data1,
                options: {}
            };

            var myChart = new Chart(
                document.getElementById('myChart'),
                config1
            );
        });
    </script> --}}
</div>

@endsection
