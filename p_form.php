<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row">
    <div class="col-sm-3 ">
        
<div class="alert alert-success mt-4 mdb-4 text-center"  role="alert">
    <h3> ป้อนรายการซื้อ-ขาย </h3>
</div>
    
<form action="p_insert.php" method="post">
    <label for="">รหัสนักศึกษา</label>
    <input class="form-control" type=text" name= "stu_id" required placeholder="...รหัสนักศึกษา"><br>
    <label for="">ชื่อนักศึกษา</label>
    <input class="form-control" type=text" name= "stu_name" required placeholder="...ชื่อ-สกุล"><br>
    <label for="">รหัสสินค้า</label>
    <input class="form-control"type=text" name= "product_id" required placeholder="...รหัสสินค้า"><br>
    <label for="">จำนวนที่ซื้อ</label>
    <input class="form-control"type=text" name= "Order_quantity" required placeholder="...จำนวนที่ซื้อ"><br>

    <input class="btn btn-success" type="submit" value="submit">
    <a href="main.php" class="btn btn-outline-warning"">Cencel</a>
</form>
</div>
</div>
</div>
</body>
</html>