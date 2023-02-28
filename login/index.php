<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon" />
	<!-- Map CSS -->
	<!--	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />-->
	<!-- Libs CSS -->
	<link rel="stylesheet" href="../assets/css/libs.bundle.css" />
	<!-- Theme CSS -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="../assets/css/theme-dark.bundle.css" />
	<!-- Title -->
	<title>LMS by Titanslab</title>
	<?php
	error_reporting(E_ALL ^ E_ALL);
	if (isset($_POST['login'])) { ?>
		<style>
			input:invalid {
				border-color: red;
			}
		</style>

	<?php } ?>
	<script>
		function display() {
			var type = document.getElementById("loginType");
			if (type.classList.contains("d-none")) {
				type.classList.remove("d-none");
			} else {
				type.classList.add("d-none");
			}
			var form = document.getElementById("loginForm");
			if (form.classList.contains("d-none")) {
				form.classList.remove("d-none");
			} else {
				form.classList.add("d-none");
			}
		}

		function password_show_hide() {
			const x = document.getElementById("password");
			var show_eye = document.getElementById("show_eye");
			var hide_eye = document.getElementById("hide_eye");
			hide_eye.classList.remove("d-none");
			if (x.type === "password") {
				x.type = "text";
				show_eye.style.display = "none";
				hide_eye.style.display = "block";
			} else {
				x.type = "password";
				show_eye.style.display = "block";
				hide_eye.style.display = "none";
			}
		}
	</script>
</head>
<?php
include_once("../config.php");
if (isset($_POST['login'])) {
	$na = $_POST['name'];
	$pass = $_POST['password'];
	$na2 = $_POST['SelectedType'];
	$hp = mysqli_real_escape_string($conn, trim($pass));
		if ($na2 =="Li") {
		$sql = "SELECT * FROM librarian_master WHERE username = '$na'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row['username'] == $na and $row['password'] === $pass) {
			session_start();
			$u = $row['admin_id'];
			echo $u;
			$_SESSION['id'] = $u;
			$_SESSION['name'] = $row['username'];
			$_SESSION['role'] = "Texas";
			echo "<script>window.location.href='../librarian/';</script>";
		} else {
			$_POST['SelectedLoginType'] = "Librarian";
			echo $html;
		}
	} else if ($na2 == "ST") {
		$sql = "SELECT * FROM studentmaster WHERE StudentUserName = '$u'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if ($row['StudentUserName'] == $u and $row['StudentPassword'] === $hp) {
			session_start();
			$_SESSION['id'] = $u;
			$_SESSION['name'] = $row['StudentId'];
			$_SESSION['role'] = "Law";
			echo "<script>window.location.href='../student_dashboard/';</script>";
		} else {
			$_POST['SelectedLoginType'] = "STUDENT";
			echo $html;
		}
	}	
}
?>

<body class="border-top border-top-2 border-primary bg-auth" style="overflow-x: hidden;">
	<div class="d-flex align-items-center my-auto" style="height: 100vh;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">
					<div class="text-center">
						<img src="../assets/img/illustrations/login.png" alt="..." class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-md-5 col-xl-4 my-5">
					<h1 class="display-3 text-center mb-3">
						Sign in
					</h1>
					<p class="text-muted text-center mb-5">
						access to
						<span <?php
								if (isset($_POST['SelectedLoginType'])) { ?> class="font-weight-bold text-secondary">
							<?php echo $_POST['SelectedLoginType']; ?></span>
					<?php } else { ?>
						<span>your</span>
					<?php } ?> dashboard.
					</p>
					<?php if (!isset($_POST['SelectedLoginType'])) { ?>
						<form method="POST">
							<div id="loginType" class="d-flex justify-content-center">
								<div class="mx-2">
									<button type="submit" class="card border shadow bg-body rounded text-secondary" value="Librarian" name="SelectedLoginType">
										<img id="imgcard3" src="../assets/img/avatars/lib.png" class="card-img rounded mx-auto d-block avatar avatar-xl">
										<div class="card-body">
											<h5 class="card-title">Librarian </h3>
										</div>
									</button>
								</div>
								<div class="mx-2">
									<button type="submit" class="card border shadow bg-body rounded text-secondary" value="Student" name="SelectedLoginType">
										<img id="imgcard3" src="../assets/img/avatars/stu.png" class="card-img rounded mx-auto d-block avatar avatar-xl">
										<div class="card-body">
											<h5 class="card-title">Student</h3>
										</div>
									</button>
								</div>
							</div>
						</form>
					<?php
					} else {
					?>
						<!-- Form -->
						<form method="POST">
							<div class="mb-4">
								<label class="form-label" for="signinSrEmail">username</label>
								<input type="hidden" name="SelectedType" value="<?php echo substr($_POST['SelectedLoginType'], 0, 2); ?>">
								<input type="name" class="form-control form-control-lg" name="name" id="signinSrEmail" tabindex="1" required>
								<span class="invalid-feedback">Please enter a valid email address.</span>
							</div>
							<!-- End Form -->

							<!-- Form -->
							<div class="mb-4">
								<label class="form-label w-100" for="signupSrPassword" tabindex="0">
									<span class="d-flex justify-content-between align-items-center">
										<span>Password</span>
										<a class="form-label-link mb-0" href="./authentication-reset-password-cover.html">Forgot Password?</a>
									</span>
								</label>

								<div class="input-group input-group-merge" data-hs-validation-validate-class>
									<input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": "#changePassTarget",
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": "#changePassIcon"
                         }'>
									<a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
										<i id="changePassIcon" class="bi-eye"></i>
									</a>
								</div>

								<span class="invalid-feedback">Please enter a valid password.</span>
							</div>
							<!-- End Form -->

							<div class="d-grid">
								<button type="submit" name="login" value="Login" class="btn btn-primary btn-lg">Sign in</button>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>

		<script src="../assets/js/vendor.bundle.js"></script>
		<script src="../assets/js/theme.bundle.js"></script>
	</div>
</body>

</html>
<?php
include_once 'context.php';
?>