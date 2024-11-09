
<?php
	include("userheader.php");
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
	/* Custom styles for the form */
	body {
		background-color: #f8f9fa;
	}

	.container {
		margin-top: 50px;
	}

	label {
		font-weight: bold;
	}

	input[type="text"],
	input[type="email"],
	textarea {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		box-sizing: border-box;
	}

	input[type="submit"] {
		background-color: #007bff;
		color: #fff;
		padding: 10px 20px;
		border: none;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #0056b3;
	}
	a.back-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
</style>
				<!-- <form action="./contact_send.php" method="post">
               <div class="s-12 l-10">
               <h1 style="width: 85%;">Contact Us</h1><hr><input type="text" readonly="" style="width: 15%;float: right;margin-top: 0px; border: 0px;" value="<?php echo date('d/m/Y');?>">
               </div>
               <div class="clearfix"></div>
               
               <div  class="s-12 l-6">
                 	
					    <label for="fname">Name</label>
					    <input type="text" id="fname" title="Name" name="fname" placeholder="Name " required="">
					    <label for="lname">Email</label>
					    <input type="email" title="Email" id="email" name="email" placeholder="Email " required="">
					    <label for="fname">Subject</label>
					    <input type="text"  title="Subject" name="subject" placeholder="Subject " required="">
					    <label for="message">Message</label>
					    <textarea id="editor1" name="message" title="Message" required=""></textarea>
					    <input type="submit" title="Submit" name="submit" value="Submit">
				  	
               </div>
               </form> -->

			   <!-- <div class="container"> -->
    <!-- <form  action="./contact_send.php" method="post">
        <div class="form-group">
            <label for="fname">Name</label>
            <input type="text" id="fname" title="Name" name="fname" placeholder="Name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" title="Email" id="email" name="email" placeholder="Email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" title="Subject" name="subject" placeholder="Subject" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="editor1" name="message" title="Message" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <input type="submit" title="Submit" name="submit" value="Submit" class="btn btn-primary">
			<a href="home.php" class="back-btn">Back</a>
        </div>
    </form> -->
<!-- </div> -->
<div class="container">
    <div class="row">
        <!-- Cart Section -->
        
        <!-- Contact Form Section -->
        <div class="col-md-8">
		<h2>Contact</h2>
            <form action="./contact_send.php" method="post">
                <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" id="fname" title="Name" name="fname" placeholder="Name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" title="Email" id="email" name="email" placeholder="Email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" title="Subject" name="subject" placeholder="Subject" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="editor1" name="message" title="Message" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" title="Submit" name="submit" value="Submit" class="btn btn-primary">
                    <a href="home.php" class="back-btn btn btn-secondary">Back to Home</a>
                </div>
				<div class="col-md-4">
            <!-- Your cart-related information goes here -->
            
            <!-- Add cart details, items, etc. -->
        </div>

            </form>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS (optional, but some components may require it) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include('userfooter.php'); ?>

<!-- editer textarea-->
	<script src="js/ckeditor.js"></script>
	<script src="js/sample.js"></script>
<script>
	initSample();
</script>







			
			




