@extends("Layout.layouttwo")


@section("AdminContent")

<div class="container mt-4">
    <!-- Top Row: Welcome + Quick Actions -->
    <div class="d-flex justify-content-between align-items-center">
        <h3>👋 Welcome, Admin</h3>
        <button id="theme-toggle" class="btn btn-dark"><i class="fas fa-moon"></i> Dark Mode</button>
    </div>

    <!-- Row for KPI Cards -->
    <div class="row mt-4 g-3">
        <div class="col-md-3 col-6">
            <div class="card text-white bg-primary shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text"><i class="fas fa-users"></i> {{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card text-white bg-success shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Roles</h5>
                    <p class="card-text"><i class="fas fa-user-tag"></i> {{ $totalRoles }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card text-white bg-warning shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Web</h5>
                    <p class="card-text"><i class="fas fa-code"></i> {{ $webprojects }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="card text-white bg-danger shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Travel</h5>
                    <p class="card-text"><i class="fas fa-plane"></i> {{ $travel }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row mt-4 g-3">
        <div class="col-md-6">
            <canvas id="salesChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="userGrowthChart"></canvas>
        </div>
    </div>

    <!-- Recent Activities & To-Do List -->
    <div class="row mt-4 g-3">
        <div class="col-md-12">
            <h3>Office Details</h3>
            <ul style="list-style: none; padding-left: 0;">
                <li><strong>Location:</strong> <?php echo $officeDetails->location; ?></li>
                <li><strong>Email:</strong> <a href="mailto:<?php echo $officeDetails->email; ?>"><?php echo $officeDetails->email; ?></a></li>
                <li><strong>Contact:</strong> <a href="tel:<?php echo $officeDetails->contact; ?>"><?php echo $officeDetails->contact; ?></a></li>
            </ul>
        </div>


    </div>
</div>

<!-- Charts Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Total users count se max range determine karna
    var totalUsers = {{ $totalUsers }}; // Backend se users count fetch ho raha

    // Max range ko set karna based on users count (for better visibility)
    var maxSalesValue = totalUsers + (totalUsers * 0.2); // 20% buffer
    var maxUserGrowth = totalUsers + (totalUsers * 0.3); // Growth ke liye 30% buffer

    // ✅ Sales Chart Fix
    var ctx1 = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Total Users',
                data: [
                    Math.round(totalUsers * 0.3),
                    Math.round(totalUsers * 0.4),
                    Math.round(totalUsers * 0.6),
                    Math.round(totalUsers * 0.8),
                    totalUsers
                ],
                backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6f42c1']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // ✅ Prevent Chart from Hiding
            scales: {
                y: {
                    beginAtZero: true,
                    max: maxSalesValue
                }
            }
        }
    });

    // ✅ User Growth Chart Fix
    var ctx2 = document.getElementById('userGrowthChart').getContext('2d');
    var userGrowthChart = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'User Growth',
                data: [
                    Math.round(totalUsers * 0.2),
                    Math.round(totalUsers * 0.35),
                    Math.round(totalUsers * 0.5),
                    Math.round(totalUsers * 0.7),
                    totalUsers
                ],
                borderColor: '#17a2b8',
                backgroundColor: 'rgba(23,162,184,0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // ✅ Fix Chart Disappearing Issue
            scales: {
                y: {
                    beginAtZero: true,
                    max: maxUserGrowth
                }
            }
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
        border-radius: 10px;
    }
    .shadow-lg {
        box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
    }
</style>

@endsection
