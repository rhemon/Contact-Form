<?php
if (isset($_POST['submit'])) {
	$to = "rhemon19@gmail.com"; 
	$name = $_POST['name'];
	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$header = "$name <$from>";
	$result = mail($to, $subject, $message, $header); 
}
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Contact Page </title>
    <link rel='stylesheet' href='libs/css/bootstrap.min.css'/>
	<link rel='stylesheet' href='libs/css/jquery-ui.min.css'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src='libs/js/jquery-ui.min.js'></script>

</head>
<body>
	<?php
	if (isset($result)) { 
		if($result) { 
			include('success.php');
		} else {
			include('failiure.php');
		}
		
	}
	?>
    <!-- Button trigger modal -->
	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactForm">Contact Us</button>

	<!-- Modal -->
	<div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 class="modal-title" id="contactFormLabel">Contact Form</h4>
      			</div>
      			<div class="modal-body">
        			<?php include('modal.php'); ?>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	 		</div>
    		</div>
  		</div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./libs/js/bootstrap.min.js"></script>
</body>
</html>