<?php include('header.php');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Manage User</h1>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage User</li>
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
			<table width="98%" border="1" id='empTable' class='dataTable table table-bordered table-striped'>
				<thead>
					<tr>
					    <th>User ID</th>
                        <th>Mobile</th>
                       <th>IP Address</th>
                        
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
			</table>
		</article>
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

	<script type="text/javascript">
		$(document).ready(function(){
			$('#empTable').DataTable({
				'processing': true,
				'serverSide': true,
				'serverMethod': 'post',
				'pageLength': 100,
				"aaSorting": [[0, "asc"]],
				"searchable": true,
				'ajax': {
					'url':'data_test.php'
				},
				'columns': [
    			{ data: 'id' },
    				{ data: 'mobile' },
    				{ data: 'ip' },
    			
    				{ data: 'owncode' },
    				{ data: 'code' },
    				{ data: 'wallet' },
    				{ data: 'recharge' },
					{ data: 'withdrawal' },
    				{ data: 'reward' },
    			    { data: 'comission' },
    			    { data: 'bonus' },
    				{ data: 'createdate' },
    				{ data: 'action' },
				]
			});
		});
	</script>	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<div class="clearfix"></div>

<?php include('footer.php');?>