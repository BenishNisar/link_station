@extends("Layout.layouttwo")
@section("AdminContent")

<div class="container mt-4">
    <!-- Top Row: Welcome + Quick Actions -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>👋 Welcome, Admin</h3>
        <button id="theme-toggle" class="btn btn-dark"><i class="fas fa-moon"></i> Dark Mode</button>
    </div>

    <!-- Row for KPI Cards -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text"><i class="fas fa-users"></i> 5,320</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Orders Today</h5>
                    <p class="card-text"><i class="fas fa-shopping-cart"></i> 150</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text"><i class="fas fa-dollar-sign"></i> $12,500</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Pending Orders</h5>
                    <p class="card-text"><i class="fas fa-exclamation-circle"></i> 23</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row mt-4">
        <div class="col-md-6">
            <canvas id="salesChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="userGrowthChart"></canvas>
        </div>
    </div>

    <!-- Recent Activities & To-Do List -->
    <div class="row mt-4">
        <div class="col-md-6">
            <h5>Recent Activities</h5>
            <ul class="list-group">
                <li class="list-group-item"><i class="fas fa-check-circle text-success"></i> Order #1234 shipped</li>
                <li class="list-group-item"><i class="fas fa-user-plus text-info"></i> New user registered</li>
                <li class="list-group-item"><i class="fas fa-exclamation-triangle text-danger"></i> Server issue reported</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>To-Do List</h5>
            <ul class="list-group">
                <li class="list-group-item"><i class="fas fa-tasks"></i> Complete sales report</li>
                <li class="list-group-item"><i class="fas fa-edit"></i> Update user permissions</li>
                <li class="list-group-item"><i class="fas fa-bell"></i> Check latest notifications</li>
            </ul>
        </div>
    </div>
</div>

<!-- Charts Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Sales',
                data: [1200, 1900, 3000, 5000, 7000],
                backgroundColor: ['blue', 'green', 'red', 'purple', 'orange']
            }]
        }
    });

    var ctx2 = document.getElementById('userGrowthChart').getContext('2d');
    var userGrowthChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'User Growth',
                data: [500, 800, 1200, 1800, 2600],
                borderColor: 'blue',
                fill: false
            }]
        }
    });
</script>

<!-- Dark Mode Toggle Script -->
<script>
    document.getElementById("theme-toggle").addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");
    });
</script>
<style>
    .dark-mode {
        background-color: #222;
        color: white;
    }
    .card {
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        border-radius: 10px;
    }
</style>

@endsection
