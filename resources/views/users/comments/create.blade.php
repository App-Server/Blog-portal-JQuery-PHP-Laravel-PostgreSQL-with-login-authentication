@extends('layouts.app')

@section('title', 'Users New Comments')

@section('content')
{{-- Conteudo --}}

<div class="main-content ">
    <div class="container">
        <h3>New Comments</h3>
        <div class="card-forms ">
            <div class="card">
                <div class="card-body">
                    {{-- @include('includes.validation-form') --}}
                    @if ($errors->any())
                        <div class="alert alert-danger col-sm-12 " role="alert">
                            @foreach ($errors->all() as $error)
                            <li><i class="bi bi-exclamation-triangle"></i>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('comments.store', $user->id) }}" method="post">
                        @csrf                            
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" type="text" id="comments" name="body" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" value="{{ old('title') }}"></textarea>
                                <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Comments</label>
                                <div class="invalid-feedback">
                                    Please provide a Comments.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Visible?</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection