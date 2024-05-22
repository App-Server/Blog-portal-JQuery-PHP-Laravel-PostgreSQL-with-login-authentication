@extends('layouts.site')

@section('title', 'Home')

@section('content')
{{-- Conteudo --}}

  <div class="container" style="margin-top: 100px">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/css/banner-blog.png" class="d-block w-100" alt="..." style="border-radius: 20px;">
        </div>
      </div>
    </div>
    <br><br><br>
    @foreach ($websiteblog as $blog)
    <div class="container">
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/css/img3.png" class="img-fluid rounded-start" alt="..." >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Title: {{ $blog->name }}</h5>
                <p class="card-text">Create: {{ $blog->created_at }}</p>
                <p class="card-text">Update: {{ $blog->updated_at }}</p>
                <a href="{{ route('details', ['id' => $blog->id]) }}" class="btn btn-outline-primary">Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  <div class="container">
    <div class="py-4">
        {{ $websiteblog->links() }}
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br>


    
</body>
</html>

@endsection