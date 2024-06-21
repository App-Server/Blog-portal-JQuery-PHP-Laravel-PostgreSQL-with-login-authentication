<x-layout title="Users Create">
    <div class="main-content ">
        <div class="container">
            <h3>Users Create</h3>
            <x-validation-alert />
            <div class="card-forms ">
                <div class="card col">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @include('users._partials.form')
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</x-layout>