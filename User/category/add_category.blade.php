<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <h1 class=" card-header text-center">Add Category</h1><br><br>

    <div class="container">
    <form class="row g-3 " action="{{url('store/category')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Category_id</label>
          <input type="text" class="form-control" name="category_id"  required>

        </div>
        @error('category_id')

        {{$message}}
        @enderror

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">NP_Name</label>
            <input type="text" class="form-control" name="np_name"  required>

          </div>
          @error('category_id')

          {{$message}}
          @enderror

        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Slug</label>
          <input type="text" class="form-control" name="slug" required>

        </div>
        @error('category_id')

        {{$message}}
        @enderror

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Status</label>
            <input type="text" class="form-control" name="status" required>

          </div>
          @error('category_id')

          {{$message}}
          @enderror

          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Image</label>
            <input type="file" class="form-control"  name="image" required>

          </div>
          @error('category_id')

          {{$message}}
          @enderror

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
          @error('category_id')

          {{$message}}
          @enderror
      </form>
    </div>


     {{-- script --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
