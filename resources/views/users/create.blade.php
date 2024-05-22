@extends('layouts.app')

@section('title', 'Users Create')

@section('content')
{{-- Conteudo --}}

<div class="main-content ">
    <div class="container-fluid col-sm-6">
        <h3>Users Create</h3>
        <div class="card-forms ">
            <div class="card col-sm-11 ">
                <div class="card-body">
                    @include('includes.validation-form')
                    <form action="{{ route('users.store') }}" method="post">
                        @include('users._partials.form')
                    </form>
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection