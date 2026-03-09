<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Employee Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body{
            /* background: linear-gradient(135deg,#667eea,#764ba2); */
            background: url('{{ asset("2.webp") }}') no-repeat center center fixed;
    background-size: cover;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            font-family: Arial, sans-serif;
        }

        .dashboard{
            background:white;
            padding:40px;
            border-radius:15px;
            width:80%;
            max-width:900px;
            margin:50px auto;
        }

        .card{
            border:none;
            border-radius:12px;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        .icon{
            font-size:40px;
        }

        h1{
            font-weight:bold;
        }
    </style>
</head>
<body>

    <!-- Include Navbar -->
    @include('navbar')

    <!-- Dashboard Cards -->
    <div class="dashboard shadow-lg">

        <div class="text-center mb-5">
            <h1>Laravel Employee Management</h1>
            <p class="text-muted">Simple Application in Laravel 12</p>
        </div>

        <div class="row text-center">

            <!-- Add Employee -->
            <div class="col-md-6 mb-3">
                <div class="card p-4 shadow-sm">
                    <div class="icon text-success mb-3">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>

                    <h4>Add Employee</h4>
                    <p class="text-muted">Insert new employee details</p>

                    <a href="{{ url('add_employe') }}" class="btn btn-success">
                        Add Employee
                    </a>
                </div>
            </div>

            <!-- View Employees -->
            <div class="col-md-6 mb-3">
                <div class="card p-4 shadow-sm">
                    <div class="icon text-primary mb-3">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h4>View Employees</h4>
                    <p class="text-muted">Check all employee records</p>

                    <a href="{{ url('view') }}" class="btn btn-primary">
                        View Employees
                    </a>
                </div>
            </div>

        </div>

    </div>

</body>
</html>