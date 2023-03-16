<?php include('header.php');?>
<div class="content-wrapper">

    



<!-- Main content -->

<section class="content">

 <section class="content-header">
    <h1>Amount Setup</h1>
    <ol class="breadcrumb">
      <li><a href="desktop.php"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active">Amount Setup</li>
    </ol>
  </section>

  


  <!-- Main content -->
  <section class="content">
    <div class="row">
    <div class="col-xs-12 text-center">
        
        </div>
      <div class="col-xs-12">
        

        <div class="box">
          
          <!-- /.box-header -->



        
     <form id="formID" name="formID" method="post" action="/admin/manage_amount.php" enctype="multipart/form-data">

          <div class="box-body">

<div class="clearfix"></div>



<div class="col-sm-6">

            <div class="form-group">

            <label>Minium Recharge Amount</label>

            <input type="text" class="form-control" onkeypress="return isNumber(event)" name="mra" id="mra" required value="500">

            </div>

            </div>

<div class="col-sm-6">

            <div class="form-group">

            <label>Minimum Withdrawal Amount</label>

            <input type="text" class="form-control" onkeypress="return isNumber(event)" name="mwa" id="mwa" required value="500">

            </div>

            </div>          

<div class="col-sm-6">

            <div class="form-group">

            <label>Interest Rate <i class="red_txt">[in %]</i></label>

            <input type="text" class="form-control"  name="ib" id="ib" required value="0.8%">

            </div>

            </div>

<div class="col-sm-6">

            <div class="form-group">

            <label>Recharge Bonus <i class="red_txt">[in %]</i></label>

            <input type="number" class="form-control" onkeypress="return isNumber(event)" name="rb" id="rb" required value="0">

            </div>

            </div>




<div class="col-sm-6">

            <div class="form-group">

            <label>Level1 Commission Percent <i class="red_txt">[in %]</i></label>

            <input type="text" class="form-control" name="level1" id="level1" required value="2">

            </div>

            </div>

<div class="col-sm-6">

            <div class="form-group">

            <label>Level2 Commission Percent <i class="red_txt">[in %]</i></label>

            <input type="text" class="form-control"  name="level2" id="level2" required value="1">

            </div>

            </div>
            
            <div class="col-sm-6">

            <div class="form-group">

            <label>Level3 Commission Percent <i class="red_txt">[in %]</i></label>

            <input type="text" class="form-control"  name="level3" id="level3" required value="0.5">

            </div>

            </div>





            
            
            <div class="col-sm-6">

            <div class="form-group">

            <label>Wagar X <i class="red_txt">[Enter Digit For Multiply]</i></label>

            <input type="text" class="form-control"  name="wagar" id="wagar" required value="0">

            </div>

            </div>

<div class="col-sm-6">

            <div class="form-group">

            <label>Sign Up Bonus</label>

            <input type="text" class="form-control"  name="regbonus" id="regbonus" required value="50">

            </div>

            </div>  



<div class="col-sm-6">

            <div class="form-group">

            <label>Withdrawal Status </label>

           
<select class="form-control" name="withdrawal_status">





<option value="on" selected>On</option><option value="off">Off</option>

  






</select>

            </div>

            </div> 






            



           <div class="clearfix"></div>   

            <div class="form-group">

            <div class="text-center">



<input type="submit" class="btn btn-primary" value="Submit"  name="site_setting" ></div>

              </div> 

             </div>

              <div class="clearfix"></div>

           





        </form>

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