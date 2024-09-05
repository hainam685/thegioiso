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
  <h3>SỬA SẢN PHẨM</h3>

  <form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TÊN SẢN PHẨM</label>
    <input name="tensp" type="tensp" class="form-control" >
  </div>
    <label for="exampleInputEmail1" class="form-label">LOẠI SẢN PHẨM</label>
    <input  name = "loaisp" type="loaisp" class="form-control"  aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ẢNH SẢN PHẨM</label>
    <input name="anh" type="file" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">GIÁ MUA VÀO</label>
    <input name="giamua" type="giamua" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">GIÁ BÁN RA</label>
    <input name="giaban" type="giaban" class="form-control" >
  </div>
  <button name="suasp" type="submit" class="btn btn-primary">Sửa</button>
</form>
</div>
</body>
</html>