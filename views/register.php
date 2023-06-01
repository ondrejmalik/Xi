<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Form</title>
</head>
<body>
<form action="/login/logme" method="post">
    <h1 class="h3 mb-3 fw-normal" id="signInText">Sign in</h1>
<input type="hidden" name="formType" value="register">
    <div class="form-floating">
      <input type="username" class="form-control" id="floatingInput" placeholder="admin" name="name">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="1234" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
  </form>
  <style>
      #signInText{
          text-align: center;
    </style>
</body>
</html>