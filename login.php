<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("head.php"); ?>
  <?php include_once("config.php"); ?>
</head>

<body class="d-flex align-items-center min-h-100">

  <script src="assets/js/hs.theme-appearance.js"></script>

  <!-- ========== HEADER ========== -->
  <header class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
    <div class="d-flex d-lg-none justify-content-between">
      <a href="index.html">
        <img class="w-100" src="assets/svg/logos/logo.png" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
        <img class="w-100" src="assets/svg/logos-light/logo.png" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
      </a>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main pt-0">
    <!-- Content -->
    <div class="container-fluid px-3">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
          <!-- Logo & Language -->
          <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
            <div class="d-none d-lg-flex justify-content-between">
              <a href="index.html">
                <img class="w-100" src="assets/svg/logos/logo.png" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
                <img class="w-100" src="assets/svg/logos/logo.png" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
              </a>
            </div>
          </div>
          <!-- End Logo & Language -->

          <div style="max-width: 23rem;">
            <div class="text-center mb-5">
              <img class="img-fluid" src="assets/svg/illustrations/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
              <img class="img-fluid" src="assets/svg/illustrations-light/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
            </div>

            <div class="mb-5">
              <h2 class="display-5">Library Management System:</h2>
            </div>

            <!-- List Checked -->
            <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">All-in-one tool</span>
                Simple and easy to operate
              </li>

              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">Easily add &amp; manage your Library</span>
                Mobile access, anytime, anywhere.
                Search, add, update, and view library materials online
              </li>
            </ul>
            <!-- End List Checked -->

          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->   
              <div class="text-center">
                <div class="mb-5">
                  <h1 class="display-4">Sign in</h1>
                </div>
              </div>

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
										<img id="imgcard3" src="assets/img/160x160/lib.png" class="card-img rounded mx-auto d-block avatar avatar-xl">
										<div class="card-body">
											<h5 class="card-title">Librarian </h3>
										</div>
									</button>
								</div>
								<div class="mx-2">
									<button type="submit" class="card border shadow bg-body rounded text-secondary" value="Student" name="SelectedLoginType">
										<img id="imgcard3" src="assets/img/160x160/stu.png" class="card-img rounded mx-auto d-block avatar avatar-xl">
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
            <div class="mb-4">
                <label class="form-label" for="signinSrEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required>
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
                <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
              </div>
            </form>
					<?php } ?>
				</div>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function() {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
      }
    })()
  </script>
</body>

</html>