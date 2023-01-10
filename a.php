<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <?php include_once("head.php"); ?>
</head>

<body>

  <script src="assets/js/hs.theme-appearance.js"></script>

  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
    <div class="navbar-dark w-100 bg-dark py-2">
      <div class="container">
        <div class="navbar-nav-wrap">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html" aria-label="Front">
            <img class="navbar-brand-logo" src="assets/svg/logos/logo.png" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Content Start -->
          <div class="navbar-nav-wrap-content-start">
            <!-- Search Form -->
            <div class="d-none d-lg-block">
              <div class="dropdown ms-2">
                <!-- Input Group -->
                <div class="d-none d-lg-block">
                  <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                    </a>
                  </div>
                </div>

                <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                           "clearIcon": "#clearSearchResultsIcon",
                           "dropMenuElement": "#searchDropdownMenu",
                           "dropMenuOffset": 20,
                           "toggleIconOnFocus": true,
                           "activeClass": "focus"
                         }'>
                  <i class="bi-search"></i>
                </button>
                <!-- End Input Group -->

                <!-- Card Search Content -->
                <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                  <div class="card">
                    <!-- Body -->
                    <div class="card-body-height">
                      <div class="d-lg-none">
                        <div class="input-group input-group-merge navbar-input-group mb-5">
                          <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                          </div>

                          <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                          <a class="input-group-append input-group-text" href="javascript:;">
                            <i class="bi-x-lg"></i>
                          </a>
                        </div>
                      </div>

                      <span class="dropdown-header">Recent searches</span>

                      <div class="dropdown-item bg-transparent text-wrap">
                        <a class="btn btn-soft-dark btn-xs rounded-pill" href="index.html">
                          Gulp <i class="bi-search ms-1"></i>
                        </a>
                        <a class="btn btn-soft-dark btn-xs rounded-pill" href="index.html">
                          Notification panel <i class="bi-search ms-1"></i>
                        </a>
                      </div>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Tutorials</span>

                      <a class="dropdown-item" href="index.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <span class="icon icon-soft-dark icon-xs icon-circle">
                              <i class="bi-sliders"></i>
                            </span>
                          </div>

                          <div class="flex-grow-1 text-truncate ms-2">
                            <span>How to set up Gulp?</span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="index.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <span class="icon icon-soft-dark icon-xs icon-circle">
                              <i class="bi-paint-bucket"></i>
                            </span>
                          </div>

                          <div class="flex-grow-1 text-truncate ms-2">
                            <span>How to change theme color?</span>
                          </div>
                        </div>
                      </a>

                      <div class="dropdown-divider"></div>

                      <span class="dropdown-header">Members</span>

                      <a class="dropdown-item" href="index.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-2">
                            <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="index.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg" alt="Image Description">
                          </div>
                          <div class="flex-grow-1 text-truncate ms-2">
                            <span>David Harrison</span>
                          </div>
                        </div>
                      </a>

                      <a class="dropdown-item" href="index.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                              <span class="avatar-initials">A</span>
                            </div>
                          </div>
                          <div class="flex-grow-1 text-truncate ms-2">
                            <span>Anne Richard</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <a class="card-footer text-center" href="index.html">
                      See all results <i class="bi-chevron-right small"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Card Search Content -->

              </div>

            </div>
            <!-- End Search Form -->
          </div>
          <!-- End Content Start -->

          <!-- Content End -->
          <div class="navbar-nav-wrap-content-end">
            <!-- Navbar -->
            <ul class="navbar-nav">
              <li class="nav-item d-none d-md-inline-block">
                <!-- Notification -->
                <div class="dropdown">
                  <button type="button" class="btn btn-ghost-light btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                    <i class="bi-bell"></i>
                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                    <div class="card">
                      <!-- Header -->
                      <div class="card-header card-header-content-between">
                        <h4 class="card-title mb-0">Notifications</h4>

                        <!-- Unfold -->
                        <div class="dropdown">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                          </button>

                          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                            <span class="dropdown-header">Settings</span>
                            <a class="dropdown-item" href="#">
                              <i class="bi-archive dropdown-item-icon"></i> Archive all
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                            </a>
                            <a class="dropdown-item" href="#">
                              <i class="bi-gift dropdown-item-icon"></i> What's new?
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Feedback</span>
                            <a class="dropdown-item" href="#">
                              <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                      </div>
                      <!-- End Header -->

                      <!-- Nav -->
                      <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                        </li>
                      </ul>
                      <!-- End Nav -->

                      <!-- Body -->
                      <div class="card-body-height">
                        <!-- Tab Content -->
                        <div class="tab-content" id="notificationTabContent">
                          <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                            <!-- List Group -->
                            <ul class="list-group list-group-flush navbar-card-list-group">
                              <!-- Item -->
                              <li class="list-group-item form-check-select">
                                <div class="row">
                                  <div class="col-auto">
                                    <div class="d-flex align-items-center">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                        <label class="form-check-label" for="notificationCheck1"></label>
                                        <span class="form-check-stretched-bg"></span>
                                      </div>
                                      <img class="avatar avatar-sm avatar-circle" src="assets/img/160x160/viral.jpg" alt="Image Description">
                                    </div>
                                  </div>
                                  <!-- End Col -->

                                  <div class="col ms-n2">
                                    <h5 class="mb-1">Viral Patel</h5>
                                    <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                                  </div>
                                  <!-- End Col -->

                                  <small class="col-auto text-muted text-cap">2hr</small>
                                  <!-- End Col -->
                                </div>
                                <!-- End Row -->

                                <a class="stretched-link" href="#"></a>
                              </li>
                              <!-- End Item -->
                            </ul>
                            <!-- End List Group -->
                          </div>
                        </div>
                        <!-- End Tab Content -->
                      </div>
                      <!-- End Body -->

                      <!-- Card Footer -->
                      <a class="card-footer text-center" href="#">
                        View all notifications <i class="bi-chevron-right"></i>
                      </a>
                      <!-- End Card Footer -->
                    </div>
                  </div>
                </div>
                <!-- End Notification -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Apps -->
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-ghost-light rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <i class="bi-app-indicator"></i>
                  </button>

                  <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                    <div class="card">
                      <!-- Header -->
                      <div class="card-header">
                        <h4 class="card-title">Web apps &amp; services</h4>
                      </div>
                      <!-- End Header -->

                      <!-- Body -->
                      <div class="card-body card-body-height">
                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">Atlassian</h5>
                              <p class="card-text text-body">Security and control across Cloud</p>
                            </div>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/slack-icon.svg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                              <p class="card-text text-body">Email collaboration software</p>
                            </div>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">Google webdev</h5>
                              <p class="card-text text-body">Work involved in developing a website</p>
                            </div>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="avatar avatar-xs avatar-4x3" src="assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">Frontapp</h5>
                              <p class="card-text text-body">The inbox for teams</p>
                            </div>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <img class="avatar avatar-xs avatar-4x3" src="assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">HS Support</h5>
                              <p class="card-text text-body">Customer service and support</p>
                            </div>
                          </div>
                        </a>

                        <a class="dropdown-item" href="#">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                              <div class="avatar avatar-sm avatar-soft-dark">
                                <span class="avatar-initials"><i class="bi-grid"></i></span>
                              </div>
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                              <h5 class="mb-0">More Front products</h5>
                              <p class="card-text text-body">Check out more HS products</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Body -->

                      <!-- Footer -->
                      <a class="card-footer text-center" href="#">
                        View all apps <i class="bi-chevron-right"></i>
                      </a>
                      <!-- End Footer -->
                    </div>
                  </div>
                </div>
                <!-- End Apps -->
              </li>

              <li class="nav-item d-none d-sm-inline-block">
                <!-- Activity -->
                <button class="btn btn-ghost-light btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
                  <i class="bi-x-diamond"></i>
                </button>
                <!-- Activity -->
              </li>

              <li class="nav-item">
                <!-- Style Switcher -->
                <div class="dropdown ">
                  <button type="button" class="btn btn-ghost-light btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                  </button>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                    <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                      <i class="bi-moon-stars me-2"></i>
                      <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                    </a>
                    <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                      <i class="bi-brightness-high me-2"></i>
                      <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                    </a>
                    <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                      <i class="bi-moon me-2"></i>
                      <span class="text-truncate" title="Dark">Dark</span>
                    </a>
                  </div>
                </div>

                <!-- End Style Switcher -->
              </li>

              <li class="nav-item">
                <!-- Account -->
                <div class="dropdown">
                  <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="assets/img/160x160/img11.jpg" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="assets/img/160x160/img11.jpg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="mb-0">Anjan Patel</h5>
                          <p class="card-text text-body">Titanslab.in</p>
                        </div>
                      </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set
                        status</a>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-success me-1"></span> Available
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-danger me-1"></span> Busy
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-warning me-1"></span> Away
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Reset status
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->

                    <a class="dropdown-item" href="#">Profile &amp; account</a>
                    <a class="dropdown-item" href="#">Settings</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm avatar-dark avatar-circle">
                            <span class="avatar-initials">HS</span>
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                          <span class="card-text">hs.example.com</span>
                        </div>
                      </div>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                        <a class="dropdown-item" href="#">
                          Invite people
                        </a>
                        <a class="dropdown-item" href="#">
                          Analytics
                          <i class="bi-box-arrow-in-up-right"></i>
                        </a>
                        <a class="dropdown-item" href="#">
                          Customize Front
                          <i class="bi-box-arrow-in-up-right"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Dropdown -->

                    <a class="dropdown-item" href="#">Manage team</a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">Sign out</a>
                  </div>
                </div>
                <!-- End Account -->
              </li>

              <li class="nav-item">
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDoubleLineContainerNavDropdown" aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                  </span>
                  <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                  </span>
                </button>
                <!-- End Toggler -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div>
          <!-- End Content End -->
        </div>
      </div>
    </div>

    <div class="container">
      <nav class="js-mega-menu flex-grow-1">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
          <ul class="navbar-nav">
            <!-- Dashboards -->
            <li class="hs-has-sub-menu nav-item">
              <a id="dashboardsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#" role="button"><i class="bi-house-door dropdown-item-icon"></i> Dashboards</a>

              <!-- Mega Menu -->
              <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="dashboardsMegaMenu" style="min-width: 14rem;">
                <a class="dropdown-item active" href="index.html">Default</a>
                <a class="dropdown-item " href="dashboard-alternative.html">Alternative</a>
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Dashboards -->

            <!-- Pages -->
            <li class="hs-has-sub-menu nav-item">
              <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-files-alt dropdown-item-icon"></i> Pages</a>

              <!-- Mega Menu -->
              <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                <!-- Users -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="usersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Users</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="usersMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="users.html">Overview</a>
                    <a class="dropdown-item " href="users-leaderboard.html">Leaderboard</a>
                    <a class="dropdown-item " href="users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                  </div>
                </div>
                <!-- End Users -->

                <!-- User Profile -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="userProfileMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="userProfileMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="user-profile.html">Profile</a>
                    <a class="dropdown-item " href="user-profile-teams.html">Teams</a>
                    <a class="dropdown-item " href="user-profile-projects.html">Projects</a>
                    <a class="dropdown-item " href="user-profile-connections.html">Connections</a>
                    <a class="dropdown-item " href="user-profile-my-profile.html">My Profile</a>
                  </div>
                </div>
                <!-- End User Profile -->

                <!-- Account -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="accountMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Account</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="account-settings.html">Settings</a>
                    <a class="dropdown-item " href="account-billing.html">Billing</a>
                    <a class="dropdown-item " href="account-invoice.html">Invoice</a>
                  </div>
                </div>
                <!-- End Account -->

                <!-- E-commerce -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="ecommerceMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">E-commerce</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ecommerceMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="ecommerce.html">Overview</a>

                    <!-- Products -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="productsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Products</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="productsMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="ecommerce-products.html">Products</a>
                        <a class="dropdown-item " href="ecommerce-product-details.html">Product Details</a>
                        <a class="dropdown-item " href="ecommerce-add-product.html">Add Product</a>
                      </div>
                    </div>
                    <!-- End Products -->

                    <!-- Products -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="ordersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Orders</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="ordersMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="ecommerce-orders.html">Orders</a>
                        <a class="dropdown-item " href="ecommerce-order-details.html">Order Details</a>
                      </div>
                    </div>
                    <!-- End Products -->

                    <!-- Customers -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="customersMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Customers</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="customersMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="ecommerce-customers.html">Customers</a>
                        <a class="dropdown-item " href="ecommerce-customer-details.html">Customer Details</a>
                        <a class="dropdown-item " href="ecommerce-add-customers.html">Add Customers</a>
                      </div>
                    </div>
                    <!-- End Customers -->

                    <a class="dropdown-item " href="ecommerce-referrals.html">Referrals</a>
                    <a class="dropdown-item " href="ecommerce-manage-reviews.html">Manage Reviews</a>
                    <a class="dropdown-item " href="ecommerce-checkout.html">Checkout</a>
                  </div>
                </div>
                <!-- End E-commerce -->

                <!-- Projects -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="projectsMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Projects</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectsMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="projects.html">Overview</a>
                    <a class="dropdown-item " href="projects-timeline.html">Timeline</a>
                  </div>
                </div>
                <!-- End Projects -->

                <!-- Project -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="projectMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Project</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="projectMegaMenu" style="min-width: 14rem;">
                    <a class="dropdown-item " href="project.html">Overview</a>
                    <a class="dropdown-item " href="project-files.html">Files</a>
                    <a class="dropdown-item " href="project-activity.html">Activity</a>
                    <a class="dropdown-item " href="project-teams.html">Teams</a>
                    <a class="dropdown-item " href="project-settings.html">Settings</a>
                  </div>
                </div>
                <!-- End Project -->

                <!-- Authentication -->
                <div class="hs-has-sub-menu nav-item">
                  <a id="authenticationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Authentication</a>

                  <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="authenticationMegaMenu" style="min-width: 14rem;">
                    <!-- Log In -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="loginMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Log In</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="loginMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="authentication-login-basic.html">Basic</a>
                        <a class="dropdown-item " href="authentication-login-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Log In -->

                    <!-- Sign Up -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="signupMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Sign Up</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="signupMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="authentication-signup-basic.html">Basic</a>
                        <a class="dropdown-item " href="authentication-signup-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Sign Up -->

                    <!-- Reset Password -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="resetPasswordMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Reset Password</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="resetPasswordMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="authentication-reset-password-basic.html">Basic</a>
                        <a class="dropdown-item " href="authentication-reset-password-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Reset Password -->

                    <!-- Email Verification -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="emailVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">Email Verification</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="emailVerificationMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="authentication-email-verification-basic.html">Basic</a>
                        <a class="dropdown-item " href="authentication-email-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Email Verification -->

                    <!-- 2-step Verification -->
                    <div class="hs-has-sub-menu nav-item">
                      <a id="2stepVerificationMegaMenu" class="hs-mega-menu-invoker dropdown-item dropdown-toggle " href="#" role="button">2-step Verification</a>

                      <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="2stepVerificationMegaMenu" style="min-width: 14rem;">
                        <a class="dropdown-item " href="authentication-2-step-verification-basic.html">Basic</a>
                        <a class="dropdown-item " href="authentication-2-step-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End 2-step Verification -->

                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                    <a class="dropdown-item " href="error-404.html">Error 404</a>
                    <a class="dropdown-item " href="error-500.html">Error 500</a>
                  </div>
                </div>
                <!-- End Authentication -->

                <a class="dropdown-item " href="api-keys.html" data-placement="left">API Keys</a>
                <a class="dropdown-item " href="welcome-page.html" data-placement="left">Welcome Page</a>
                <a class="dropdown-item " href="landing.html" data-placement="left">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></a>
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Pages -->

            <!-- Apps -->
            <li class="hs-has-sub-menu nav-item">
              <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i class="bi-app-indicator dropdown-item-icon"></i> Apps</a>

              <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="appsMegaMenu" style="min-width: 14rem;">
                <a class="dropdown-item " href="apps-kanban.html">Kanban</a>
                <a class="dropdown-item " href="apps-calendar.html">Calendar</a>
                <a class="dropdown-item " href="apps-invoice-generator.html">Invoice Generator</a>
                <a class="dropdown-item " href="apps-file-manager.html">File Manager</a>
              </div>
            </li>
            <!-- End Apps -->

            <li class="nav-item">
              <a class="nav-link " href="layouts/index.html">
                <i class="bi-grid-1x2 dropdown-item-icon"></i> Layouts
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="documentation/index.html" data-placement="left">
                <i class="bi-book dropdown-item-icon"></i> Docs
              </a>
            </li>
          </ul>

        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container">
      <div class="row justify-content-lg-center pt-lg-5 pt-xl-10">
        <div class="col-lg-9">
          <!-- Title -->
          <div class="text-center">
            <img class="img-fluid mb-5" src="assets/svg/layouts/header-double-line-container.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
            <img class="img-fluid shadow-sm mb-5" src="assets/svg/layouts-light/header-double-line-container.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

            <h1>Double line (Container)</h1>
            <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
            <a class="btn btn-primary" href="layouts/index.html">Go back to Layouts</a>
          </div>
          <!-- End Title -->
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i>
                  Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
        desktop: {
          position: 'left'
        }
      })


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      new HSFormSearch('.js-form-search')
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
    (function() {
      // STYLE SWITCHER
      // =======================================================
      const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
      const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

      // Function to set active style in the dorpdown menu and set icon for dropdown trigger
      const setActiveStyle = function() {
        $variants.forEach($item => {
          if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
            $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
            return $item.classList.add('active')
          }

          $item.classList.remove('active')
        })
      }

      // Add a click event to all items of the dropdown to set the style
      $variants.forEach(function($item) {
        $item.addEventListener('click', function() {
          HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
        })
      })

      // Call the setActiveStyle on load page
      setActiveStyle()

      // Add event listener on change style to call the setActiveStyle function
      window.addEventListener('on-hs-appearance-change', function() {
        setActiveStyle()
      })
    })()
  </script>

  <!-- End Style Switcher JS -->
</body>


</html>