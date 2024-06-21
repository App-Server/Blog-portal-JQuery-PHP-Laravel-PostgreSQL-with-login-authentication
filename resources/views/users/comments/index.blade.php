<x-layout title="Comments">
    <div class="main-content">
        <div class="container">
            <h3>List Comments</h3> 
            
            <a href="{{ route('comments.create', $user->id) }}" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Comment</a>
            
            Username: {{ $user->name }}
        </div>       
        <br>
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="container">

            <div class="card" style="width: 100%;">
                
                <ul class="list-group list-group-flush">
                    @foreach ($comments as $comment)
                        <li class="list-group-item">
                            <div class="container text-left">
                                <div class="row">
                                <div class="col">
                                    <i class="bi bi-check2-circle"></i><strong> Visible: </strong> {{ $comment->visible ? 'SIM' : 'NÃO' }}
                                </div>

                                <div class="col">
                                    <i class="bi bi-calendar-check"></i><strong> Create: </strong> {{ $comment->created_at }}
                                </div>

                                <div class="col">
                                    <i class="bi bi-calendar-check"></i><strong> Update: </strong> {{ $comment->updated_at }}
                                    <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}" class="btn btn-outline-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                                </div>
                                </div>
                                <div class="col">
                                    <i class="bi bi-card-text"></i><strong> Comments: </strong> {{ $comment->body }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <br>
        <br>
        <br>
    </div>
</x-layout>