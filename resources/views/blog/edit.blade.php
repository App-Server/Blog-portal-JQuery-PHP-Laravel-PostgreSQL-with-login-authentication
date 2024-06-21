<x-layout title="Edit Blog">
    <div class="main-content">
        <div class="container">
            <h3>Blog Edit</h3>
            <x-validation-alert />
            <div class="card-forms">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->id) }}" method="post" id="loginForm">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label"><i class="bi bi-body-text"></i>Title</label>
                                <input type="text" name="name" id="title" placeholder="Title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ $blog->name }}">
                                <div class="invalid-feedback">
                                    Please provide a title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" id="comments" name="post" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px">{{ $blog->post }}</textarea>
                                    <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Comments</label>
                                    <div class="invalid-feedback">
                                        Please provide a Comments.
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</x-layout>