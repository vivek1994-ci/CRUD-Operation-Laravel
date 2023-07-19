<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">CRUD OPERATIONS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Products</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@if($message = Session::get('success'))
<div class="alert alert-info alert-block">
  <strong>{{$message}}</strong>
</div>
@endif
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-sm-8">
          <div class="card mt-3 p-3">
            <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <h3 class="text-primary">Product Edit #{{$product->name}}</h3>
              <div class="form-group mt-4">
              <lable for="name" class="fw-bolder">Name*</lable>
              <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}"/>
              @if($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
              </div>
              <div class="form-group mt-4">
              <lable for="discription" class="fw-bolder">Description*</lable>
              <textarea name="description" class="form-control" rows="4" value="{{old('description', $product->description)}}"></textarea>
              @if($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
              </div>
              
              <div class="form-group mt-4">
              <lable for="image" class="fw-bolder">Image</lable>
              <input type="file" name="image" class="form-control"/>
              @if($errors->has('image'))
              <span class="text-danger">{{ $errors->first('image') }}</span>
              @endif
              </div>
              <button type="submit" class="btn btn-success mt-4">Submit</button> 
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>