<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body style="background-color: #f0f6fc">

  <div class="formlogin d-flex justify-content-center" style="margin-top: 60px">
    <div class="card col-sm-4 mb-sm-0 border-light-subtle shadow-sm" style="padding: 40px">
      <div class="card-body ">
        @if ($errors->has('error'))
          <div class="alert alert-danger" role="alert">
              {{ $errors->first('error') }}
          </div>
        @endif
        <form action="{{ route('admin.auth') }}" method="POST" id="loginForm">
          @csrf
          <div class="row gy-3 gy-md-4 overflow-hidden d-flex justify-content-center" >
            <h3>Log in</h3>
            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" id="email"  >
              <div class="invalid-feedback">
                Please provide a email.
              </div>
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" name="password" id="password"  >
              <div class="invalid-feedback">
                Please provide a password.
              </div>
            </div>
            <div class="col-12">
              <div class="d-grid">
                <button class="btn bsb-btn-xl btn-primary" type="submit">Log in now</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script>
      
  </script>

  <script src="{{ asset('/js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>