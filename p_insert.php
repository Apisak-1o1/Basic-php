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

<?php
$stu_id =   $_POST["stu_id"];
$stu_name =   $_POST["stu_name"];
$product_id =   $_POST["product_id"];
$Order_quantity =   $_POST["Order_quantity"];

// include("conect.php");
$sql = "INSERT INTO orderpro (stu_id,stu_name,product_id,Order_quantity) 
         VALUES ('$stu_id','$stu_name', '$product_id', '$Order_quantity')
";




if (mysqli_query($conn, $sql)) {
    echo "<script>  window.alert('สั่งซื้อเรียบร้อย'); </script>";
    mysqli_close($conn);
    echo "<script>window.location.assign('order.php'); </script>";

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  


?>