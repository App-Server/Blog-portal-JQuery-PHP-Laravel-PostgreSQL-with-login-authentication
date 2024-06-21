<x-layout title="Dashboard">
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
                    <br>
                    <h4>Usuários por Dia</h4>
                    <div class="card">
                        <div class="card-body">
                            <div id="usersChartContainer" style="height: 400px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
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
    </div>
</x-layout>