@extends('layouts.site')

@section('title', 'Page')

@section('content')
{{-- Conteudo --}}

  <div class="container col-sm-5" style="margin-top: 100px">
      <h1>{{ $blog->name }}</h1>
      <p class="card-text">Create: {{ $blog->created_at }}</p>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/css/img3.png" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
      <hr>
      <p class="card-text">Pots: {{ $blog->post }}</p>              
  </div>
  <br>
  
  <div class="container col-sm-5">
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="/css/youtube.png" class="d-block w-100" alt="...">
    </button>

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            
          <div class="modal-body">
              <iframe width="1200" height="650" src="https://www.youtube.com/embed/Ui-Sv95hWfY?si=mIsKN2LLSiGFnJt1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
    </div>
  </div>
  <br>
  

  <br><br><br><br>

@endsection