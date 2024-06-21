<x-layout title="List Blog">
    <div class="main-content ">
        <div class="container">
            <x-validation-alert />
        </div>
        <div class="container">
            <h3>List Blog</h3>
        </div> 
        <div class="container">
            <div class="card" style="width: 100%;">
                <ul class="list-group list-group-flush">
                    @foreach ($blogs as $blog)
                        <li class="list-group-item">
                            <div class="row g-3 needs-validation" >
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <br>
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-card-text"></i><strong> Title: </strong></label>
                                            <label for="validationCustomUsername" class="form-label">
                                                {{ $blog->name }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="validationCustomUsername" class="form-label"><i class="bi bi-calendar-check"></i><strong>Create:</strong>{{ $blog->created_at }}</label>
                                        <br>
                                        <label for="validationCustomUsername" class="form-label">
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Details</a>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="py-4">
                {{ $blogs->links() }}
            </div>
        </div>
        <br>
        <br>
    </div>
</x-layout>