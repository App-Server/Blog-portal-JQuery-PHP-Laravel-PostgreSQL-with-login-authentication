@extends('layouts.app')

@section('title', 'Users Edit Comments')

@section('content')
<div class="main-content">
    <div class="container">
        <h3>Edit Comments</h3>
        {{ $user->name }}
        <div class="card-forms">
            <div class="card">
                <div class="card-body">
                    {{-- @include('includes.validation-form') --}}
                    <form action="{{ route('comments.update', ['user' => $user->id, 'id' => $comment->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="comments" name="body" placeholder="Leave a comment here" style="height: 200px">{{ $comment->body ?? old('body') }}</textarea>
                                <label for="floatingTextarea2"><i class="bi bi-card-text"></i> Comments</label>
                                <div class="invalid-feedback">
                                    Please provide a comment.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visible"
                                @if (isset($comment) && $comment->visible)
                                    checked="checked"
                                @endif
                            >
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
