<x-layout title="Create Blog">
    <div class="main-content ">
        <div class="container">
            <h3>Blog Create</h3>
            <x-validation-alert />
            <div class="card-forms ">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="post" id="loginForm">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label"><i class="bi bi-card-text"></i>Title</label>
                                <input type="text" name="name" placeholder="Title" id="title" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ old('title') }}">
                                <div class="invalid-feedback">
                                    Please provide a title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputText1" class="form-label"><i class="bi bi-card-text"></i>Author</label>
                                <select class="form-select" aria-label="Default select example" disabled>
                                    <option selected>
                                        @if (Auth::check())
                                            <p>{{ Auth::user()->name }}</p>
                                        @endif
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" id="comments" name="post" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 400px" value="{{ old('post') }}"></textarea>
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