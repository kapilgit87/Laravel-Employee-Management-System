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
            <h4 class="mb-0">Add Employee</h4>
        </div>

        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" placeholder="Enter age">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Salary</label>
                        <input type="text" name="salary" class="form-control" placeholder="Enter salary">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter city">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Profile Image</label>
                        <input type="file" name="profile" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save Employee</button>
                <a href="" class="btn btn-secondary">Back</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>