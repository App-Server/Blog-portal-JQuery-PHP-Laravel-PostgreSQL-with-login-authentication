@extends('layouts.app')

@section('title', 'Blog Show')

@section('content')
{{-- Conteudo --}}

<div class="main-content" >
    <div class="container">
        <h3>Blog Show</h3>
        <div class="card">
            <h5 class="card-header">Register</h5>
            <div class="card-body">
              <p class="card-text"><i class="bi bi-list-ol"></i><strong> Id: </strong>{{ $blog->id }}</p>
              <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Create: </strong> {{ $blog->created_at }}</p>
              <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Update: </strong> {{ $blog->updated_at }}</p>
              <p class="card-text"><i class="bi bi-body-text"></i><strong> Title: </strong> {{ $blog->name }}</p>
              <hr>
              <p class="card-text"><i class="bi bi-card-text"></i><strong> Pots: </strong> {{ $blog->post }}</p> 
              <button class="openModalButton btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Delete</button>

                <div class="modaldelete" style="display:none;">
                    <div class="modalcontent">
                        <span class="close">&times;</span>
                        <h2 style="color: red"><i class="bi bi-exclamation-triangle" style="font-size: 30px"></i>Atenção</h2>
                        <hr style="color: red">
                        <p style="color: red">Você está prestes a excluir um blog. Tem certeza de que deseja continuar?</p>
                        <hr style="color: red">
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>             
              {{-- <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                    Delete
                </button>
            </form> --}}
        </div>
    </div>  
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
    // Quando o botão é clicado, abre o modal correspondente
    $('.openModalButton').click(function() {
        $(this).next('.modaldelete').fadeIn();
    });

    // Quando o botão de fechar (x) é clicado, fecha o modal correspondente
    $('.modaldelete .close').click(function() {
        $(this).closest('.modaldelete').fadeOut();
    });

    // Quando o usuário clica fora do modal, fecha o modal
    $(window).click(function(event) {
        $('.modaldelete').each(function() {
            if ($(event.target).is(this)) {
                $(this).fadeOut();
            }
        });
    });
});

</script>
@endsection
