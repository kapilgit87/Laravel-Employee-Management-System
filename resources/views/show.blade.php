@include('navbar');
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Edit Employee</h4>
        </div>

        <div class="card-body">
            <form action="edit" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="hidden" name="id" value="<?php echo $employe['id'] ?>">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $employe['name'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter age" value="<?php echo $employe['age'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Salary</label>
                        <input type="text" name="salary" class="form-control" placeholder="Enter salary" value="<?php echo $employe['salary'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter city" value="<?php echo $employe['city'] ?>">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Profile Image</label>
                       <img src="{{ asset('employe/'.$employe->profile) }}" alt="Profile" class="rounded-circle" width="80" height="80">
                        <input type="file" name="profile" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Employee</button>
                <a href="view" class="btn btn-secondary">Back</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>