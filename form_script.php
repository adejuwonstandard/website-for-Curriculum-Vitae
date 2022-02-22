<?php
	$message_sent=false;
	if (isset($_POST['submit']) && $_POST['name'] != ''){
		if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
			$name=$_POST['name'];
			$subject=$_POST['subject'];
			$mailFrom=$_POST['mail'];
			$message=$_POST['message'];
			$mail_To="adejuwon.standard@outlook.com";
			$headers="From: ".$mailFrom;
			$txt= "You have received an email from ".$name.".\n\n".$message;
			$data=$name.",".$mailFrom.",".$message;
			$file="file.csv";
			file_put_contents($file, $data.PHP_EOL, FILE_APPEND);
			mail($mail_To, $subject, $txt, $headers);
			header("Location: form_script.php");
			$message_sent=true;
		
			
		}

?>

<html>
	<head>
		<link href="styles.css" rel="stylesheet">
		<title>Thank You Page</title>
	</head>
	<body class="projects">
		<?php
		if($message_sent):
		?>
			<h1 style="color:#f7fff7"> Thanks, we will be in touch</h1>
			<h3 style="color:#f7fff7">Would you like to return to the homepage?</h3>
				<i>Click<p><h3><a class="btn" href="index.html" target="_blank">Home</a></p></h3></i></div>
		<?php
		else:
		?>
			<div>
				<h2 style="color:#f7fff7">Your message has been received</h2>
				<h3 style="color:#f7fff7">Would you like to return to the homepage?</h3>
				<i style="color:#f7fff7">Click<p><h3><a class="btn" href="index.html" target="_blank">Home</a></p></h3></i></div>
		<?php
		endif;
		?>
	</body>

</html>