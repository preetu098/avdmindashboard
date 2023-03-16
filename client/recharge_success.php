<?php
include('connection.php');
if (isset($_POST['submit'])) {
    print_r($_POST);
    $recharge_amount = $_POST['recharge_amount'];
    $upi = $_POST['upi'];
    $transaction_number = $_POST['transaction_number'];
  
    $date = date("Y-m-d H:i:s");
    $sql = "insert into recharge_details(recharge_amount,upi,transaction_number,status,updated_at) values('$recharge_amount','$upi','$transaction_number','1','$date')";

    if (mysqli_query($connection, $sql)) {
        echo "<script>{
                 alert('successfully !!');
                 
                }
                 </script>";
        echo "<script>window.location='recharge.php' </script>";

    } else {

        echo "<script>{
            alert('Not !!');
           
        } 
            </script>";
        echo "<script>window.location='recharge.php' </script>";

    }
}
?>