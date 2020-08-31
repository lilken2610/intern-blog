<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Intern Rikai Technology Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="{{URL::to('public/client/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{URL::to('public/client/css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{URL::to('/')}}">Intern Rikai Technology Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{URL::to('/')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <img class="card-img-top" src="{{URL::to('public/uploads/internship.jpg')}}" alt="">
    </header>

    <!-- Page Features -->
    <div class="row text-center">

     @foreach ($get_all_blog as $key => $blog)
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="{{URL::to('public/uploads/'.$blog->blogs_image)}}" alt="">
          <div class="card-body">
            <h4 class="card-title">{{$blog->blogs_name}}</h4>
          <p class="card-text">{{ \Illuminate\Support\Str::limit($blog->blogs_title, 150, '...') }}</p>
          </div>
          <div class="card-footer">
          <a href="{{URL::to('/blogs/'.$blog->blogs_id)}}" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>    
      @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::to('public/client/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('public/clientvendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
