@extends('layouts.app')

@section('title', 'Blog Edit')

@section('content')
{{-- Conteudo --}}

<div class="main-content">
    <div class="container">
        <h3>Blog Edit</h3>
        <div class="card-forms">
            <div class="card">
                <div class="card-body">
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
                    <form action="{{ route('blog.update', $blog->id) }}" method="post" id="loginForm">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label"><i class="bi bi-body-text"></i>Title</label>
                            <input type="text" name="name" id="title" placeholder="Title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ $blog->name }}">
                            <div class="invalid-feedback">
                                Please provide a title.
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="comments" name="post" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px">{{ $blog->post }}</textarea>
                                <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Comments</label>
                                <div class="invalid-feedback">
                                    Please provide a Comments.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection
