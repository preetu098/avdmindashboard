<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if ($_SESSION['ID'] > 0) {
include('header.php');?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage Banuser</h1>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Ban Users</li>
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
            <div class="box-body">
  <form id="formID" name="formID" method="post" action="#" enctype="multipart/form-data">
          <div class="table-responsive"> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <th>User ID</th>
                        <th>Mobile</th>
                       
                        <th>Email</th>
                        <th>Own Code</th>
                        <th>Ref. By</th>
                        <th>Wallet</th>
                        <th>Recharge</th>
                          <th>Withdrawal</th>
                           <th>Reward</th>
                         
                          <th>Comission</th>
                           <th>Bonus Wallet</th>
                           
                        <th>Reg. Date</th>
                        <th>Action</th>
                </tr>
                </thead>
                <tbody>
       
                  <tr>
                       <td>4983</td>
                      
              <td>8822370347</td>
             
              <td></td>
              <td>UHI560GF</td>
              <td>T77KQSTC</td>
              
            
              <td>0.00&nbsp;<a href="javascript:void(0);" onClick="edit(4983,8822370347,0)" class="text-aqua" title="Delete"><i class="fa fa-edit"></i></a>              
              </td>
              </td>
              <td>0.00</td>
			  
			  
			   <td>0.00</td>
			  
			   <td>0.00</td>
			  
			     <td>0.0</td>
			  
			
			  
			  
		


   <td>0.0</td>
	
	
			  
			  
			  
			  
              <td>21-02-2023</td>
              
			  <td>
              
              <a href="javascript:void(0);" onClick="delete_row(4983)" class="update-person" style="color:#f56954; font-size:16px;" title="Delete"><i class="fa fa-trash"></i></a>
			        &nbsp;
      <a href="javascript:void(0);" onClick="UnRespond(4983)" class="update-person" style="color:#f00; font-size:16px;" data-toggle="tooltip" title="Unpublish"><i class="fa fa-square-o"></i></a>
         &nbsp;
       <a href="edit_user_info.php?user=4983"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
       <a href="user-details.php?user=4983"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-info"></i></a>
         
       
       </td>
                </tr>
          
                  <tr>
                       <td>4385</td>
                      
              <td>7014029053</td>
             
              <td></td>
              <td>B4Z7MLSH</td>
              <td>36XG81YE</td>
              
            
              <td>384.39&nbsp;<a href="javascript:void(0);" onClick="edit(4385,7014029053,384.38781412518)" class="text-aqua" title="Delete"><i class="fa fa-edit"></i></a>              
              </td>
              </td>
              <td>0.00</td>
			  
			  
			   <td>0.00</td>
			  
			   <td>200.00</td>
			  
			     <td>0.0</td>
			  
			
			  
			  
		


   <td>438.4</td>
	
	
			  
			  
			  
			  
              <td>19-02-2023</td>
              
			  <td>
              
              <a href="javascript:void(0);" onClick="delete_row(4385)" class="update-person" style="color:#f56954; font-size:16px;" title="Delete"><i class="fa fa-trash"></i></a>
			        &nbsp;
      <a href="javascript:void(0);" onClick="UnRespond(4385)" class="update-person" style="color:#f00; font-size:16px;" data-toggle="tooltip" title="Unpublish"><i class="fa fa-square-o"></i></a>
         &nbsp;
       <a href="edit_user_info.php?user=4385"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
       <a href="user-details.php?user=4385"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-info"></i></a>
         
       
       </td>
                </tr>
          
                  <tr>
                       <td>4231</td>
                      
              <td>7688894926</td>
             
              <td></td>
              <td>7UEMAGCQ</td>
              <td>WR5J7JRQ</td>
              
            
              <td>0.00&nbsp;<a href="javascript:void(0);" onClick="edit(4231,7688894926,0)" class="text-aqua" title="Delete"><i class="fa fa-edit"></i></a>              
              </td>
              </td>
              <td>2,000.00</td>
			  
			  
			   <td>2,135.00</td>
			  
			   <td>0.00</td>
			  
			     <td>0.0</td>
			  
			
			  
			  
		


   <td>0.0</td>
	
	
			  
			  
			  
			  
              <td>18-02-2023</td>
              
			  <td>
              
              <a href="javascript:void(0);" onClick="delete_row(4231)" class="update-person" style="color:#f56954; font-size:16px;" title="Delete"><i class="fa fa-trash"></i></a>
			        &nbsp;
      <a href="javascript:void(0);" onClick="UnRespond(4231)" class="update-person" style="color:#f00; font-size:16px;" data-toggle="tooltip" title="Unpublish"><i class="fa fa-square-o"></i></a>
         &nbsp;
       <a href="edit_user_info.php?user=4231"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
       <a href="user-details.php?user=4231"  class="update-person" style="color:#0E0E44; font-size:16px;" data-toggle="tooltip" title="Edit"><i class="fa fa-info"></i></a>
         
       
       </td>
                </tr>
                       
               
                </tbody>
                
              </table>
             </div>
   <div class="box-header box-header2" style="margin-bottom: 10px;">&nbsp; </div>
<div class="row">              
<div class="col-sm-10"></div>
              <div class="col-sm-2">
               &nbsp;
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
  <div id="excel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="chn">Change Amount<br>
<small id="mob"></small></h4>
              </div>
  <form name="type" id="type" enctype="multipart/form-data" action="#" method="post">
              <div class="modal-body">
              
              <div class="form-group ">
                  <label for="add_item">Amount</label>  
   <input class="form-control" id="amount" name="amount" type="text" value="" onkeypress="return isNumber(event)" required>
    <input class="form-control" id="editid" name="editid"  type="hidden">
    <i id="error"></i>
                </div>
            			
              </div>
              <div class="modal-footer">
                
  <button type="submit" class="btn btn-danger" id="add_role">Save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
         
</div>
<div class="clearfix"></div>

<?php include('footer.php');
} else {
  echo "<script>window.location='adminLogin.php' </script>";
}
?>