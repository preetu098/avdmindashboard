<?php include('header.php');?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <br></br>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Recharge Request</li>
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
                  <h4 class="table_bg ">Manage Recharge Request</h4>
              	 
              	 </br>
              	 
                <thead>
                <tr>
                       <th>Sr.No</th>
                          
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
                      <td>3071</td>
                      
                
              <td>7002086741</td>
              <td>500</td>
            <!--  <td>DHANPAY</td> -->
               <td>307090804644</td>
               
               
                <td><a href="https://dhanlaxmimall.in/admin/uploads/" target="_blank"><img src="uploads/" height="50px" alt=""></a></td>
                
              <td>04:18 PM 12-03-2023</td>
		
              <td>Pending</td>
                <td>
			      <form action="manage_recharge.php" method="POST">
			                <input type="hidden" name="id" value="3071">
                            <input type="hidden" name="userid" value="11045">
                            <input type="hidden" name="amount" value="500">
                            <input class="btn btn-primary" type="submit" name="approve" value="Approve">
                    </form> <br>
                        <form action="manage_recharge.php" method="POST">
                            <input type="hidden" name="id" value="3071">
                            <input type="hidden" name="userid" value="11045">
                            <input type="hidden" name="amount" value="500">
                            <input class="btn btn-danger" type="submit" name="reject" value="Reject">
                    </form> 
              </td>
                </tr>
          


                                       
                </tbody>
              </table>
              <!--</div>-->
   <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>
<div class="row">              
<div class="col-sm-6"></div>
              <div class="col-sm-6 text-right">
<!-- <strong>Total Request Amount: <i class="red_txt">124,703.00</i></strong> -->
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