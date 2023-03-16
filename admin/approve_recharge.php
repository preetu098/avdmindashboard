<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if ($_SESSION['ID'] > 0) {
include('header.php'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <br></br>
    <ol class="breadcrumb">
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manage Recharge Approval</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">


        <div class="box">
          <div class="box-header box-header2">
            <div class="col-xs-6 text-right">
              <h3 class="box-title"></h3>
            </div>
            <div class="col-sm-6">
              <div class="pull-right">&nbsp;</div>
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body" style="overflow-x:auto;">
            <form id="formID" name="formID" method="post" action="#" enctype="multipart/form-data">
              <!--<div class="table-responsive"> -->
              <table id="example1" class="table table-striped">
                <h4 class="table_bg ">Manage Recharge Approvals</h4>

                </br>

                <thead>
                  <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>User Mobile</th>
                    <th>Amount</th>
                    <!--   <th>Payment Type</th> -->
                    <th>TXN No.</th>
                    <!-- <th>Image</th> -->
                    <th>Date</th>

                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  include('connection.php');
                  $sql = "select * from recharge_details ";
                  $result = mysqli_query($connection, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      // print_r($row);
                      ?>


                      <tr>
                        <td>
                          <?php echo $count++; ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                          <?php echo $row['recharge_amount']; ?>
                        </td>
                        <td>
                          <?php echo $row['transaction_number'] ?>
                        </td>
                        <td>
                          <?php echo $row['updated_at']; ?>
                        </td>
                        <td>
                          <?php
                          if ($row['status'] == 1) {
                            echo "Pending";
                          } else {
                            echo "Approved";
                          }
                          ?>

                        
                        <td> <a class="btn btn-danger"
                            href="delete_recharge_record.php?id=<?php echo $row['id'] ?>&user_id=<?php echo $row['user_id']; ?>">Delete</a>
                        </td>

                      </tr>
                    <?php }
                  } ?>

                </tbody>
              </table>
              <!--</div>-->
              <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>
              <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                  <!-- <strong>Total Request Amount: <i class="red_txt">1,028,120.00</i></strong> -->
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="clearfix"></div>


<?php include('footer.php');
} else {
  echo "<script>window.location='adminLogin.php' </script>";
}
?>