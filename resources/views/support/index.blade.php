@extends('layouts.app')

@section('title', 'Users Create')

@section('content')
{{-- Conteudo --}}

<div class="main-content ">
    <div class="container">
        <h3>Support</h3>
        
        <h5><i class="bi bi-ticket-detailed"></i>Ticket Open</h5>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp">
                    </div>
                    <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">State</label>
                        <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                      </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" type="text" id="comments" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" value="{{ old('description') }}"></textarea>
                            <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Description</label>
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

@endsection