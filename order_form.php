<?php

$main_url = "http://omaha3dprint.dev";

// you can change these settings
$max_allowed_file_size = 5000; // size in KB
$allowed_extensions = array("stl", "zip", "7z");
$upload_folder = "/home/oma3dprnt2013/temp_files/";

// look for fields, make file, send email
$error = false;
if (isset($_POST['submit283947590']) && !empty($_POST['submit283947590'])) {

	if (isset($_POST['inputEmail']) && !empty($_POST['inputEmail'])) {

		// file info
		$name_of_uploaded_file = basename($_FILES['stlFile']['name']);
		$type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);
		$size_of_uploaded_file = $_FILES['stlFile']['size'] / 1024; //size in KBs

		// check size
		if($size_of_uploaded_file > $max_allowed_file_size ) {
			$error = "The file was too large, please send a file under " . $max_allowed_file_size . "KB";
		} else {
			// file extension
			$allowed_ext = false;
			for($i = 0; $i < sizeof($allowed_extensions); $i++) {
				if(strcasecmp($allowed_extensions[$i], $type_of_uploaded_file) == 0) {
					$allowed_ext = true;
				}
			}
			if(!$allowed_ext) {
				$error = "The uploaded file is not a supported file type, please use one of the following: " . implode(', ', $allowed_extensions);
			} else {
				// copy the file to the directory place
				$path_of_uploaded_file = $upload_folder . md5(date('l jS \of F Y h:i:s A')) . $name_of_uploaded_file;
				$tmp_path = $_FILES['stlFile']['tmp_name'];
				if(is_uploaded_file($tmp_path)) {
					if(!copy($tmp_path, $path_of_uploaded_file)) {
						$error = "File could not be uploaded, it's probably a server error. Try again, and if it still doesn't work please let us know!";
					} else {
						$to = "omaha3dprint@gmail.com";
						$subject = "Online order form";
						$headers = "From: automated@omaha3dprinting.com\r\n";
						$headers .= "Reply-To: " . $_POST['inputEmail'] . "\r\n";
						$headers .= "X-Mailer: PHP/".phpversion();
						$message = "Order form from: " . $_POST['inputEmail'] . "\r\nWith a file name: " . $path_of_uploaded_file . "\r\nWith maybe an extra note:\n" . $_POST['extraNotes'];
						$message = wordwrap($message, 70);
						mail($to, $subject, $message, $headers);
					}
				}
			}
		}
	}
}

if ($error) {
	header('Location: ' . $main_url . '/?order_error=' . $error . '#order');
} else {
	header('Location: ' . $main_url . '/?order_success=' . $_POST['inputEmail'] . '#order');
}