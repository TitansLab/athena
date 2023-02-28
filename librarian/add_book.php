<?php
session_start();
if ($_SESSION['role'] != "Texas") {
	header("Location: ../index.php");
} else {
	include_once("../config.php");
	$_SESSION["userrole"] = "Librarian";
}
$bqur = "SELECT * FROM book";
$bqurres = mysqli_query($conn, $bqur);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once("../head.php"); ?>
</head>

<body>
	<!-- NAVIGATION -->
	<?php
	$nav_role = "Student";
	include_once("nav.php"); ?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 col-xl-10">
					<!-- Header -->
					<div class="header mt-md-5">
						<div class="header-body">
							<div class="row align-items-center">
								<div class="col">
									<h5 class="header-pretitle">
										<a class="btn-link btn-outline" onclick="history.back()"><i class="fe uil-angle-double-left"></i>Back</a>
									</h5>
									<h6 class="header-pretitle">
										Add New
									</h6>
									<!-- Title -->
									<h1 class="header-title">
										Book
									</h1>
								</div>
							</div>
							<!-- / .row -->
						</div>
					</div>
					<!-- / .row -->
					<!-- Divider -->
					<!-- <hr class="my-5"> -->
					<form method="POST" autocomplete="off" enctype="multipart/form-data" class="row g-3 needs-validation">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="validationCustom01" class="form-label">Book name</label>
									<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="30" class="form-control" id="validationCustom01" name="bname" required>
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Incorrect Format or Field is Empty!
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom01" class="form-label">Author name #1</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="2" class="form-control" id="validationCustom01" name="aname1" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom02" class="form-label">Author name #2</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom02" name="anmae2" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom03" class="form-label">Author name #3</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom03" name="aname3" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
							</div>
							<br>
							<hr class="my-5">
							<div class="row">
								<div class="col-md-4">
									<label for="validationCustom01" class="form-label">Total Copies</label>
									<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="2" class="form-control" id="validationCustom01" name="tcopies" required>
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Incorrect Format or Field is Empty!
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom02" class="form-label">Publisher name</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom02" name="pname" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom03" class="form-label">Book Publisher</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom03" name="bpname" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<label for="validationCustom01" class="form-label">Category</label>
									<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="2" class="form-control" id="validationCustom01" name="cate" required>
									<div class="valid-feedback">
										Looks good!
									</div>
									<div class="invalid-feedback">
										Incorrect Format or Field is Empty!
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom02" class="form-label">Publisher name</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom02" name="mname" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>

								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="validationCustom03" class="form-label">Book Publisher</label>
										<input type="text" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))' maxlength="20" class="form-control" id="validationCustom03" name="lname" required>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Incorrect Format or Field is Empty!
										</div>
									</div>
								</div>
							</div>

							<!-- / Personal details-->
							<!-- Divider -->
							<hr class="mt-4 mb-5">
							<div class="d-flex justify">
								<!-- Button -->
								<button class="btn btn-primary" type="submit" value="sub" name="subbed">
									Add Student
								</button>
							</div>
							
							<!-- / .row -->
					</form>
					<br>
				</div>
			</div>
			<!-- / .row -->
		</div>
		<br><br><br>
	</div>
	<?php include_once("context.php"); ?>
	<!-- Map JS -->
	<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
	<!-- Vendor JS -->
	<script src="../assets/js/vendor.bundle.js"></script>
	<!-- Theme JS -->
	<script src="../assets/js/theme.bundle.js"></script>
	<script>
		function cp1() {
			/* Get the text field */
			var copyText = document.getElementById("demo");

			/* Select the text field */
			copyText.select();
			copyText.setSelectionRange(0, 99999); /* For mobile devices */

			/* Copy the text inside the text field */
			navigator.clipboard.writeText(copyText.value);

			/* Alert the copied text */
			alert("Copied the text: " + copyText.value);
		}

		function cp2() {
			/* Get the text field */
			var copyText = document.getElementById("myInput2");

			/* Select the text field */
			copyText.select();
			copyText.setSelectionRange(0, 99999); /* For mobile devices */

			/* Copy the text inside the text field */
			navigator.clipboard.writeText(copyText.value);

			/* Alert the copied text */
			alert("Copied the text: " + copyText.value);
		}
	</script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.prototype.slice.call(forms)
				.forEach(function(form) {
					form.addEventListener('submit', function(event) {
						if (!form.checkValidity()) {
							event.preventDefault()
							event.stopPropagation()
						}

						form.classList.add('was-validated')
					}, false)
				})
		})()
	</script>
	<script>
		function cp() {
			var x = document.getElementsByName("senr")[0].value;
			document.getElementById("demo").innerHTML = x;

			let s = x.toString();
			let str = s.toString().split('').reverse().join('');
			let rev = str.substr(0, 4);

			document.getElementById("myInput2").innerHTML = rev;

		}
	</script>
</body>

</html>
<?php
if (isset($_POST['subbed'])) {
	// $f_name = $_FILES['stuprofile']['name'];
	$f_tmp_name = $_FILES['stuprofile']['tmp_name'];
	$f_size = $_FILES['stuprofile']['size'];
	$f_error = $_FILES['stuprofile']['error'];
	// $f_type = $_FILES['stuprofile']['type'];
	// $f_ext = explode('.', $f_name);
	// $f_ext = strtolower(end($f_ext));

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$scontact = $_POST['scontact'];
	$semail = $_POST['semail'];
	$dob = $_POST['dob'];
	$pcontact = $_POST['pcontact'];
	$pmail = $_POST['pmail'];
	$ssem = $_POST['ssem'];
	$senr = $_POST['senr'];
	$sroll = $_POST['sroll'];
	$sbranch = $_POST['sbranch'];
	$spassword = $_POST['spassword'];

	$spass = password_hash($spassword, PASSWORD_BCRYPT); //hashing the $spassword 
	// $slid = $_POST['slid'];
	$add = $_POST['add'];
	$dob = $_POST['dob'];
	$ec = $_POST['ec'];

	$fs_name = $senr . ".png";

	if ($f_error === 0) {
		if ($f_size <= 2000000) {
			move_uploaded_file($f_tmp_name, "../src/uploads/stuprofile/" . $fs_name); // Moving Uploaded File to Server ... to uploades folder by file name f_name ... 
		} else {
			echo "<script>alert(File size is to big .. !);</script>";
		}
	} else {
		echo "Something went wrong .. !";
	}
	$sql = "INSERT INTO studentmaster (StudentUserName, StudentDOB, StudentEnrollmentNo, StudentPassword, StudentFirstName, StudentMiddleName, StudentLastName, StudentProfilePic, StudentBranchCode, StudentSemester, StudentEmail, StudentContactNo, StudentAddress, ParentEmail, ParentContactNo, StudentRollNo) 
		VALUES ('$ec','$dob','$senr','$spassword','$fname','$mname','$lname','$fs_name','$sbranch','$ssem','$semail','$scontact','$add','$pmail','$pcontact','$sroll');";
	try {
		$run = mysqli_query($conn, $sql);
		if ($run == true) {
			echo "<script>alert('Student Added Successfully')</script>";
			echo "<script>window.open('student_list.php','_self')</script>";
		} else {
			echo "<script>alert('Student Not Added')</script>";
			echo "<script>window.open('add_student.php','_self')</script>";
		}
	} catch (Exception $e) {
		echo "<script>alert('Student Not Added')</script>";
		echo "<script>window.open('add_student.php','_self')</script>";
	}
}
?>