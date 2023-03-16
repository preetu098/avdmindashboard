<?php include('header.php');?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage Withdrawal Request</h1>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Withdrawal Request</li>
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
                <th>Detail</th>
                <th>User Mobile</th>
                <th>Amount</th>
                  <th>Transfer</th>
                    <th>5% Fees</th>
                <th>Payout Type</th>
                <th>Req. Date</th>
                
                </tr>
                </thead>
                <tbody>
       
                  <tr>
                          <td>292</td>
                       <td><a href="withdrawal-accept-reject.php?id=ZWgzRnNFcEplVzFaajR4Q090VHpvUT09" data-toggle="tooltip" title="Accept/Reject"><i class="fa fa-eye" style="font-size:20px;"></i></a></td>
              
                    <td><a style="background-color:#F5F5F5; color:black; font-size:16px; padding: 7px;" href="user-details.php?user=4443" >Check User</a></td>
              <td>9085225338</td>
               <td>6900</td>
              <td>6555</td>
                         <td>345</td>
              <td>BANK</td>
              <td>16-03-2023 - 07:00 AM</td>
			 
                </tr>
          
                  <tr>
                          <td>0</td>
                       <td><a href="withdrawal-accept-reject.php?id=OUsvWTViUTFoeFRCSGVtci9hWEpkQT09" data-toggle="tooltip" title="Accept/Reject"><i class="fa fa-eye" style="font-size:20px;"></i></a></td>
              
                    <td><a style="background-color:#F5F5F5; color:black; font-size:16px; padding: 7px;" href="user-details.php?user=9088" >Check User</a></td>
              <td>8427876305</td>
               <td>560</td>
              <td>532</td>
                         <td>28</td>
              <td>BANK</td>
              <td>15-03-2023 - 10:30 AM</td>
			 
                </tr>
     
                       
                </tbody>
              </table>
              <!--</div>-->
   <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>
<div class="row">              
<div class="col-sm-6"></div>
              <div class="col-sm-6 text-right">
 <strong>Total Request Amount: <i class="red_txt">147,666.47</i></strong>
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