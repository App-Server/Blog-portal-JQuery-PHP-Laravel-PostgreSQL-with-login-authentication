<x-layout title="Users">
    <div class="main-content">
        <div class="container">
            <x-validation-alert />
        </div>
        <div class="container">
            <h3>
                User List
                <a href="{{ route('users.index') }}"><button type="button" class="css-btn btn btn-outline-secondary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        <i class="bi bi-arrow-counterclockwise d-flex justify-content-center"></i>
                </button></a>
            </h3>        
            <div class="col-md-3">
                <form id="searchForm" action="{{ route('users.index') }}" method="GET">
                    <select class="form-select" id="validationCustom04" name="user_id" required onchange="this.form.submit()">
                        <option selected disabled value="">Select a user</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <br>
            
            <script>
                document.getElementById('validationCustom04').addEventListener('change', function() {
                    console.log("Select changed"); // Verifique se este log é exibido no console do navegador
                    document.getElementById('searchForm').submit();
                });
            </script>

            <div class="card" style="width: 100%;">
                            
                <ul class="list-group list-group-flush">
                    @foreach ($users as $user)
                        <li class="list-group-item">
                            <br>
                            <p><i class="bi bi-person-bounding-box"></i><strong>Nome:</strong>{{ $user->name }}</p>
                            <p><i class="bi bi-envelope-at"></i><strong>Email:</strong>{{ $user->email }}</p>
                            <div class="container text-left">
                                <div class="row">
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><strong>View</strong></label>
                                    <br>
                                    <label for="validationCustomUsername" class="form-label">
                                        <a href="{{ route('users.show', $user->id ) }}"><button type="button" class="btn btn-outline-success"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Details
                                        </button></a>
                                    </label>
                                    <br>
                                </div>
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><strong>Comment</strong></label>
                                    <br>
                                    <label for="validationCustomUsername" class="form-label">
                                        <a href="{{ route('comments.index', $user->id ) }}"><button type="button" class="btn btn-outline-secondary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                            Comment
                                        </button></a>
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><strong>Edit</strong></label>
                                    <br>
                                    <label for="validationCustomUsername" class="form-label">
                                        <a href="{{ route('users.edit', $user->id ) }}"><button type="submit" class="btn btn-outline-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</button></a>
                                    </label>
                                    <br>
                                </div>
                                <div class="col">
                                    <label for="validationCustomUsername" class="form-label"><strong>Delete</strong></label>
                                    <br>
                                    <button class="openModalButton btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Delete</button>

                                    <div class="modaldelete" style="display:none;">
                                        <div class="modalcontent">
                                            <span class="close">&times;</span>
                                            <h2 style="color: red"><i class="bi bi-exclamation-triangle" style="font-size: 30px"></i>Atenção</h2>
                                            <hr style="color: red">
                                            <p style="color: red">Você está prestes a excluir um usuário. Tem certeza de que deseja continuar?</p>
                                            <hr style="color: red">
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        Delete
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="container">
                <div class="py-4">
                    {{ $users->links() }}
                </div>
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
</x-layout>