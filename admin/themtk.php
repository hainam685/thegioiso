<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 <div class="container">
  <h3>THÊM TÀI KHOẢN</h3>

  <form action="" method="POST">
  <div class="mb-3">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input name="name" type="name" class="form-control" >
  </div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input  name = "email" type="email" class="form-control"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input name="phone" type="phone" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">address</label>
    <input name="address" type="address" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">level</label>
    <input name="level" type="level" class="form-control" >
  </div>
  <button name="themtk" type="submit" class="btn btn-primary">Thêm</button>
  <p>quay về Admin <a href="index.php?task=pageadmin">tại đây </a></p>
</form>
</div>
</body>
</html>