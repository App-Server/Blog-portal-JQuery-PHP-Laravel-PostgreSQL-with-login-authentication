@extends('layouts.app')

@section('title', 'Settings')

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
        <h3>Settings</h3>
        <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
        </div>
        <div class="accordion" id="accordionExample">  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Formulário de cadastro de novas categorias de blog.
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="alert alert-warning" role="alert">
                        
                    </div>
                    <form action="{{ route('settings.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Novas categorias de blog</label>
                            <input type="text" name="name" placeholder="Title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ old('title') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Formulário de cadastro de novos departamentos para cadastro de novos usuarios.
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="alert alert-warning" role="alert">
                        
                    </div>
                    <form action="{{ route('settings.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Novos departamentos</label>
                            <input type="text" name="name" placeholder="Title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ old('title') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection