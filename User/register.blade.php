<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <h1 class="text-center card-header" style="background-color:red; color:white">User Manages</h1>

    <h1 class="card-header">User Registeration Form</h1>
<div class="container card-body">

   @if(session('success'))
   {{session('success')}}

   @endif
<form action="{{url('user/login')}}" method="POST" class="form-control" enctype="multipart/form-data">
        @csrf
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Enter Your Name" required> <br><br>

@error('name')
{{$message}}
@enderror

<label for="gender">Gender:</label>
<input type="text" name="gender" placeholder="Enter your Gender" required><br><br>
@error('name')
{{$message}}
@enderror

<label for="email">Email:</label>
<input type="email" name="email" placeholder="Enter your Email" required><br><br>

@error('name')
{{$message}}
@enderror

{{-- <label for="email">Verify Email:</label>
<input type="email" name="email" placeholder="Enter your Email" required><br><br> --}}

<label for="designation">Designation:</label>
<input type="text" name="designation" placeholder="Enter your Designation" required><br><br>
@error('name')
{{$message}}
@enderror

<label for="password">Password:</label>
<input type="password" name="password" placeholder="Enter your password" required> <br><br>
@error('name')
{{$message}}
@enderror

<label for="address">Address:</label>
<input type="text" name="address" placeholder="Enter your address" required><br><br>
@error('name')
{{$message}}
@enderror

<label for="image">Profile Photo</label>
<input type="file" name="image" ><br><br>
@error('name')
{{$message}}
@enderror

<button class=" btn btn-danger">Submit</button>
</form>
</div>



{{-- script --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
