<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "otp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
 //   echo "ติดต่อสำเร็จ";
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rmutp-shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .table table-striped
        {
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
<div class="alert alert-success mt-4 mdb-4 text-center"  role="alert">
    <h1>ระบบซื้อ-ขาย ร้านคณะวิศวกรรมศาสตร์</h1>
</div>
<div class="row">
<div class="col-sm-4">
<div class="container">
<div class="row">
    <div >
        
<div>
    <h3>รายการซื้อ-ขาย</h3>
</div>
    
<form action="main copy.php" method="post">
    <label for="">รหัสนักศึกษา</label>
    <input class="form-control" type=text" name= "stu_id" required placeholder="...รหัสนักศึกษา"><br>
    <label for="">รหัสสินค้า</label>
    <input class="form-control"type=text" name= "product_id" required placeholder="...รหัสสินค้า"><br>
    <label for="">จำนวนที่ซื้อ</label>
    <input class="form-control"type=text" name= "Order_quantity" required placeholder="...จำนวนที่ซื้อ"><br>

    <input class="btn btn-success" type="submit" value="submit">
    <a href="main.php" class="btn btn-outline-warning"">Cencel</a>





<?php
$pro_quantity = $_GET ["product.pro_quantity"];

$stu_id =   $_POST["stu_id"];
$product_id =   $_POST["product_id"];
$Order_quantity =   $_POST["Order_quantity"];

$sql = "INSERT INTO orderpro (stu_id,product_id,Order_quantity) 
        VALUES ('$stu_id', '$product_id', '$Order_quantity')
";
$update="SELECT * FROM product
        UPDATE product
        SET pro_quantity=$pro_quantity,Order_quantity=$Order_quantity,pro_quantity=$pro_quantity-$Order_quantity
        WHERE product_id=$product_id";


if (mysqli_query($conn, $sql)) {
    echo "<script>  window.alert('สั่งซื้อเรียบร้อย'); </script>";
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>




</form>
</div>
</div>
</div>
</div>







<div class="col-sm-8">
    <table class="table table-striped">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาต่อหน่วย</th>
            <th>จำนวนในสต็อก</th>
        </tr>

<?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>

<?php $jid=$row["product_id"]; ?>


        <tr>
            <td><?php echo $row["product_id"]; ?></td>
            <td><?php echo $row["pro_name"]; ?></td>
            <td><?php echo $row["pro_quantity"]; ?></td>
            <td><?php echo $row["pro_cost"]; ?></td>
        </tr>
<?php
  }
}
?>
    </table>
</div>

<div>
<table class="table table-striped" id=right>
        <tr>
            <th>รายการที่</th>
            <th>นักศึกษาผู้ซื้อ</th>
            <th>สินค้าที่ซื้อ</th>
            <th>ราคาต่อหน่วย</th>
            <th>จำนวนที่ซื้อ</th>
            <th>ราคารวม</th>
        </tr>

<?php
    $sql = "SELECT product.product_id,orderpro.product_id
    FROM (orderpro
    INNER JOIN product ON product.product_id=orderpro.product_id)
    order by order_id DESC LIMIT 10";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
<?php $jid=$row["order_id"]; ?>
        <tr>
            <td><?php echo $row["order_id"]; ?></td>
            <td><?php echo $row["stu_id"].'-'.$row['stu_name']; ?></td>
            <td><?php echo $row["product_id"].'-'.$row['pro_name']; ?></td>
            <td><?php echo $row["pro_cost"]; ?></td>
            <td><?php echo $row["Order_quantity"]; ?></td>
        </tr>
<?php

  }
}
?>
    </table>
</div>
</div>
</body>
</html>