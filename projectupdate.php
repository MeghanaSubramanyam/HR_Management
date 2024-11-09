<?php include('header.php');?>
<?php
    include_once('controller/connect.php');
    $dbs=new database();
    $db=$dbs->connection();
    
    

?>
<form method="POST" action="project.php">
<div class="container-fluid" style="margin-bottom: 30px;margin-top: 10px; background: white;">
    <div class="row">
    <h2 style="color: #1abc9c;">Update Details</h2><hr>
        <div class="col-md-5 control-label">
              <label class="control-label"><h4>Project Name</h4></label>
              <div class="input-group">
                  <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" name="projectname" title="project name" placeholder="Project Name" class="form-control">
              </div>
            </div>
        <div class="clearfix"> </div>
    </div>
    <div class="row">
        <div class="col-md-7 control-label">
              <label class="control-label"><h4>Team Members</h4></label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates1" placeholder="Project Manager" class="form-control" disabled>
              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates11" placeholder="Id number" class="form-control">
              
              </div>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates2" placeholder="Team Lead" class="form-control" disabled>

              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates12" placeholder="Id number" class="form-control">
              
              </div>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates3" placeholder="Project Developer" class="form-control" disabled>

              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates13" placeholder="Id number" class="form-control">
              
              </div>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates4" placeholder="Project Developer" class="form-control" disabled>

              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates14" placeholder="Id number" class="form-control">
              
              </div>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates5" placeholder="Project Testing" class="form-control" disabled>

              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates15" placeholder="Id number" class="form-control">
              
              </div>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates6" placeholder="Project Testing" class="form-control" disabled>
            
              <span class="input-group-addon">
              <i class="fa fa-cog" aria-hidden="true"></i>
              </span>
              <input type="text" title="teammates" name="teammates16" placeholder="Id number" class="form-control">
              
              </div>
            </div>
        <div class="clearfix"> </div>
    </div>

   <!-- <div class="row">
        <div class="col-md-5 control-label">
            <label class="control-label">Confirm Password</label>
            <div class="input-group">             
                <span class="input-group-addon">
        	    	<i class="fa fa-pencil" aria-hidden="true"></i>
            	</span>
              	<input type="password" name="cpassword" title="Confirm Password" placeholder="Confirm Password" class="form-control" >
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <h4 style="color: #F1C40F;"><?php echo $result ?></h4>-->
    <div class="row">
    	<div class="col-md-3 form-group">
        	<button type="submit" name="Update" title="Update" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-default" title="Reset">Reset</button>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

</form>

<?php include('footer.php'); ?>
