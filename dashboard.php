<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
  <title>Vault - Dashboard</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Vault - Dashboard" />
  <meta property="og:url" content="https://keenthemes.com/metronic" />
  <meta property="og:site_name" content="Metronic by Keenthemes" />
  <link rel="canonical" href="http://index.html" />
  <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
  <!--begin::Fonts(mandatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Vendor Stylesheets(used for this page only)-->
  <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Vendor Stylesheets-->
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
  <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
  </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode =
          document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
          "dark" :
          "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->
  <!--begin::App-->
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <!--begin::Header-->
      <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
          <!--begin::Header wrapper-->
          <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
              <!--begin::Menu-->
              <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                    <!--begin:Dashboards menu-->
                    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                      <!--begin:Row-->
                      <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="index.html" class="menu-link active">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-element-11 text-primary fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/ecommerce.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-basket text-danger fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/projects.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-44 text-info fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/online-courses.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-color-swatch text-success fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/marketing.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-chart-simple text-gray-900 fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/bidding.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-switch text-warning fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/pos.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-42 text-danger fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-6 mb-3">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="dashboards/call-center.html" class="menu-link">
                                  <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-call text-primary fs-1"></i>
                                  </span>
                                  <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                  </span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                          <div class="separator separator-dashed mx-5 my-5"></div>
                          <!--begin:Landing-->
                          <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                            <div class="d-flex flex-column me-5">
                              <div class="fs-6 fw-bold text-gray-800">
                                Landing Page Template
                              </div>
                              <div class="fs-7 fw-semibold text-muted">
                                Onpe page landing template with pricing &
                                others
                              </div>
                            </div>
                            <a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                          </div>
                          <!--end:Landing-->
                        </div>
                        <!--end:Col-->
                        <!--begin:Col-->
                        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                          <!--begin:Heading-->
                          <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                            More Dashboards
                          </h4>
                          <!--end:Heading-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/logistics.html" class="menu-link py-2">
                              <span class="menu-title">Logistics</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/website-analytics.html" class="menu-link py-2">
                              <span class="menu-title">Website Analytics</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/finance-performance.html" class="menu-link py-2">
                              <span class="menu-title">Finance Performance</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/store-analytics.html" class="menu-link py-2">
                              <span class="menu-title">Store Analytics</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/social.html" class="menu-link py-2">
                              <span class="menu-title">Social</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/delivery.html" class="menu-link py-2">
                              <span class="menu-title">Delivery</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/crypto.html" class="menu-link py-2">
                              <span class="menu-title">Crypto</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/school.html" class="menu-link py-2">
                              <span class="menu-title">School</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                          <!--begin:Menu item-->
                          <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="dashboards/podcast.html" class="menu-link py-2">
                              <span class="menu-title">Podcast</span>
                            </a>
                            <!--end:Menu link-->
                          </div>
                          <!--end:Menu item-->
                        </div>
                        <!--end:Col-->
                      </div>
                      <!--end:Row-->
                    </div>
                    <!--end:Dashboards menu-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-title">Pages</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                    <!--begin:Pages menu-->
                    <div class="menu-active-bg px-4 px-lg-0">
                      <!--begin:Tabs nav-->
                      <div class="d-flex w-100 overflow-auto">
                        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                          <!--begin:Nav item-->
                          <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                          </li>
                          <!--end:Nav item-->
                          <!--begin:Nav item-->
                          <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                          </li>
                          <!--end:Nav item-->
                          <!--begin:Nav item-->
                          <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                          </li>
                          <!--end:Nav item-->
                          <!--begin:Nav item-->
                          <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                          </li>
                          <!--end:Nav item-->
                          <!--begin:Nav item-->
                          <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                          </li>
                          <!--end:Nav item-->
                        </ul>
                      </div>
                      <!--end:Tabs nav-->
                      <!--begin:Tab content-->
                      <div class="tab-content py-4 py-lg-8 px-lg-7">
                        <!--begin:Tab pane-->
                        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-8">
                              <!--begin:Row-->
                              <div class="row">
                                <!--begin:Col-->
                                <div class="col-lg-3 mb-6 mb-lg-0">
                                  <!--begin:Menu heading-->
                                  <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                    User Profile
                                  </h4>
                                  <!--end:Menu heading-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/overview.html" class="menu-link">
                                      <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/projects.html" class="menu-link">
                                      <span class="menu-title">Projects</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/campaigns.html" class="menu-link">
                                      <span class="menu-title">Campaigns</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/documents.html" class="menu-link">
                                      <span class="menu-title">Documents</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/followers.html" class="menu-link">
                                      <span class="menu-title">Followers</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="pages/user-profile/activity.html" class="menu-link">
                                      <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-3 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-6">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Corporate
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/about.html" class="menu-link">
                                        <span class="menu-title">About</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/team.html" class="menu-link">
                                        <span class="menu-title">Our Team</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/contact.html" class="menu-link">
                                        <span class="menu-title">Contact Us</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/licenses.html" class="menu-link">
                                        <span class="menu-title">Licenses</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/sitemap.html" class="menu-link">
                                        <span class="menu-title">Sitemap</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Careers
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/careers/list.html" class="menu-link">
                                        <span class="menu-title">Careers List</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/careers/apply.html" class="menu-link">
                                        <span class="menu-title">Careers Apply</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-3 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-6">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      FAQ
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/faq/classic.html" class="menu-link">
                                        <span class="menu-title">FAQ Classic</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/faq/extended.html" class="menu-link">
                                        <span class="menu-title">FAQ Extended</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                  <!--begin:Menu section-->
                                  <div class="mb-6">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Blog
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/blog/home.html" class="menu-link">
                                        <span class="menu-title">Blog Home</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/blog/post.html" class="menu-link">
                                        <span class="menu-title">Blog Post</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Pricing
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/pricing.html" class="menu-link">
                                        <span class="menu-title">Column Pricing</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/pricing/table.html" class="menu-link">
                                        <span class="menu-title">Table Pricing</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-3 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Social
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/social/feeds.html" class="menu-link">
                                        <span class="menu-title">Feeds</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/social/activity.html" class="menu-link">
                                        <span class="menu-title">Activty</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/social/followers.html" class="menu-link">
                                        <span class="menu-title">Followers</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="pages/social/settings.html" class="menu-link">
                                        <span class="menu-title">Settings</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                              </div>
                              <!--end:Row-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-4">
                              <img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                        <!--end:Tab pane-->
                        <!--begin:Tab pane-->
                        <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-5 mb-6 mb-lg-0">
                              <!--begin:Row-->
                              <div class="row">
                                <!--begin:Col-->
                                <div class="col-lg-6">
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/overview.html" class="menu-link">
                                      <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/settings.html" class="menu-link">
                                      <span class="menu-title">Settings</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/security.html" class="menu-link">
                                      <span class="menu-title">Security</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/activity.html" class="menu-link">
                                      <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/billing.html" class="menu-link">
                                      <span class="menu-title">Billing</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-6">
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/statements.html" class="menu-link">
                                      <span class="menu-title">Statements</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/referrals.html" class="menu-link">
                                      <span class="menu-title">Referrals</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/api-keys.html" class="menu-link">
                                      <span class="menu-title">API Keys</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                  <!--begin:Menu item-->
                                  <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="account/logs.html" class="menu-link">
                                      <span class="menu-title">Logs</span>
                                    </a>
                                    <!--end:Menu link-->
                                  </div>
                                  <!--end:Menu item-->
                                </div>
                                <!--end:Col-->
                              </div>
                              <!--end:Row-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-7">
                              <img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt="" />
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                        <!--end:Tab pane-->
                        <!--begin:Tab pane-->
                        <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-3 mb-6 mb-lg-0">
                              <!--begin:Menu section-->
                              <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  Corporate Layout
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/corporate/sign-in.html" class="menu-link">
                                    <span class="menu-title">Sign-In</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/corporate/sign-up.html" class="menu-link">
                                    <span class="menu-title">Sign-Up</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/corporate/two-factor.html" class="menu-link">
                                    <span class="menu-title">Two-Factor</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/corporate/reset-password.html" class="menu-link">
                                    <span class="menu-title">Reset Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/corporate/new-password.html" class="menu-link">
                                    <span class="menu-title">New Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                              <!--begin:Menu section-->
                              <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  Overlay Layout
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/overlay/sign-in.html" class="menu-link">
                                    <span class="menu-title">Sign-In</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/overlay/sign-up.html" class="menu-link">
                                    <span class="menu-title">Sign-Up</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/overlay/two-factor.html" class="menu-link">
                                    <span class="menu-title">Two-Factor</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/overlay/reset-password.html" class="menu-link">
                                    <span class="menu-title">Reset Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/overlay/new-password.html" class="menu-link">
                                    <span class="menu-title">New Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-3 mb-6 mb-lg-0">
                              <!--begin:Menu section-->
                              <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  Creative Layout
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/creative/sign-in.html" class="menu-link">
                                    <span class="menu-title">Sign-in</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/creative/sign-up.html" class="menu-link">
                                    <span class="menu-title">Sign-up</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/creative/two-factor.html" class="menu-link">
                                    <span class="menu-title">Two-Factor</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/creative/reset-password.html" class="menu-link">
                                    <span class="menu-title">Reset Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/creative/new-password.html" class="menu-link">
                                    <span class="menu-title">New Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                              <!--begin:Menu section-->
                              <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  Fancy Layout
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/fancy/sign-in.html" class="menu-link">
                                    <span class="menu-title">Sign-In</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/fancy/sign-up.html" class="menu-link">
                                    <span class="menu-title">Sign-Up</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/fancy/two-factor.html" class="menu-link">
                                    <span class="menu-title">Two-Factor</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/fancy/reset-password.html" class="menu-link">
                                    <span class="menu-title">Reset Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/layouts/fancy/new-password.html" class="menu-link">
                                    <span class="menu-title">New Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-3 mb-6 mb-lg-0">
                              <!--begin:Menu section-->
                              <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  General
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/extended/multi-steps-sign-up.html" class="menu-link">
                                    <span class="menu-title">Multi-Steps Sign-Up</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/welcome.html" class="menu-link">
                                    <span class="menu-title">Welcome Message</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/verify-email.html" class="menu-link">
                                    <span class="menu-title">Verify Email</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/coming-soon.html" class="menu-link">
                                    <span class="menu-title">Coming Soon</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/password-confirmation.html" class="menu-link">
                                    <span class="menu-title">Password Confirmation</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/account-deactivated.html" class="menu-link">
                                    <span class="menu-title">Account Deactivation</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/error-404.html" class="menu-link">
                                    <span class="menu-title">Error 404</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/general/error-500.html" class="menu-link">
                                    <span class="menu-title">Error 500</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-3 mb-6 mb-lg-0">
                              <!--begin:Menu section-->
                              <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                  Email Templates
                                </h4>
                                <!--end:Menu heading-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/welcome-message.html" class="menu-link">
                                    <span class="menu-title">Welcome Message</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/reset-password.html" class="menu-link">
                                    <span class="menu-title">Reset Password</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/subscription-confirmed.html" class="menu-link">
                                    <span class="menu-title">Subscription Confirmed</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/card-declined.html" class="menu-link">
                                    <span class="menu-title">Credit Card Declined</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/promo-1.html" class="menu-link">
                                    <span class="menu-title">Promo 1</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/promo-2.html" class="menu-link">
                                    <span class="menu-title">Promo 2</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                  <!--begin:Menu link-->
                                  <a href="authentication/email/promo-3.html" class="menu-link">
                                    <span class="menu-title">Promo 3</span>
                                  </a>
                                  <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                              </div>
                              <!--end:Menu section-->
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                        <!--end:Tab pane-->
                        <!--begin:Tab pane-->
                        <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-7">
                              <!--begin:Row-->
                              <div class="row">
                                <!--begin:Col-->
                                <div class="col-lg-4 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      General Modals
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/general/invite-friends.html" class="menu-link">
                                        <span class="menu-title">Invite Friends</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/general/view-users.html" class="menu-link">
                                        <span class="menu-title">View Users</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/general/select-users.html" class="menu-link">
                                        <span class="menu-title">Select Users</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/general/upgrade-plan.html" class="menu-link">
                                        <span class="menu-title">Upgrade Plan</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/general/share-earn.html" class="menu-link">
                                        <span class="menu-title">Share & Earn</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/forms/new-target.html" class="menu-link">
                                        <span class="menu-title">New Target</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/forms/new-card.html" class="menu-link">
                                        <span class="menu-title">New Card</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/forms/new-address.html" class="menu-link">
                                        <span class="menu-title">New Address</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/forms/create-api-key.html" class="menu-link">
                                        <span class="menu-title">Create API Key</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/forms/bidding.html" class="menu-link">
                                        <span class="menu-title">Bidding</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-4 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-6">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Advanced Modals
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/create-app.html" class="menu-link">
                                        <span class="menu-title">Create App</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/create-campaign.html" class="menu-link">
                                        <span class="menu-title">Create Campaign</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/create-account.html" class="menu-link">
                                        <span class="menu-title">Create Business Acc</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/create-project.html" class="menu-link">
                                        <span class="menu-title">Create Project</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                        <span class="menu-title">Top Up Wallet</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/offer-a-deal.html" class="menu-link">
                                        <span class="menu-title">Offer a Deal</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/two-factor-authentication.html" class="menu-link">
                                        <span class="menu-title">Two Factor Auth</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Search
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/search/horizontal.html" class="menu-link">
                                        <span class="menu-title">Horizontal</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/search/vertical.html" class="menu-link">
                                        <span class="menu-title">Vertical</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/search/users.html" class="menu-link">
                                        <span class="menu-title">Users</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/search/select-location.html" class="menu-link">
                                        <span class="menu-title">Select Location</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                                <!--begin:Col-->
                                <div class="col-lg-4 mb-6 mb-lg-0">
                                  <!--begin:Menu section-->
                                  <div class="mb-0">
                                    <!--begin:Menu heading-->
                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                      Wizards
                                    </h4>
                                    <!--end:Menu heading-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/horizontal.html" class="menu-link">
                                        <span class="menu-title">Horizontal</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/vertical.html" class="menu-link">
                                        <span class="menu-title">Vertical</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/two-factor-authentication.html" class="menu-link">
                                        <span class="menu-title">Two Factor Auth</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/create-app.html" class="menu-link">
                                        <span class="menu-title">Create App</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/create-campaign.html" class="menu-link">
                                        <span class="menu-title">Create Campaign</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/create-account.html" class="menu-link">
                                        <span class="menu-title">Create Account</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/create-project.html" class="menu-link">
                                        <span class="menu-title">Create Project</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                        <span class="menu-title">Top Up Wallet</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                      <!--begin:Menu link-->
                                      <a href="utilities/wizards/offer-a-deal.html" class="menu-link">
                                        <span class="menu-title">Offer a Deal</span>
                                      </a>
                                      <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                  </div>
                                  <!--end:Menu section-->
                                </div>
                                <!--end:Col-->
                              </div>
                              <!--end:Row-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-5 pe-lg-5">
                              <img src="assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt="" />
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                        <!--end:Tab pane-->
                        <!--begin:Tab pane-->
                        <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                          <!--begin:Row-->
                          <div class="row">
                            <!--begin:Col-->
                            <div class="col-lg-4 mb-6 mb-lg-0">
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/lists.html" class="menu-link">
                                  <span class="menu-title">Lists</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/statistics.html" class="menu-link">
                                  <span class="menu-title">Statistics</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/charts.html" class="menu-link">
                                  <span class="menu-title">Charts</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/mixed.html" class="menu-link">
                                  <span class="menu-title">Mixed</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/tables.html" class="menu-link">
                                  <span class="menu-title">Tables</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                              <!--begin:Menu item-->
                              <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="widgets/feeds.html" class="menu-link">
                                  <span class="menu-title">Feeds</span>
                                </a>
                                <!--end:Menu link-->
                              </div>
                              <!--end:Menu item-->
                            </div>
                            <!--end:Col-->
                            <!--begin:Col-->
                            <div class="col-lg-8">
                              <img src="assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt="" />
                            </div>
                            <!--end:Col-->
                          </div>
                          <!--end:Row-->
                        </div>
                        <!--end:Tab pane-->
                      </div>
                      <!--end:Tab content-->
                    </div>
                    <!--end:Pages menu-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-title">Apps</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-rocket fs-2"></i>
                        </span>
                        <span class="menu-title">Projects</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">My Projects</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/project.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Project</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/targets.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Targets</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/budget.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Budget</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/users.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/files.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Files</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/activity.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Activity</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/projects/settings.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-handcart fs-2"></i>
                        </span>
                        <span class="menu-title">eCommerce</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Catalog</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/products.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Products</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/categories.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Categories</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/add-product.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add Product</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/edit-product.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Edit Product</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/add-category.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add Category</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/catalog/edit-category.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Edit Category</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sales</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/sales/listing.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Orders Listing</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/sales/details.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Order Details</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/sales/add-order.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add Order</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Edit Order</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customers</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/customers/listing.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Customers Listing</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/customers/details.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Customers Details</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Reports</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-accordion">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/reports/view.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Products Viewed</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/reports/sales.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sales</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/reports/returns.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Returns</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Customer Orders</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/ecommerce/reports/shipping.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Shipping</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/ecommerce/settings.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-chart fs-2"></i>
                        </span>
                        <span class="menu-title">Support Center</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/support-center/overview.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tickets</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/support-center/tickets/list.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ticket List</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/support-center/tickets/view.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ticket View</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorials</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/support-center/tutorials/list.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tutorials List</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/support-center/tutorials/post.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tutorials Post</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/support-center/faq.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">FAQ</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/support-center/licenses.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Licenses</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/support-center/contact.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Contact Us</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-shield-tick fs-2"></i>
                        </span>
                        <span class="menu-title">User Management</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/user-management/users/list.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Users List</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/user-management/users/view.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View User</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/user-management/roles/list.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Roles List</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/user-management/roles/view.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">View Roles</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/user-management/permissions.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Permissions</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-phone fs-2"></i>
                        </span>
                        <span class="menu-title">Contacts</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/contacts/getting-started.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/contacts/add-contact.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add Contact</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/contacts/edit-contact.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Edit Contact</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/contacts/view-contact.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Contact</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-basket fs-2"></i>
                        </span>
                        <span class="menu-title">Subscriptions</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/subscriptions/getting-started.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/subscriptions/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Subscription List</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/subscriptions/add.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add Subscription</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/subscriptions/view.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Subscription</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-briefcase fs-2"></i>
                        </span>
                        <span class="menu-title">Customers</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/customers/getting-started.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/customers/list.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Listing</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/customers/view.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Customer Details</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-credit-cart fs-2"></i>
                        </span>
                        <span class="menu-title">Invoice Management</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                          <!--begin:Menu link-->
                          <span class="menu-link">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Profile</span>
                            <span class="menu-arrow"></span>
                          </span>
                          <!--end:Menu link-->
                          <!--begin:Menu sub-->
                          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/invoices/view/invoice-1.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Invoice 1</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/invoices/view/invoice-2.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Invoice 2</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                              <!--begin:Menu link-->
                              <a class="menu-link" href="apps/invoices/view/invoice-3.html">
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Invoice 3</span>
                              </a>
                              <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                          </div>
                          <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/invoices/create.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Create Invoice</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-file-added fs-2"></i>
                        </span>
                        <span class="menu-title">File Manager</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/file-manager/folders.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Folders</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/file-manager/files.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Files</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/file-manager/blank.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Blank Directory</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/file-manager/settings.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-sms fs-2"></i>
                        </span>
                        <span class="menu-title">Inbox</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/inbox/listing.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Messages</span>
                            <span class="menu-badge">
                              <span class="badge badge-light-success">3</span>
                            </span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/inbox/compose.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Compose</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/inbox/reply.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View & Reply</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link">
                        <span class="menu-icon">
                          <i class="ki-outline ki-message-text-2 fs-2"></i>
                        </span>
                        <span class="menu-title">Chat</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/chat/private.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Private Chat</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/chat/group.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Group Chat</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link" href="apps/chat/drawer.html">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Drawer Chat</span>
                          </a>
                          <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                      </div>
                      <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a class="menu-link" href="apps/calendar.html">
                        <span class="menu-icon">
                          <i class="ki-outline ki-calendar-8 fs-2"></i>
                        </span>
                        <span class="menu-title">Calendar</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                  <!--begin:Menu link-->
                  <span class="menu-link">
                    <span class="menu-title">Help</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                          <i class="ki-outline ki-rocket fs-2"></i>
                        </span>
                        <span class="menu-title">Components</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                          <i class="ki-outline ki-abstract-26 fs-2"></i>
                        </span>
                        <span class="menu-title">Documentation</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo23/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                          <i class="ki-outline ki-switch fs-2"></i>
                        </span>
                        <span class="menu-title">Layout Builder</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                      <!--begin:Menu link-->
                      <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
                        <span class="menu-icon">
                          <i class="ki-outline ki-code fs-2"></i>
                        </span>
                        <span class="menu-title">Changelog v8.2.5</span>
                      </a>
                      <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                  </div>
                  <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Logo wrapper-->
            <div class="d-flex align-items-center">
              <!--begin::Logo wrapper-->
              <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none" id="kt_app_sidebar_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
              </div>
              <!--end::Logo wrapper-->
              <!--begin::Logo image-->
              <a href="index.html" class="d-flex d-lg-none">
                <img alt="Logo" src="assets/media/logos/demo23.svg" class="h-20px theme-light-show" />
                <img alt="Logo" src="assets/media/logos/demo23-dark.svg" class="h-20px theme-dark-show" />
              </a>
              <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
              <!--begin::Chat-->
              <div class="app-navbar-item ms-1 ms-lg-3">
                <!--begin::Menu wrapper-->
                <div class="btn btn-icon btn-circle btn-color-gray-500 btn-active-color-primary btn-custom shadow-xs bg-body" id="kt_drawer_chat_toggle">
                  <i class="ki-outline ki-message-notif fs-1"></i>
                </div>
                <!--end::Menu wrapper-->
              </div>
              <!--end::Chat-->
              <!--begin::Header menu mobile toggle-->
              <div class="app-navbar-item d-lg-none ms-2 me-n4" title="Show header menu">
                <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary" id="kt_app_header_menu_toggle">
                  <i class="ki-outline ki-text-align-left fs-2 fw-bold"></i>
                </div>
              </div>
              <!--end::Header menu mobile toggle-->
            </div>
            <!--end::Navbar-->
          </div>
          <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
      </div>
      <!--end::Header-->
      <!--begin::Wrapper-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

        <?php include_once('widgets/sidebar.php'); ?>

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <!--begin::Content wrapper-->
          <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
              <!--begin::Content container-->
              <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <!--begin::Slider Widget 7-->
                    <div id="kt_sliders_widget_7_slider" class="card card-flush carousel carousel-custom carousel-light-dots carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000" style="background-color: #ffe896" data-bs-theme="light">
                      <!--begin::Header-->
                      <div class="card-header align-items-center pt-7">
                        <!--begin::Title-->
                        <h4 class="card-label fw-bold text-gray-800 m-0">
                          Recent Updates
                        </h4>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Carousel Indicators-->
                          <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-dark">
                            <li data-bs-target="#kt_sliders_widget_7_slider" data-bs-slide-to="0" class="active ms-1"></li>
                            <li data-bs-target="#kt_sliders_widget_7_slider" data-bs-slide-to="1" class="ms-1"></li>
                            <li data-bs-target="#kt_sliders_widget_7_slider" data-bs-slide-to="2" class="ms-1"></li>
                          </ol>
                          <!--end::Carousel Indicators-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-3">
                        <!--begin::Carousel-->
                        <div class="carousel-inner">
                          <!--begin::Item-->
                          <div class="carousel-item active show">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                              <!--begin::Chart-->
                              <div class="w-80px flex-shrink-0 me-2">
                                <div class="min-h-auto ms-n3" id="kt_slider_widget_7_chart_1" style="height: 100px"></div>
                              </div>
                              <!--end::Chart-->
                              <!--begin::Info-->
                              <div class="m-0">
                                <!--begin::Subtitle-->
                                <h5 class="fw-bold text-gray-800 mb-3">
                                  Ruby on Rails
                                </h5>
                                <!--end::Subtitle-->
                                <!--begin::Items-->
                                <div class="d-flex d-grid gap-5">
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 lesson</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 agenda</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                </div>
                                <!--end::Items-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="carousel-item">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                              <!--begin::Chart-->
                              <div class="w-80px flex-shrink-0 me-2">
                                <div class="min-h-auto ms-n3" id="kt_slider_widget_7_chart_2" style="height: 100px"></div>
                              </div>
                              <!--end::Chart-->
                              <!--begin::Info-->
                              <div class="m-0">
                                <!--begin::Subtitle-->
                                <h5 class="fw-bold text-gray-800 mb-3">
                                  Ruby on Rails
                                </h5>
                                <!--end::Subtitle-->
                                <!--begin::Items-->
                                <div class="d-flex d-grid gap-5">
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 lesson</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 agenda</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                </div>
                                <!--end::Items-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="carousel-item">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                              <!--begin::Chart-->
                              <div class="w-80px flex-shrink-0 me-2">
                                <div class="min-h-auto ms-n3" id="kt_slider_widget_7_chart_3" style="height: 100px"></div>
                              </div>
                              <!--end::Chart-->
                              <!--begin::Info-->
                              <div class="m-0">
                                <!--begin::Subtitle-->
                                <h5 class="fw-bold text-gray-800 mb-3">
                                  Ruby on Rails
                                </h5>
                                <!--end::Subtitle-->
                                <!--begin::Items-->
                                <div class="d-flex d-grid gap-5">
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0 me-4">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>3 lesson</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>1 agenda</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                  <!--begin::Item-->
                                  <div class="d-flex flex-column flex-shrink-0">
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center fs-7 fw-bold text-gray-600 mb-2">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>50 Min</span>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <span class="d-flex align-items-center text-gray-600 fw-bold fs-7">
                                      <i class="ki-outline ki-right-square fs-6 text-gray-600 me-2"></i>72 students</span>
                                    <!--end::Section-->
                                  </div>
                                  <!--end::Item-->
                                </div>
                                <!--end::Items-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Carousel-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Slider Widget 7-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Engage widget 12-->
                    <div class="card card-custom bg-body border-0 h-md-100">
                      <!--begin::Body-->
                      <div class="card-body d-flex justify-content-center flex-wrap ps-xl-15 pe-0">
                        <!--begin::Wrapper-->
                        <div class="flex-grow-1 mt-2 me-9 me-md-0">
                          <!--begin::Title-->
                          <div class="position-relative text-gray-800 fs-1 z-index-2 fw-bold mb-5">
                            Upgrade Your Plan
                          </div>
                          <!--end::Title-->
                          <!--begin::Text-->
                          <span class="text-gray-600 fw-semibold fs-6 mb-6 d-block">Flat illustrations and swesome with our multi
                            color <br />vivid unblended purple hair lady</span>
                          <!--end::Text-->
                          <!--begin::Action-->
                          <div class="mb-7">
                            <a href="https://devs.keenthemes.com/" class="btn btn-sm btn-primary fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                          </div>
                          <!--begin::Action-->
                        </div>
                        <!--begin::Wrapper-->
                        <!--begin::Illustration-->
                        <img src="assets/media/illustrations/misc/credit-card.png" class="h-175px me-15" alt="" />
                        <!--end::Illustration-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Engage widget 12-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 16-->
                    <div class="card card-flush h-xl-100">
                      <!--begin::Header-->
                      <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-800">Delivery Tracking</span>
                          <span class="text-gray-500 mt-1 fw-semibold fs-6">56 deliveries in progress</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <a href="#" class="btn btn-sm btn-light" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-custom-class="tooltip-inverse" title="Delivery App is coming soon">View All</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-4 px-0">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9">
                          <!--begin::Item-->
                          <li class="nav-item col-4 mx-0 p-0">
                            <!--begin::Link-->
                            <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_1">
                              <!--begin::Subtitle-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">New</span>
                              <!--end::Subtitle-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_2">
                              <!--begin::Subtitle-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Preparing</span>
                              <!--end::Subtitle-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item col-4 mx-0 px-0">
                            <!--begin::Link-->
                            <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_3">
                              <!--begin::Subtitle-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
                              <!--end::Subtitle-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Bullet-->
                          <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                          <!--end::Bullet-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 390px">
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware
                                      10299</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey
                                      45463</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania
                                      57867</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware
                                      10299</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey
                                      45463</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_list_widget_16_tab_2">
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware
                                      10299</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey
                                      45463</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania
                                      57867</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania
                                      57867</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_list_widget_16_tab_3">
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania
                                      57867</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware
                                      10299</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey
                                      45463</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware
                                      10299</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey
                                      45463</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mt-5 mb-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="m-0">
                              <!--begin::Timeline-->
                              <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item pb-5">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-cd fs-2 text-success"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson,
                                      California 62639</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                  <!--begin::Timeline line-->
                                  <div class="timeline-line"></div>
                                  <!--end::Timeline line-->
                                  <!--begin::Timeline icon-->
                                  <div class="timeline-icon">
                                    <i class="ki-outline ki-geolocation fs-2 text-info"></i>
                                  </div>
                                  <!--end::Timeline icon-->
                                  <!--begin::Timeline content-->
                                  <div class="timeline-content m-0">
                                    <!--begin::Label-->
                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                    <!--begin::Label-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
                                    <!--end::Title-->
                                    <!--begin::Title-->
                                    <span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine
                                      98380</span>
                                    <!--end::Title-->
                                  </div>
                                  <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                              </div>
                              <!--end::Timeline-->
                            </div>
                            <!--end::Item-->
                          </div>
                          <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::List widget 16-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-md-100">
                      <!--begin::Header-->
                      <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
                          <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">Add Product</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom mb-3">
                          <!--begin::Item-->
                          <li class="nav-item mb-3 me-3 me-lg-6">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
                              <!--begin::Icon-->
                              <div class="nav-icon mb-3">
                                <i class="ki-outline ki-truck fs-1"></i>
                              </div>
                              <!--end::Icon-->
                              <!--begin::Title-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3 me-3 me-lg-6">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
                              <!--begin::Icon-->
                              <div class="nav-icon mb-3">
                                <i class="ki-outline ki-bus fs-1"></i>
                              </div>
                              <!--end::Icon-->
                              <!--begin::Title-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3 me-3 me-lg-6">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3">
                              <!--begin::Icon-->
                              <div class="nav-icon mb-3">
                                <i class="ki-outline ki-logistic fs-1"></i>
                              </div>
                              <!--end::Icon-->
                              <!--begin::Title-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Drone</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                              <!--begin::Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-12.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-13.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                            </div>
                            <!--end::Table-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                              <!--begin::Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-13.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-12.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                            </div>
                            <!--end::Table-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                              <!--begin::Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-190px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-11.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-13.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-12.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3">
                                          <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                          <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                      <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td>
                                      <div class="rating">
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                          <i class="ki-solid ki-star fs-6"></i>
                                        </div>
                                      </div>
                                      <span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                            </div>
                            <!--end::Table-->
                          </div>
                          <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 6-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <!--begin::Chart widget 29-->
                    <div class="card card-flush h-xl-100">
                      <!--begin::Header-->
                      <div class="card-header py-7">
                        <!--begin::Statistics-->
                        <div class="m-0">
                          <!--begin::Heading-->
                          <div class="d-flex align-items-center mb-2">
                            <!--begin::Title-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">7,9</span>
                            <!--end::Title-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                              <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Heading-->
                          <!--begin::Description-->
                          <span class="fs-6 fw-semibold text-gray-500">Avarage Position</span>
                          <!--end::Description-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Menu-->
                          <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                          </button>
                          <!--begin::Menu 2-->
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                Quick Actions
                              </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                              <!--begin::Menu item-->
                              <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                              </a>
                              <!--end::Menu item-->
                              <!--begin::Menu sub-->
                              <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Admin Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Staff Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Member Group</a>
                                </div>
                                <!--end::Menu item-->
                              </div>
                              <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                              </div>
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu 2-->
                          <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body d-flex align-items-end p-0">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_29" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5"></div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Chart widget 29-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xxl-8 mb-5 mb-xl-10">
                    <!--begin::Chart widget 13-->
                    <div class="card card-flush h-md-100">
                      <!--begin::Header-->
                      <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-900">Sales Statistics</span>
                          <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Menu-->
                          <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                          </button>
                          <!--begin::Menu-->
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Remove</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Mute</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Settings</a>
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu-->
                          <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-5">
                        <!--begin::Chart container-->
                        <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
                        <!--end::Chart container-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Chart widget 13-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Content container-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Content wrapper-->
          <!--begin::Footer-->
          <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
              <!--begin::Copyright-->
              <div class="text-gray-900 order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2024&copy;</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
              </div>
              <!--end::Copyright-->
              <!--begin::Menu-->
              <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                  <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                  <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                  <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
              </ul>
              <!--end::Menu-->
            </div>
            <!--end::Footer container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end:::Main-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::App-->
  <!--begin::Drawers-->
  <!--begin::Activities drawer-->
  <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none border-0 rounded-0">
      <!--begin::Header-->
      <div class="card-header" id="kt_activities_header">
        <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
        <div class="card-toolbar">
          <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
            <i class="ki-outline ki-cross fs-1"></i>
          </button>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body position-relative" id="kt_activities_body">
        <!--begin::Content-->
        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
          <!--begin::Timeline items-->
          <div class="timeline timeline-border-dashed">
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    There are 2 new tasks for you in “AirPlus Mobile App”
                    project:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Added at 4:23 PM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src="assets/media/avatars/300-14.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                    <!--begin::Title-->
                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px pe-2">
                      <span class="badge badge-light text-muted">Application Design</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                          A
                        </div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px pe-2">
                      <span class="badge badge-light-primary">In Progress</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                    <!--begin::Title-->
                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px">
                      <span class="badge badge-light text-muted">CRM System Development</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-20.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                          B
                        </div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px">
                      <span class="badge badge-light-success">Completed</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon me-4">
                <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n2">
                <!--begin::Timeline heading-->
                <div class="overflow-auto pe-3">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    Invitation for crafting engaging designs that speak human
                    workshop
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                      <img src="assets/media/avatars/300-1.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="mb-5 pe-3">
                  <!--begin::Title-->
                  <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Sent at 10:30 PM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                      <img src="assets/media/avatars/300-23.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">1.9mb</div>
                        <!--end::Number-->
                      </div>
                      <!--begin::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">18kb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center">
                      <!--begin::Icon-->
                      <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">20mb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Icon-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    Task
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>in
                    “Ads Pro Admin Dashboard project:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Initiated at 4:23 PM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src="assets/media/avatars/300-14.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    3 new application design concepts added:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Created at 4:23 PM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                      <img src="assets/media/avatars/300-2.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    New case
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                    assigned to you in Multi-platform Database Design project
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">
                        Added at 4:23 PM by
                      </div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                      <!--end::User-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    You have received a new order:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Placed at 5:05 AM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                      <img src="assets/media/avatars/300-4.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Notice-->
                  <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                      <!--begin::Content-->
                      <div class="mb-3 mb-md-0 fw-semibold">
                        <h4 class="text-gray-900 fw-bold">
                          Database Backup Process Completed!
                        </h4>
                        <div class="fs-6 text-gray-700 pe-7">
                          Login into Admin Dashboard to make sure the data
                          integrity is OK
                        </div>
                      </div>
                      <!--end::Content-->
                      <!--begin::Action-->
                      <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                      <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Notice-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">
                    New order
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                    placed for Workshow Planning & Budget Estimation
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">
                      Placed at 4:23 PM by
                    </div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
          </div>
          <!--end::Timeline items-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer py-5 text-center" id="kt_activities_footer">
        <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
          <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
      </div>
      <!--end::Footer-->
    </div>
  </div>
  <!--end::Activities drawer-->
  <!--begin::Chat drawer-->
  <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
      <!--begin::Card header-->
      <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
        <!--begin::Title-->
        <div class="card-title">
          <!--begin::User-->
          <div class="d-flex justify-content-center flex-column me-3">
            <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
            <!--begin::Info-->
            <div class="mb-0 lh-1">
              <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
              <span class="fs-7 fw-semibold text-muted">Active</span>
            </div>
            <!--end::Info-->
          </div>
          <!--end::User-->
        </div>
        <!--end::Title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
          <!--begin::Menu-->
          <div class="me-0">
            <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              <i class="ki-outline ki-dots-square fs-2"></i>
            </button>
            <!--begin::Menu 3-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
              <!--begin::Heading-->
              <div class="menu-item px-3">
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                  Contacts
                </div>
              </div>
              <!--end::Heading-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                  <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                    <i class="ki-outline ki-information fs-7"></i> </span></a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                <a href="#" class="menu-link px-3">
                  <span class="menu-title">Groups</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3 my-1">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu 3-->
          </div>
          <!--end::Menu-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
            <i class="ki-outline ki-cross-square fs-2"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body" id="kt_drawer_chat_messenger_body">
        <!--begin::Messages-->
        <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
          <!--begin::Message(in)-->
          <div class="d-flex justify-content-start mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                  <span class="text-muted fs-7 mb-1">2 mins</span>
                </div>
                <!--end::Details-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                How likely are you to recommend our company to your friends
                and family ?
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(in)-->
          <!--begin::Message(out)-->
          <div class="d-flex justify-content-end mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-end">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                  <span class="text-muted fs-7 mb-1">5 mins</span>
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                </div>
                <!--end::Avatar-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been
                subscribed to a repository on GitHub.
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(out)-->
          <!--begin::Message(in)-->
          <div class="d-flex justify-content-start mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                  <span class="text-muted fs-7 mb-1">1 Hour</span>
                </div>
                <!--end::Details-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Ok, Understood!
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(in)-->
          <!--begin::Message(out)-->
          <div class="d-flex justify-content-end mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-end">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                  <span class="text-muted fs-7 mb-1">2 Hours</span>
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                </div>
                <!--end::Avatar-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(out)-->
          <!--begin::Message(in)-->
          <div class="d-flex justify-content-start mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                  <span class="text-muted fs-7 mb-1">3 Hours</span>
                </div>
                <!--end::Details-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                You can unwatch this repository immediately by clicking here:
                <a href="https://keenthemes.com">Keenthemes.com</a>
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(in)-->
          <!--begin::Message(out)-->
          <div class="d-flex justify-content-end mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-end">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                  <span class="text-muted fs-7 mb-1">4 Hours</span>
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                </div>
                <!--end::Avatar-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(out)-->
          <!--begin::Message(in)-->
          <div class="d-flex justify-content-start mb-10">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                  <span class="text-muted fs-7 mb-1">5 Hours</span>
                </div>
                <!--end::Details-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Company BBQ to celebrate the last quater achievements and
                goals. Food and drinks provided
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(in)-->
          <!--begin::Message(template for out)-->
          <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-end">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Details-->
                <div class="me-3">
                  <span class="text-muted fs-7 mb-1">Just now</span>
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                </div>
                <!--end::Details-->
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                </div>
                <!--end::Avatar-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(template for out)-->
          <!--begin::Message(template for in)-->
          <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start">
              <!--begin::User-->
              <div class="d-flex align-items-center mb-2">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle">
                  <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Details-->
                <div class="ms-3">
                  <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                  <span class="text-muted fs-7 mb-1">Just now</span>
                </div>
                <!--end::Details-->
              </div>
              <!--end::User-->
              <!--begin::Text-->
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Right before vacation season we have the next Big Deal for
                you.
              </div>
              <!--end::Text-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Message(template for in)-->
        </div>
        <!--end::Messages-->
      </div>
      <!--end::Card body-->
      <!--begin::Card footer-->
      <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
        <!--begin::Input-->
        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
        <!--end::Input-->
        <!--begin:Toolbar-->
        <div class="d-flex flex-stack">
          <!--begin::Actions-->
          <div class="d-flex align-items-center me-2">
            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
              <i class="ki-outline ki-paper-clip fs-3"></i>
            </button>
            <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
              <i class="ki-outline ki-cloud-add fs-3"></i>
            </button>
          </div>
          <!--end::Actions-->
          <!--begin::Send-->
          <button class="btn btn-primary" type="button" data-kt-element="send">
            Send
          </button>
          <!--end::Send-->
        </div>
        <!--end::Toolbar-->
      </div>
      <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
  </div>
  <!--end::Chat drawer-->
  <!--begin::Chat drawer-->
  <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
      <!--begin::Card header-->
      <div class="card-header">
        <!--begin::Title-->
        <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
        <!--end::Title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
            <i class="ki-outline ki-cross fs-2"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Card toolbar-->
      </div>
      <!--end::Card header-->
      <!--begin::Card body-->
      <div class="card-body hover-scroll-overlay-y h-400px pt-5">
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
              <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 350</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
              <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 650</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
              <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 150</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
              <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
              <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 650</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
              <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 720</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-6"></div>
        <!--end::Separator-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <!--begin::Wrapper-->
          <div class="d-flex flex-column me-3">
            <!--begin::Section-->
            <div class="mb-3">
              <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
              <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="d-flex align-items-center">
              <span class="fw-bold text-gray-800 fs-5">$ 430</span>
              <span class="text-muted mx-2">for</span>
              <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
              <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                <i class="ki-outline ki-minus fs-4"></i>
              </a>
              <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                <i class="ki-outline ki-plus fs-4"></i>
              </a>
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Pic-->
          <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
            <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
          </div>
          <!--end::Pic-->
        </div>
        <!--end::Item-->
      </div>
      <!--end::Card body-->
      <!--begin::Card footer-->
      <div class="card-footer">
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <span class="fw-bold text-gray-600">Total</span>
          <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
        </div>
        <!--end::Item-->
        <!--begin::Item-->
        <div class="d-flex flex-stack">
          <span class="fw-bold text-gray-600">Sub total</span>
          <span class="text-primary fw-bolder fs-5">$ 246.35</span>
        </div>
        <!--end::Item-->
        <!--end::Action-->
        <div class="d-flex justify-content-end mt-9">
          <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
        </div>
        <!--end::Action-->
      </div>
      <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
  </div>
  <!--end::Chat drawer-->
  <!--end::Drawers-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
  </div>
  <!--end::Scrolltop-->
  <!--begin::Modals-->
  <!--begin::Modal - Upgrade plan-->
  <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
      <!--begin::Modal content-->
      <div class="modal-content rounded">
        <!--begin::Modal header-->
        <div class="modal-header justify-content-end border-0 pb-0">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
          <!--begin::Heading-->
          <div class="mb-13 text-center">
            <h1 class="mb-3">Upgrade a Plan</h1>
            <div class="text-muted fw-semibold fs-5">
              If you need more info, please check
              <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
            </div>
          </div>
          <!--end::Heading-->
          <!--begin::Plans-->
          <div class="d-flex flex-column">
            <!--begin::Nav group-->
            <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                Monthly
              </button>
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                Annual
              </button>
            </div>
            <!--end::Nav group-->
            <!--begin::Row-->
            <div class="row mt-10">
              <!--begin::Col-->
              <div class="col-lg-6 mb-10 mb-lg-0">
                <!--begin::Tabs-->
                <div class="nav flex-column">
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                          Startup
                        </div>
                        <div class="fw-semibold opacity-75">
                          Best for startups
                        </div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                      <span class="fs-7 opacity-50">/ <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="advanced" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                          Advanced
                        </div>
                        <div class="fw-semibold opacity-75">
                          Best for 100+ team size
                        </div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                      <span class="fs-7 opacity-50">/ <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                          Enterprise
                          <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                        </div>
                        <div class="fw-semibold opacity-75">
                          Best value for 1000+ team
                        </div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                      <span class="fs-7 opacity-50">/ <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="custom" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                          Custom
                        </div>
                        <div class="fw-semibold opacity-75">
                          Requet a custom license
                        </div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                </div>
                <!--end::Tabs-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-lg-6">
                <!--begin::Tab content-->
                <div class="tab-content rounded h-100 bg-light p-10">
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">
                        What’s in Startup Plan?
                      </h2>
                      <div class="text-muted fw-semibold">
                        Optimal for 10+ team size and new startup
                      </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">
                        What’s in Startup Plan?
                      </h2>
                      <div class="text-muted fw-semibold">
                        Optimal for 100+ team size and grown company
                      </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">
                        What’s in Startup Plan?
                      </h2>
                      <div class="text-muted fw-semibold">
                        Optimal for 1000+ team and enterpise
                      </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">
                        What’s in Startup Plan?
                      </h2>
                      <div class="text-muted fw-semibold">
                        Optimal for corporations
                      </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                </div>
                <!--end::Tab content-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Plans-->
          <!--begin::Actions-->
          <div class="d-flex flex-center flex-row-fluid pt-12">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
              <!--begin::Indicator label-->
              <span class="indicator-label">Upgrade Plan</span>
              <!--end::Indicator label-->
              <!--begin::Indicator progress-->
              <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              <!--end::Indicator progress-->
            </button>
          </div>
          <!--end::Actions-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Upgrade plan-->
  <!--begin::Modal - Users Search-->
  <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Content-->
          <div class="text-center mb-13">
            <h1 class="mb-3">Search Users</h1>
            <div class="text-muted fw-semibold fs-5">
              Invite Collaborators To Your Project
            </div>
          </div>
          <!--end::Content-->
          <!--begin::Search-->
          <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
            <!--begin::Form-->
            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
              <!--begin::Hidden input(Added to disable form autocomplete)-->
              <input type="hidden" />
              <!--end::Hidden input-->
              <!--begin::Icon-->
              <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
              <!--end::Icon-->
              <!--begin::Input-->
              <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
              <!--end::Input-->
              <!--begin::Spinner-->
              <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
              </span>
              <!--end::Spinner-->
              <!--begin::Reset-->
              <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
              </span>
              <!--end::Reset-->
            </form>
            <!--end::Form-->
            <!--begin::Wrapper-->
            <div class="py-5">
              <!--begin::Suggestions-->
              <div data-kt-search-element="suggestions">
                <!--begin::Heading-->
                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                      <span class="badge badge-light">Art Director</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                      <span class="badge badge-light">Marketing Analytic</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                      <span class="badge badge-light">Software Enginer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                      <span class="badge badge-light">Web Developer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                      <span class="badge badge-light">UI/UX Designer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                </div>
                <!--end::Users-->
              </div>
              <!--end::Suggestions-->
              <!--begin::Results(add d-none to below element to hide the users list by default)-->
              <div data-kt-search-element="results" class="d-none">
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                        <div class="fw-semibold text-muted">
                          smith@kpmg.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                        <div class="fw-semibold text-muted">
                          melody@altbox.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                        <div class="fw-semibold text-muted">max@kt.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                        <div class="fw-semibold text-muted">
                          sean@dellito.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                        <div class="fw-semibold text-muted">
                          brian@exchange.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                        <div class="fw-semibold text-muted">mik@pex.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                        <div class="fw-semibold text-muted">
                          f.mit@kpmg.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                        <div class="fw-semibold text-muted">
                          olivia@corpmail.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                        <div class="fw-semibold text-muted">
                          owen.neil@gmail.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                        <div class="fw-semibold text-muted">
                          dam@consilting.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                        <div class="fw-semibold text-muted">
                          emma@intenso.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                        <div class="fw-semibold text-muted">
                          ana.cf@limtel.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                        <div class="fw-semibold text-muted">
                          robert@benko.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                        <div class="fw-semibold text-muted">
                          miller@mapple.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                        <div class="fw-semibold text-muted">
                          lucy.m@fentech.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                        <div class="fw-semibold text-muted">
                          ethan@loop.com.au
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                        <div class="fw-semibold text-muted">
                          olivia@corpmail.com
                        </div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">
                          Can Edit
                        </option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                </div>
                <!--end::Users-->
                <!--begin::Actions-->
                <div class="d-flex flex-center mt-15">
                  <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
                    Cancel
                  </button>
                  <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                    Add Selected Users
                  </button>
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Results-->
              <!--begin::Empty-->
              <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Message-->
                <div class="fw-semibold py-10">
                  <div class="text-gray-600 fs-3 mb-2">No users found</div>
                  <div class="text-muted fs-6">
                    Try to search by username, full name or email...
                  </div>
                </div>
                <!--end::Message-->
                <!--begin::Illustration-->
                <div class="text-center px-5">
                  <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                </div>
                <!--end::Illustration-->
              </div>
              <!--end::Empty-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Search-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Users Search-->
  <!--begin::Modal - Invite Friends-->
  <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Heading-->
          <div class="text-center mb-13">
            <!--begin::Title-->
            <h1 class="mb-3">Invite a Friend</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5">
              If you need more info, please check out
              <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Google Contacts Invite-->
          <div class="btn btn-light-primary fw-bold w-100 mb-8">
            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
          </div>
          <!--end::Google Contacts Invite-->
          <!--begin::Separator-->
          <div class="separator d-flex flex-center mb-8">
            <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
          </div>
          <!--end::Separator-->
          <!--begin::Textarea-->
          <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
          <!--end::Textarea-->
          <!--begin::Users-->
          <div class="mb-10">
            <!--begin::Heading-->
            <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
            <!--end::Heading-->
            <!--begin::List-->
            <div class="mh-300px scroll-y me-n7 pe-7">
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                    <div class="fw-semibold text-muted">
                      melody@altbox.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                    <div class="fw-semibold text-muted">max@kt.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                    <div class="fw-semibold text-muted">
                      brian@exchange.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                    <div class="fw-semibold text-muted">mik@pex.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                    <div class="fw-semibold text-muted">
                      olivia@corpmail.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                    <div class="fw-semibold text-muted">
                      owen.neil@gmail.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                    <div class="fw-semibold text-muted">
                      dam@consilting.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                    <div class="fw-semibold text-muted">
                      ana.cf@limtel.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                    <div class="fw-semibold text-muted">robert@benko.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                    <div class="fw-semibold text-muted">
                      miller@mapple.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                    <div class="fw-semibold text-muted">
                      lucy.m@fentech.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                    <div class="fw-semibold text-muted">
                      ethan@loop.com.au
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                    <div class="fw-semibold text-muted">
                      dam@consilting.com
                    </div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
            </div>
            <!--end::List-->
          </div>
          <!--end::Users-->
          <!--begin::Notice-->
          <div class="d-flex flex-stack">
            <!--begin::Label-->
            <div class="me-5 fw-semibold">
              <label class="fs-6">Adding Users by Team Members</label>
              <div class="fs-7 text-muted">
                If you need more info, please check budget planning
              </div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" checked="checked" />
              <span class="form-check-label fw-semibold text-muted">Allowed</span>
            </label>
            <!--end::Switch-->
          </div>
          <!--end::Notice-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Invite Friend-->
  <!--end::Modals-->
  <!--begin::Javascript-->
  <script>
    var hostUrl = "assets/";
  </script>
  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Vendors Javascript(used for this page only)-->
  <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
  <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <!--end::Vendors Javascript-->
  <!--begin::Custom Javascript(used for this page only)-->
  <script src="assets/js/widgets.bundle.js"></script>
  <script src="assets/js/custom/widgets.js"></script>
  <script src="assets/js/custom/apps/chat/chat.js"></script>
  <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
  <script src="assets/js/custom/utilities/modals/users-search.js"></script>
  <!--end::Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>