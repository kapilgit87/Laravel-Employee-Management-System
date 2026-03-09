@include('navbar')

<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .table img{
            width:50px;
            height:50px;
            border-radius:50%;
            object-fit:cover;
        }

        .card{
            border-radius:12px;
        }

        .table-hover tbody tr:hover{
            background:#eef2ff;
        }
    </style>
</head>

<body>

<div class="container mt-5">

<div class="card shadow-lg">

<div class="card-header bg-dark text-white d-flex justify-content-between">
<h4>Employee List</h4>

<a href="add_employe" class="btn btn-success btn-sm">
Add Employee
</a>
</div>

<div class="card-body">

<table class="table table-hover table-bordered text-center align-middle">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Profile</th>
<th>Name</th>
<th>Age</th>
<th>Salary</th>
<th>City</th>
<th>Action</th>
</tr>
</thead>

<tbody>

@foreach($employes as $emp)

<tr>
<td>{{$emp->id}}</td>

<td>
<img src="{{asset('employe/'.$emp->profile)}}">
</td>

<td>{{$emp->name}}</td>
<td>{{$emp->age}}</td>
<td>₹ {{$emp->salary}}</td>
<td>{{$emp->city}}</td>

<td>
<a href="{{url('show'.$emp->id)}}" class="btn btn-primary btn-sm">Edit</a>
<a href="{{url('delete'.$emp->id)}}" class="btn btn-danger btn-sm">Delete</a>
</td>

</tr>

@endforeach

</tbody>

</table>

</div>
</div>

</div>

</body>
</html>