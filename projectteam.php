<?php include('header.php');?>
<?php
	$result ="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Project Team Details</li>
</ol>
<div class="row" style="">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body">
								<a href="projectupdate.php">
									<div class="icon">
										<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									</div>
									<div class="four-text">
										<h3>Update Details</h3>
										<h4><?php echo(isset($TotalEmploId['emp']))?$TotalEmploId['emp']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body">
								<a href="projectview.php">
									<div class="icon">
										<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
									</div>
									<div class="four-text">
										<h3>View Details</h3>
										<h4><?php echo(isset($tpandingleave['pleave']))?$tpandingleave['pleave']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>

<?php include('footer.php'); ?>