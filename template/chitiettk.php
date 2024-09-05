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
  <h3>thông tin tài khoản</h3>
  <form action="" method="POST">
  <?php
            foreach($laytt as $values){
                if($_SESSION['id']==$values['id']){  
            ?>
  <div class="mb-3">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input name="name" type="name" class="form-control" value="<?php echo $values['name']?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input name="email" type="email" class="form-control" value="<?php echo $values['email']?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input name="phone" type="phone" class="form-control" value="<?php echo $values['phone']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">address</label>
    <input name="address" type="address" class="form-control" value="<?php echo $values['address']?>" >
  </div>
  <button name="suathongtin" type="submit" class="btn btn-primary">Sửa Thông Tin</button>
   <p>quay về trang chủ <a href="index.php?task=pageuser">tại đây </a></p>
  <?php
            }
        }
  ?>
</form>
</div>
</body>
</html>