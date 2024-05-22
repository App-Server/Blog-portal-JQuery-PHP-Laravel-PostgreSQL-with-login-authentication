@csrf
<div class="mb-3">
    <label for="exampleInputText1" class="form-label"><i class="bi bi-person-bounding-box"></i>Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputText1" aria-describedby="textHelp" value="{{ $user->name  ?? old('name')}} ">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope-at"></i>Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email ?? old('email') }} ">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i class="bi bi-person-lock"></i>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>
<button type="submit" class="btn btn-primary">Submit</button>