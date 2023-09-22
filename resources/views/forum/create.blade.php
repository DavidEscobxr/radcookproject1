@extends('layouts.app')

@section('template_title')
    {{ __('forum_index') }} posts
@endsection

@section('content')

{{-- <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.jpg" class="d-block w-30" class="my-30" alt="Imagen">
          </div>
          <div class="carousel-item">
            <img src="images/2.jpg" class="d-block w-30" class="my-30" alt="Imagen">
          </div>
          <div class="carousel-item">
            <img src="images/3.jpg" class="d-block w-30" class="my-30" alt="Imagen">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</div> --}}

<div class="container mt-5">
    <table><tr><td>
    <img src="images/user.png" width="100px" height="100px">
    </td><td align="right">
    <h2>Crear un nuevo Post en Foro</h2>
    </td></tr>
  </table>
    <form action="{{ route('Coment_forum.store')}}" method="POST">
        
        <div class="form-group">
            <label for="postContent">Contenido</label>
            <textarea class="form-control" id="postContent" name="description" rows="6" required></textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Publicar Post</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection()