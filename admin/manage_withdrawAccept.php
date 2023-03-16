<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if ($_SESSION['ID'] > 0) {
include('header.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage Withdrawal Accept</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Withdrawal Accept</li>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Transcation ID</th>
                 <th>Action</th>
                <th>Sr.No</th>
                <th>User Mobile</th>
                <th>Amount</th>
                <th>Payout Type</th>
                <th>Req. Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
       
                  <tr>
                       <td>0</td>
                        <td><a href="withdrawal-accept-reject.php?id=bTM4bENCRXQwYVpkYXQ1RjFoUytmZz09" data-toggle="tooltip" title="Accept/Reject"><i class="fa fa-eye" style="font-size:20px;"></i></a></td>
                  <td>1</td>
              <td>6001897451</td>
              <td>500.00</td>
              <td>BANK</td>
              <td>25-02-2023</td>
			<td> <a href="javascript:void(0);" onClick="delete_row(743)"  class="update-person" style="background-color:#f56954; color:white; font-size:16px; padding: 7px;" title="Delete">Delete</a></td>
                </tr>
                <tr>
                       <td>1</td>
                        <td><a href="withdrawal-accept-reject.php?id=aC9WNHRvL3dVYUFvNUh3QW1Cb21ydz09" data-toggle="tooltip" title="Accept/Reject"><i class="fa fa-eye" style="font-size:20px;"></i></a></td>
                  <td>711</td>
              <td>9556413758</td>
              <td>688.00</td>
              <td>BANK</td>
              <td>13-02-2023</td>
			<td> <a href="javascript:void(0);" onClick="delete_row(4)"  class="update-person" style="background-color:#f56954; color:white; font-size:16px; padding: 7px;" title="Delete">Delete</a></td>
                </tr>
                       
                </tbody>
              </table>
              <!--</div>-->
   <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>
<div class="row">              
<div class="col-sm-6"></div>
              <div class="col-sm-6 text-right">
 <strong>Total Request Amount: <i class="red_txt">980,632.04</i></strong>
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