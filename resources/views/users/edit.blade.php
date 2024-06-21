<x-layout title="Edit User">
    <div class="main-content ">
        <div class="container-fluid col-sm-6">
            <h3>Users Edit</h3>
            <x-validation-alert />
            <div class="card col-sm-11 mb-3">
                <div class="card-body">
                    <h4><i class="bi bi-eye"></i>Current registration</h4>
                    <p><i class="bi bi-person-bounding-box"></i> {{ $user->name }}</p>
                    <p><i class="bi bi-envelope-at"></i> {{ $user->email }}</p>
                </div>
            </div>
            <div class="card-forms ">
                <div class="card col-sm-11 ">
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @method('PUT')
                            @include('users._partials.form')
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</x-layout>