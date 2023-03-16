<?php include('header.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br></br>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
                <th>Sr.No</th>
                 <th>User Name</th>
                <th>User Mobile</th>
                <th>Amount</th>
                 <!--   <th>Payment Type</th> -->
                <th>TXN No.</th>
                  <th>Image</th>
                <th>Date</th>
                 
                 <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
       
                  <tr>
                <td>3075</td>
                  <td></td>
              <td>7859852593</td>
              <td>5,000</td>
                <!--  <td>DHANPAY</td> -->
               <td>222222222222</td>
                       <td><a href="https://glamourclub.in/alex/uploads/" target="_blank"><img src="uploads/" height="50px" alt=""></a></td>
              <td>03:14 PM 15-03-2023</td>
			 
              <td>Approved</td>
              <td> <a href="javascript:void(0);" onClick="delete_row(3075)"  class="update-person" style="background-color:#f56954; color:white; font-size:16px; padding: 7px;" title="Delete">Delete</a></td>
                
                </tr>
          
                  <tr>
                <td>3023</td>
                  <td></td>
              <td>9931083141</td>
              <td>500</td>
                <!--  <td>DHANPAY</td> -->
               <td>305790623762</td>
                       <td><a href="https://glamourclub.in/alex/uploads/" target="_blank"><img src="uploads/" height="50px" alt=""></a></td>
              <td>08:48 AM 26-02-2023</td>
			 
              <td>Approved</td>
              <td> <a href="javascript:void(0);" onClick="delete_row(3023)"  class="update-person" style="background-color:#f56954; color:white; font-size:16px; padding: 7px;" title="Delete">Delete</a></td>
                
                </tr>


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


<?php include('footer.php');?>