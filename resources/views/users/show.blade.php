@extends('layouts.app')

@section('title', 'Users Show')

@section('content')
{{-- Conteudo --}}

<div class="main-content" >
    <div class="container-fluid col-sm-6">
        <h3>User Show</h3>
        <div class="card">
            <h5 class="card-header">Register</h5>
            <div class="card-body">
              <p class="card-text"><i class="bi bi-person-bounding-box"></i><strong> Username: </strong>{{ $user->name }}</p>
              <p class="card-text"><i class="bi bi-envelope-at"></i><strong> Email: </strong>{{ $user->email }}</p>
              <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Create: </strong>{{ $user->created_at }}</p>
              <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Update: </strong>{{ $user->updated_at }}</p>
              <a href="{{ route('users.index') }}" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>  
</div>

@endsection