<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rmutp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert-success mt-4 mdb-4 text-center"  role="alert">
    <h1>ระบบซื้อ-ขาย ร้านคณะวิศวกรรมศาสตร์</h1>
</div>

<a href="p_form.php" class="btn btn-success">Home</a>



    <table class="table table-striped">
        <tr>
            <th>รายการที่</th>
            <th>นักศึกษาผู้ซื้อ</th>
            <th>สินค้าที่ซื้อ</th>
            <th>ราคาต่อหน่วย</th>
            <th>จำนวนที่ซื้อ</th>
            <th>ราคารวม</th>
        </tr>

<?php
    $sql = "SELECT * FROM orderpro INNER JOIN product ON orderpro.product_id=product.product_id
            INNER JOIN students ON orderpro.stu_id=students.stu_id
            order by order_id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);

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
mysqli_close($conn);

?>
    </table>
</div>
</body>
</html>