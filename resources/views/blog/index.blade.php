@extends('layouts.app')

@section('title', 'Blog Create')

@section('content')
{{-- Conteudo --}}

<div class="main-content ">
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger col-sm-12 " role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong></strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="container">
        <h3>List Blog</h3>
    </div>       
    @foreach ($blogs as $blog)
    <div class="container">
        <div class="card mb-3">
            <h5 class="card-header"><i class="bi bi-list-ol"></i><strong>Id</strong> {{ $blog->id }}</h5>
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-body-text"></i><strong> Title: </strong> {{ $blog->name }}</h5>
                <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Create: </strong>{{ $blog->created_at }}</p>
                <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Update: </strong>{{ $blog->updated_at }}</p>
                <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Details</a>
                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-outline-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container">
        <div class="py-4">
            {{ $blogs->links() }}
        </div>
    </div>
</div>



@endsection

