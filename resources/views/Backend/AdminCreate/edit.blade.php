<!DOCTYPE html>
<html>
<head>
  <title>Admin Update</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Center the form vertically and horizontally */
    body, html {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .registration-form {
      max-width: 400px;
      padding: 20px;
      background-color: #f7f7f7;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="registration-form">
    <h2 class="text-center">Registration Form</h2>
    <form action="{{ url('admincreate/'.$admindetails->id) }}" method="post">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label >Name</label>
        <input type="text" class="form-control" name="name" value="{{ $admindetails->name }}" placeholder="">
      </div>
      <div class="form-group">
        <label >Email address</label>
        <input type="email" class="form-control" name="email" value="{{ $admindetails->email }}" placeholder="">
      </div>
      <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" name="password" id="password" value="{{ $admindetails->password }}" placeholder="">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
