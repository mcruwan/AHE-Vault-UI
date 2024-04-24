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
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
  <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
  </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
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
              
            <?php include_once('widgets/main-menu.php'); ?>
            
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
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
              <!--begin::Toolbar container-->
              <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3">
                  <!--begin::Title-->
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Projects Dashboard</h1>
                  <!--end::Title-->
                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                      <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                      <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <!--end::Item-->
                  </ul>
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                  <!--begin::Filter menu-->
                  <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      <i class="ki-outline ki-filter fs-6 text-muted me-1"></i>Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_660662b5487d9">
                      <!--begin::Header-->
                      <div class="px-7 py-5">
                        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Menu separator-->
                      <div class="separator border-gray-200"></div>
                      <!--end::Menu separator-->
                      <!--begin::Form-->
                      <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Status:</label>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <div>
                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_660662b5487d9" data-allow-clear="true">
                              <option></option>
                              <option value="1">Approved</option>
                              <option value="2">Pending</option>
                              <option value="2">In Process</option>
                              <option value="2">Rejected</option>
                            </select>
                          </div>
                          <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Member Type:</label>
                          <!--end::Label-->
                          <!--begin::Options-->
                          <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                              <input class="form-check-input" type="checkbox" value="1" />
                              <span class="form-check-label">Author</span>
                            </label>
                            <!--end::Options-->
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                              <span class="form-check-label">Customer</span>
                            </label>
                            <!--end::Options-->
                          </div>
                          <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Notifications:</label>
                          <!--end::Label-->
                          <!--begin::Switch-->
                          <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                            <label class="form-check-label">Enabled</label>
                          </div>
                          <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                          <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                          <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                      </div>
                      <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                  </div>
                  <!--end::Filter menu-->
                  <!--begin::Secondary button-->
                  <!--end::Secondary button-->
                  <!--begin::Primary button-->
                  <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                  <!--end::Primary button-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
              <!--begin::Content container-->
              <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10 mb-xl-10">
                  <!--begin::Col-->
                  <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                    <!--begin::Card widget 16-->
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10" style="background-color: #080655">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                          <!--begin::Amount-->
                          <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                          <!--end::Amount-->
                          <!--begin::Subtitle-->
                          <span class="text-white opacity-50 pt-1 fw-semibold fs-6">Active Projects</span>
                          <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                          <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
                            <span>43 Pending</span>
                            <span>72%</span>
                          </div>
                          <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                            <div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <!--end::Progress-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Card widget 16-->
                    <!--begin::Card widget 7-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                          <!--begin::Amount-->
                          <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                          <!--end::Amount-->
                          <!--begin::Subtitle-->
                          <span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
                          <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                        <!--end::Title-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                          </div>
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                          </div>
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                          </div>
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                          </div>
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                          </div>
                          <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                          </div>
                          <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                          </a>
                        </div>
                        <!--end::Users group-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Card widget 7-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                    <!--begin::Card widget 17-->
                    <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                          <!--begin::Info-->
                          <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                              <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
                            <!--end::Badge-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Subtitle-->
                          <span class="text-gray-500 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                          <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                        <!--begin::Chart-->
                        <div class="d-flex flex-center me-5 pt-2">
                          <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="d-flex flex-column content-justify-center flex-row-fluid">
                          <!--begin::Label-->
                          <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                            <!--end::Stats-->
                          </div>
                          <!--end::Label-->
                          <!--begin::Label-->
                          <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                            <!--end::Stats-->
                          </div>
                          <!--end::Label-->
                          <!--begin::Label-->
                          <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                            <!--end::Stats-->
                          </div>
                          <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Card widget 17-->
                    <!--begin::List widget 25-->
                    <div class="card card-flush h-lg-50">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title text-gray-800">Highlights</h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar d-none">
                          <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                          <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                            <!--end::Display range-->
                            <i class="ki-outline ki-calendar-8 fs-1 ms-2 me-0"></i>
                          </div>
                          <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex align-items-senter">
                            <i class="ki-outline ki-arrow-up-right fs-2 text-success me-2"></i>
                            <!--begin::Number-->
                            <span class="text-gray-900 fw-bolder fs-6">7.8</span>
                            <!--end::Number-->
                            <span class="text-gray-500 fw-bold fs-6">/10</span>
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex align-items-senter">
                            <i class="ki-outline ki-arrow-down-right fs-2 text-danger me-2"></i>
                            <!--begin::Number-->
                            <span class="text-gray-900 fw-bolder fs-6">730</span>
                            <!--end::Number-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                          <!--begin::Section-->
                          <div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings</div>
                          <!--end::Section-->
                          <!--begin::Statistics-->
                          <div class="d-flex align-items-senter">
                            <i class="ki-outline ki-arrow-up-right fs-2 text-success me-2"></i>
                            <!--begin::Number-->
                            <span class="text-gray-900 fw-bolder fs-6">$2,309</span>
                            <!--end::Number-->
                          </div>
                          <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::LIst widget 25-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-lg-12 col-xl-12 col-xxl-6 mb-10 mb-xl-0">
                    <!--begin::Timeline widget 3-->
                    <div class="card h-md-100">
                      <!--begin::Header-->
                      <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-900">What’s up Today</span>
                          <span class="text-muted mt-1 fw-semibold fs-7">Total 424,567 deliveries</span>
                        </h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-7 px-0">
                        <!--begin::Nav-->
                        <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
                              <span class="fs-7 fw-semibold">Fr</span>
                              <span class="fs-6 fw-bold">20</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
                              <span class="fs-7 fw-semibold">Sa</span>
                              <span class="fs-6 fw-bold">21</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
                              <span class="fs-7 fw-semibold">Su</span>
                              <span class="fs-6 fw-bold">22</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
                              <span class="fs-7 fw-semibold">Tu</span>
                              <span class="fs-6 fw-bold">23</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
                              <span class="fs-7 fw-semibold">Tu</span>
                              <span class="fs-6 fw-bold">24</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
                              <span class="fs-7 fw-semibold">We</span>
                              <span class="fs-6 fw-bold">25</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
                              <span class="fs-7 fw-semibold">Th</span>
                              <span class="fs-6 fw-bold">26</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
                              <span class="fs-7 fw-semibold">Fri</span>
                              <span class="fs-6 fw-bold">27</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
                              <span class="fs-7 fw-semibold">Sa</span>
                              <span class="fs-6 fw-bold">28</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
                              <span class="fs-7 fw-semibold">Su</span>
                              <span class="fs-6 fw-bold">29</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <!--begin::Date-->
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
                              <span class="fs-7 fw-semibold">Mo</span>
                              <span class="fs-6 fw-bold">30</span>
                            </a>
                            <!--end::Date-->
                          </li>
                          <!--end::Nav item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content (ishlamayabdi)-->
                        <div class="tab-content mb-2 px-9">
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">16:30 - 17:00
                                  <span class="text-gray-500 fw-semibold fs-7">PM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Dashboard UI/UX Design Review</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Mark Morris</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">10:20 - 11:00
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">Marketing Campaign Discussion</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Peter Marcus</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center mb-6">
                              <!--begin::Bullet-->
                              <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
                              <!--end::Bullet-->
                              <!--begin::Info-->
                              <div class="flex-grow-1 me-5">
                                <!--begin::Time-->
                                <div class="text-gray-800 fw-semibold fs-2">12:00 - 13:40
                                  <span class="text-gray-500 fw-semibold fs-7">AM</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Description-->
                                <div class="text-gray-700 fw-semibold fs-6">9 Degree Project Estimation Meeting</div>
                                <!--end::Description-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-7">Lead by
                                  <!--begin::Name-->
                                  <a href="#" class="text-primary opacity-75-hover fw-semibold">Lead by Bob</a>
                                  <!--end::Name-->
                                </div>
                                <!--end::Link-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                        <!--begin::Action-->
                        <div class="float-end d-none">
                          <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
                          <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                        </div>
                        <!--end::Action-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::Timeline widget 3-->
                    <!--begin::Timeline widget 3-->
                    <div class="card card-flush d-none h-md-100">
                      <!--begin::Card header-->
                      <div class="card-header mt-6">
                        <!--begin::Card title-->
                        <div class="card-title flex-column">
                          <h3 class="fw-bold mb-1">What's on the road?</h3>
                          <div class="fs-6 text-gray-500">Total 482 participants</div>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Select-->
                          <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                            <option value="1" selected="selected">Options</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                          </select>
                          <!--end::Select-->
                        </div>
                        <!--end::Card toolbar-->
                      </div>
                      <!--end::Card header-->
                      <!--begin::Card body-->
                      <div class="card-body p-0">
                        <!--begin::Dates-->
                        <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0">
                              <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                              <span class="fs-6 text-gray-800 fw-bold">20</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1">
                              <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                              <span class="fs-6 text-gray-800 fw-bold">21</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2">
                              <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                              <span class="fs-6 text-gray-800 fw-bold">22</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3">
                              <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                              <span class="fs-6 text-gray-800 fw-bold">23</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4">
                              <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                              <span class="fs-6 text-gray-800 fw-bold">24</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5">
                              <span class="text-gray-500 fs-7 fw-semibold">We</span>
                              <span class="fs-6 text-gray-800 fw-bold">25</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6">
                              <span class="text-gray-500 fs-7 fw-semibold">Th</span>
                              <span class="fs-6 text-gray-800 fw-bold">26</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7">
                              <span class="text-gray-500 fs-7 fw-semibold">Fr</span>
                              <span class="fs-6 text-gray-800 fw-bold">27</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8">
                              <span class="text-gray-500 fs-7 fw-semibold">Sa</span>
                              <span class="fs-6 text-gray-800 fw-bold">28</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9">
                              <span class="text-gray-500 fs-7 fw-semibold">Su</span>
                              <span class="fs-6 text-gray-800 fw-bold">29</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10">
                              <span class="text-gray-500 fs-7 fw-semibold">Mo</span>
                              <span class="fs-6 text-gray-800 fw-bold">30</span>
                            </a>
                          </li>
                          <!--end::Date-->
                          <!--begin::Date-->
                          <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11">
                              <span class="text-gray-500 fs-7 fw-semibold">Tu</span>
                              <span class="fs-6 text-gray-800 fw-bold">31</span>
                            </a>
                          </li>
                          <!--end::Date-->
                        </ul>
                        <!--end::Dates-->
                        <!--begin::Tab Content-->
                        <div class="tab-content px-9">
                          <!--begin::Day-->
                          <div id="kt_schedule_day_0" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Naomi Hayabusa</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_1" class="tab-pane fade show active">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">David Stevenson</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_2" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Naomi Hayabusa</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Naomi Hayabusa</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Bob Harris</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_3" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Bob Harris</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Naomi Hayabusa</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Naomi Hayabusa</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_4" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Kendell Trevor</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Kendell Trevor</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_5" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Yannis Gloverson</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Kendell Trevor</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Bob Harris</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_6" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Michael Walters</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">10:00 - 11:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_7" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Karina Clarke</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">12:00 - 13:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_8" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Michael Walters</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Kendell Trevor</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_9" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Mark Randall</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Yannis Gloverson</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">16:30 - 17:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Karina Clarke</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_10" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Bob Harris</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">13:00 - 14:00
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Yannis Gloverson</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                          <!--begin::Day-->
                          <div id="kt_schedule_day_11" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">9:00 - 10:00
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Sean Bean</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">14:30 - 15:30
                                  <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Terry Robins</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                              <!--begin::Bar-->
                              <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                              <!--end::Bar-->
                              <!--begin::Info-->
                              <div class="fw-semibold ms-5 text-gray-600">
                                <!--begin::Time-->
                                <div class="fs-5">11:00 - 11:45
                                  <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                </div>
                                <!--end::Time-->
                                <!--begin::Title-->
                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                <!--end::Title-->
                                <!--begin::User-->
                                <div class="text-gray-500">Lead by
                                  <a href="#">Kendell Trevor</a>
                                </div>
                                <!--end::User-->
                              </div>
                              <!--end::Info-->
                              <!--begin::Action-->
                              <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                              <!--end::Action-->
                            </div>
                            <!--end::Time-->
                          </div>
                          <!--end::Day-->
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Timeline widget-3-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                  <!--begin::Col-->
                  <div class="col-xxl-6">
                    <!--begin::Card widget 18-->
                    <div class="card card-flush h-md-100">
                      <!--begin::Body-->
                      <div class="card-body py-9">
                        <!--begin::Row-->
                        <div class="row gx-9 h-100">
                          <!--begin::Col-->
                          <div class="col-sm-6 mb-10 mb-sm-0">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-33.jpg')"></div>
                            <!--end::Image-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-sm-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column h-100">
                              <!--begin::Header-->
                              <div class="mb-7">
                                <!--begin::Headin-->
                                <div class="d-flex flex-stack mb-6">
                                  <!--begin::Title-->
                                  <div class="flex-shrink-0 me-5">
                                    <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                    <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                  </div>
                                  <!--end::Title-->
                                  <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Items-->
                                <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                  <!--begin::Item-->
                                  <div class="d-flex align-items-center me-5 me-xl-13">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                      <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                      <span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
                                      <a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                    </div>
                                    <!--end::Info-->
                                  </div>
                                  <!--end::Item-->
                                  <!--begin::Item-->
                                  <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                      <span class="symbol-label bg-success">
                                        <i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
                                      </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                      <span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
                                      <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                    </div>
                                    <!--end::Info-->
                                  </div>
                                  <!--end::Item-->
                                </div>
                                <!--end::Items-->
                              </div>
                              <!--end::Header-->
                              <!--begin::Body-->
                              <div class="mb-6">
                                <!--begin::Text-->
                                <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                <!--end::Text-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                  <!--begin::Stat-->
                                  <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                    <!--begin::Date-->
                                    <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                    <!--end::Date-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">Due Date</div>
                                    <!--end::Label-->
                                  </div>
                                  <!--end::Stat-->
                                  <!--begin::Stat-->
                                  <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                    <!--begin::Number-->
                                    <span class="fs-6 text-gray-700 fw-bold">$
                                      <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">Budget</div>
                                    <!--end::Label-->
                                  </div>
                                  <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                              </div>
                              <!--end::Body-->
                              <!--begin::Footer-->
                              <div class="d-flex flex-stack mt-auto bd-highlight">
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover flex-nowrap">
                                  <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                    <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                  </div>
                                  <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                    <img alt="Pic" src="assets/media/avatars/300-3.jpg" />
                                  </div>
                                  <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                  </div>
                                </div>
                                <!--end::Users group-->
                                <!--begin::Actions-->
                                <a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                  <i class="ki-outline ki-exit-right-corner fs-4 ms-1"></i></a>
                                <!--end::Actions-->
                              </div>
                              <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Card widget 18-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xxl-6">
                    <!--begin::Engage widget 8-->
                    <div class="card border-0 h-md-100" data-bs-theme="light" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Row-->
                        <div class="row align-items-center h-100">
                          <!--begin::Col-->
                          <div class="col-7 ps-xl-13">
                            <!--begin::Title-->
                            <div class="text-white mb-6 pt-6">
                              <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span>
                              <span class="fs-2qx fw-bold">Upgrade Your Plan</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Flat cartoony and illustrations with vivid unblended purple hair lady</span>
                            <!--end::Text-->
                            <!--begin::Items-->
                            <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
                              <!--begin::Item-->
                              <div class="d-flex align-items-center me-5 me-xl-13">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px symbol-circle me-3">
                                  <span class="symbol-label" style="background: #35C7FF">
                                    <i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="text-white">
                                  <span class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                                  <span class="fw-bold fs-7">Up to 500</span>
                                </div>
                                <!--end::Info-->
                              </div>
                              <!--end::Item-->
                              <!--begin::Item-->
                              <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px symbol-circle me-3">
                                  <span class="symbol-label" style="background: #35C7FF">
                                    <i class="ki-outline ki-abstract-26 fs-5 text-white"></i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="text-white">
                                  <span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                                  <span class="fw-bold fs-7">Unlimited</span>
                                </div>
                                <!--end::Info-->
                              </div>
                              <!--end::Item-->
                            </div>
                            <!--end::Items-->
                            <!--begin::Action-->
                            <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                              <a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                              <a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a>
                            </div>
                            <!--end::Action-->
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-5 pt-10">
                            <!--begin::Illustration-->
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
                            <!--end::Illustration-->
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Engage widget 8-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-4">
                    <!--begin::Chart Widget 35-->
                    <div class="card card-flush h-md-100">
                      <!--begin::Header-->
                      <div class="card-header pt-5 mb-6">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <!--begin::Statistics-->
                          <div class="d-flex align-items-center mb-2">
                            <!--begin::Currency-->
                            <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                            <!--end::Currency-->
                            <!--begin::Value-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                              <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>9.2%</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Statistics-->
                          <!--begin::Description-->
                          <span class="fs-6 fw-semibold text-gray-500">Avg. Agent Earnings</span>
                          <!--end::Description-->
                        </h3>
                        <!--end::Title-->
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
                              <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
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
                      <div class="card-body py-0 px-0">
                        <!--begin::Nav-->
                        <ul class="nav d-flex justify-content-between mb-3 mx-9">
                          <!--begin::Item-->
                          <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
                            <!--end::Link-->
                          </li>
                          <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content mt-n6">
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                              <!--begin::Table-->
                              <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                  <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-danger">-139.34</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-success">+576.24</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-success">+124.03</span>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                              <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                              <!--begin::Table-->
                              <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                  <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-success">+134.02</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-primary">-124.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-danger">+144.04</span>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                              <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                              <!--begin::Table-->
                              <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                  <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-primary">+185.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-danger">+124.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-success">-154.03</span>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                              <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                              <!--begin::Table-->
                              <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                  <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-warning">+124.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-info">+144.65</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-primary">+154.06</span>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                              <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                          </div>
                          <!--end::Tap pane-->
                          <!--begin::Tap pane-->
                          <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                              <!--begin::Table-->
                              <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                  <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                  </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-warning">+114.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-primary">-124.03</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                    </td>
                                    <td class="pe-0 text-end">
                                      <span class="fw-bold fs-6 text-info">+165.86</span>
                                    </td>
                                  </tr>
                                </tbody>
                                <!--end::Table body-->
                              </table>
                              <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                          </div>
                          <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Chart Widget 35-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-8">
                    <!--begin::Table widget 14-->
                    <div class="card card-flush h-md-100">
                      <!--begin::Header-->
                      <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                          <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-6">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                          <!--begin::Table-->
                          <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                            <!--begin::Table head-->
                            <thead>
                              <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                              </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                              <tr>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-3">
                                      <img src="assets/media/stock/600x600/img-49.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                      <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                                      <span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pe-0">
                                  <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                </td>
                                <td class="text-end pe-0">
                                  <!--begin::Label-->
                                  <span class="badge badge-light-success fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>9.2%</span>
                                  <!--end::Label-->
                                </td>
                                <td class="text-end pe-12">
                                  <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                </td>
                                <td class="text-end pe-0">
                                  <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
                                    <div class="symbol symbol-50px me-3">
                                      <img src="assets/media/stock/600x600/img-40.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                      <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                      <span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pe-0">
                                  <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                </td>
                                <td class="text-end pe-0">
                                  <!--begin::Label-->
                                  <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                  <!--end::Label-->
                                </td>
                                <td class="text-end pe-12">
                                  <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                </td>
                                <td class="text-end pe-0">
                                  <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
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
                                    <div class="symbol symbol-50px me-3">
                                      <img src="assets/media/stock/600x600/img-39.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                      <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                      <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pe-0">
                                  <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                </td>
                                <td class="text-end pe-0">
                                  <!--begin::Label-->
                                  <span class="badge badge-light-success fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>9.2%</span>
                                  <!--end::Label-->
                                </td>
                                <td class="text-end pe-12">
                                  <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                </td>
                                <td class="text-end pe-0">
                                  <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
                                    <div class="symbol symbol-50px me-3">
                                      <img src="assets/media/stock/600x600/img-47.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                      <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                      <span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pe-0">
                                  <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                </td>
                                <td class="text-end pe-0">
                                  <!--begin::Label-->
                                  <span class="badge badge-light-success fs-base">
                                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>9.2%</span>
                                  <!--end::Label-->
                                </td>
                                <td class="text-end pe-12">
                                  <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                </td>
                                <td class="text-end pe-0">
                                  <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
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
                                    <div class="symbol symbol-50px me-3">
                                      <img src="assets/media/stock/600x600/img-48.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                      <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                      <span class="text-gray-500 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                    </div>
                                  </div>
                                </td>
                                <td class="text-end pe-0">
                                  <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                </td>
                                <td class="text-end pe-0">
                                  <!--begin::Label-->
                                  <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                  <!--end::Label-->
                                </td>
                                <td class="text-end pe-12">
                                  <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                </td>
                                <td class="text-end pe-0">
                                  <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
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
                      <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 14-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                  <!--begin::Col-->
                  <div class="col-xl-4">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                      <!--begin::Body-->
                      <div class="card-body d-flex flex-column flex-center">
                        <!--begin::Heading-->
                        <div class="mb-2">
                          <!--begin::Title-->
                          <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried
                            <br />new
                            <span class="fw-bolder">Invoice Manager?</span>
                          </h1>
                          <!--end::Title-->
                          <!--begin::Illustration-->
                          <div class="py-10 text-center">
                            <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                            <img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
                          </div>
                          <!--end::Illustration-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Links-->
                        <div class="text-center mb-1">
                          <!--begin::Link-->
                          <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_address" data-bs-toggle="modal">Try Now</a>
                          <!--end::Link-->
                          <!--begin::Link-->
                          <a class="btn btn-sm btn-light" href="apps/user-management/users/view.html">Learn More</a>
                          <!--end::Link-->
                        </div>
                        <!--end::Links-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                  </div>
                  <!--end::Col-->
                  <!--begin::Col-->
                  <div class="col-xl-8">
                    <!--begin::Timeline Widget 4-->
                    <div class="card h-md-100">
                      <!--begin::Card header-->
                      <div class="card-header position-relative py-0 border-bottom-1">
                        <!--begin::Card title-->
                        <h3 class="card-title text-gray-800 fw-bold">Active Tasks</h3>
                        <!--end::Card title-->
                        <!--begin::Tabs-->
                        <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4">
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <a class="nav-link btn btn-color-gray-500 flex-center px-3 active" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_day">
                              <!--begin::Title-->
                              <span class="nav-text fw-semibold fs-4 mb-3">Day</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_week">
                              <!--begin::Title-->
                              <span class="nav-text fw-semibold fs-4 mb-3">Week</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_month">
                              <!--begin::Title-->
                              <span class="nav-text fw-semibold fs-4 mb-3">Month</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                          </li>
                          <!--end::Nav item-->
                          <!--begin::Nav item-->
                          <li class="nav-item p-0 ms-0">
                            <a class="nav-link btn btn-color-gray-500 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_2022">
                              <!--begin::Title-->
                              <span class="nav-text fw-semibold fs-4 mb-3">2022</span>
                              <!--end::Title-->
                              <!--begin::Bullet-->
                              <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              <!--end::Bullet-->
                            </a>
                          </li>
                          <!--end::Nav item-->
                        </ul>
                        <!--end::Tabs-->
                      </div>
                      <!--end::Card header-->
                      <!--begin::Card body-->
                      <div class="card-body pb-0">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                          <!--begin::Tab pane-->
                          <div class="tab-pane active" id="kt_timeline_widget_4_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-4-blockui="true">
                            <div class="table-responsive pb-10">
                              <!--begin::Timeline-->
                              <div id="kt_timeline_widget_4_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                              <!--end::Timeline-->
                            </div>
                          </div>
                          <!--end::Tab pane-->
                          <!--begin::Tab pane-->
                          <div class="tab-pane" id="kt_timeline_widget_4_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                            <div class="table-responsive pb-10">
                              <!--begin::Timeline-->
                              <div id="kt_timeline_widget_4_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                              <!--end::Timeline-->
                            </div>
                          </div>
                          <!--end::Tab pane-->
                          <!--begin::Tab pane-->
                          <div class="tab-pane" id="kt_timeline_widget_4_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-4-blockui="true">
                            <div class="table-responsive pb-10">
                              <!--begin::Timeline-->
                              <div id="kt_timeline_widget_4_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                              <!--end::Timeline-->
                            </div>
                          </div>
                          <!--end::Tab pane-->
                          <!--begin::Tab pane-->
                          <div class="tab-pane" id="kt_timeline_widget_4_tab_2022" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                            <div class="table-responsive pb-10">
                              <!--begin::Timeline-->
                              <div id="kt_timeline_widget_4_4" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/"></div>
                              <!--end::Timeline-->
                            </div>
                          </div>
                          <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                      </div>
                      <!--end::Card body-->
                    </div>
                    <!--end::Timeline Widget 1-->
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
                  <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
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
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
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
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
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
                  <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
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
                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
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
                  <div class="fs-5 fw-semibold mb-2">Task
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
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
                  <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
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
                  <div class="fs-5 fw-semibold mb-2">New case
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
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
                  <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
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
                        <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                        <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
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
                  <div class="fs-5 fw-semibold mb-2">New order
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
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
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
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
                    <i class="ki-outline ki-information fs-7"></i>
                  </span></a>
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
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
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
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
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
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
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
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
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
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
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
              <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
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
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
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
              <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
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
          <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
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
  <!--begin::Modal - Create App-->
  <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2>Create App</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body py-lg-10 px-lg-10">
          <!--begin::Stepper-->
          <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
            <!--begin::Aside-->
            <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
              <!--begin::Nav-->
              <div class="stepper-nav ps-lg-10">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Details</h3>
                      <div class="stepper-desc">Name your App</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">2</span>
                    </div>
                    <!--begin::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Frameworks</h3>
                      <div class="stepper-desc">Define your app framework</div>
                    </div>
                    <!--begin::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Database</h3>
                      <div class="stepper-desc">Select the app database type</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Billing</h3>
                      <div class="stepper-desc">Provide payment details</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">5</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Completed</h3>
                      <div class="stepper-desc">Review and Submit</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
              </div>
              <!--end::Nav-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid py-lg-5 px-lg-15">
              <!--begin::Form-->
              <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required">App Name</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Category</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Options-->
                      <div class="fv-row">
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-primary">
                                <i class="ki-outline ki-compass fs-1 text-primary"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Quick Online Courses</span>
                              <span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="1" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-danger">
                                <i class="ki-outline ki-element-11 fs-1 text-danger"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Face to Face Discussions</span>
                              <span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="2" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-success">
                                <i class="ki-outline ki-timer fs-1 text-success"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Full Intro Training</span>
                              <span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="3" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end:Options-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Select Framework</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-warning">
                              <i class="ki-outline ki-html fs-2x text-warning"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">HTML5</span>
                            <span class="fs-7 text-muted">Base Web Projec</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-success">
                              <i class="ki-outline ki-react fs-2x text-success"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">ReactJS</span>
                            <span class="fs-7 text-muted">Robust and flexible app framework</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="2" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-danger">
                              <i class="ki-outline ki-angular fs-2x text-danger"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Angular</span>
                            <span class="fs-7 text-muted">Powerful data mangement</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="3" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-primary">
                              <i class="ki-outline ki-vue fs-2x text-primary"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Vue</span>
                            <span class="fs-7 text-muted">Lightweight and responsive framework</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="4" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                      <!--begin::Label-->
                      <label class="required fs-5 fw-semibold mb-2">Database Name</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Select Database Engine</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-success">
                              <i class="ki-outline ki-note text-success fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">MySQL</span>
                            <span class="fs-7 text-muted">Basic MySQL database</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-danger">
                              <i class="ki-outline ki-google text-danger fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Firebase</span>
                            <span class="fs-7 text-muted">Google based app data management</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" value="2" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-warning">
                              <i class="ki-outline ki-microsoft text-warning fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">DynamoDB</span>
                            <span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" value="3" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Name On Card</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                      <!--end::Label-->
                      <!--begin::Input wrapper-->
                      <div class="position-relative">
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                        <!--end::Input-->
                        <!--begin::Card logos-->
                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                          <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                          <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                          <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                        </div>
                        <!--end::Card logos-->
                      </div>
                      <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                      <!--begin::Col-->
                      <div class="col-md-8 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                        <!--end::Label-->
                        <!--begin::Row-->
                        <div class="row fv-row">
                          <!--begin::Col-->
                          <div class="col-6">
                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                              <option></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-6">
                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                              <option></option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                              <option value="2031">2031</option>
                              <option value="2032">2032</option>
                              <option value="2033">2033</option>
                              <option value="2034">2034</option>
                            </select>
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                          <span class="required">CVV</span>
                          <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                          </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                          <!--begin::Input-->
                          <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                          <!--end::Input-->
                          <!--begin::CVV icon-->
                          <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                            <i class="ki-outline ki-credit-cart fs-2hx"></i>
                          </div>
                          <!--end::CVV icon-->
                        </div>
                        <!--end::Input wrapper-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack">
                      <!--begin::Label-->
                      <div class="me-5">
                        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                      </div>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-semibold text-muted">Save Card</span>
                      </label>
                      <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div data-kt-stepper-element="content">
                  <div class="w-100 text-center">
                    <!--begin::Heading-->
                    <h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
                    <!--end::Description-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4 py-15">
                      <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
                    </div>
                    <!--end::Illustration-->
                  </div>
                </div>
                <!--end::Step 5-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-10">
                  <!--begin::Wrapper-->
                  <div class="me-2">
                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                      <i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Wrapper-->
                  <div>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                      <span class="indicator-label">Submit
                        <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                      <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Stepper-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Create App-->
  <!--begin::Modal - View Users-->
  <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
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
            <h1 class="mb-3">Browse Users</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
              <a href="#" class="link-primary fw-bold">Users Directory</a>.
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Users-->
          <div class="mb-15">
            <!--begin::List-->
            <div class="mh-375px scroll-y me-n7 pe-7">
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$50,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">max@kt.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$75,900</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$10,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox
                      <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$20,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">mik@pex.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$9,300</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$15,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild
                      <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$45,800</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$90,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$5,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$70,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">robert@benko.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$45,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
            </div>
            <!--end::List-->
          </div>
          <!--end::Users-->
          <!--begin::Notice-->
          <div class="d-flex justify-content-between">
            <!--begin::Label-->
            <div class="fw-semibold">
              <label class="fs-6">Adding Users by Team Members</label>
              <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="" checked="checked" />
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
  <!--end::Modal - View Users-->
  <!--begin::Modal - Create Project-->
  <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
      <!--begin::Modal content-->
      <div class="modal-content modal-rounded">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2>Create Project</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y m-5">
          <!--begin::Stepper-->
          <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Nav-->
              <div class="stepper-nav justify-content-center py-2">
                <!--begin::Step 1-->
                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Project Type</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Project Settings</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Budget</h3>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Build A Team</h3>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Set First Target</h3>
                </div>
                <!--end::Step 5-->
                <!--begin::Step 6-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Upload Files</h3>
                </div>
                <!--end::Step 6-->
                <!--begin::Step 7-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Completed</h3>
                </div>
                <!--end::Step 7-->
              </div>
              <!--end::Nav-->
              <!--begin::Form-->
              <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post">
                <!--begin::Type-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-7 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Type</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15" data-kt-buttons="true">
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                        <!--begin::Input-->
                        <input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="d-flex">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-profile-circle fs-3hx"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="ms-4">
                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Project</span>
                            <span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                        <!--begin::Input-->
                        <input class="btn-check" type="radio" name="project_type" value="2" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="d-flex">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-rocket fs-3hx"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="ms-4">
                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team Project</span>
                            <span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                        <span class="indicator-label">Project Settings</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Type-->
                <!--begin::Settings-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Settings</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Dropzone-->
                      <div class="dropzone" id="kt_modal_create_project_settings_logo">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <div class="ms-4">
                            <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                            <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                          </div>
                          <!--end::Info-->
                        </div>
                      </div>
                      <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Customer</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer">
                        <option></option>
                        <option value="1">Keenthemes</option>
                        <option value="2">CRM App</option>
                      </select>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Project Name</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify project name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" value="StockPro Mobile App" name="settings_name" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Project Description</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description" name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Release Date</label>
                      <!--end::Label-->
                      <!--begin::Wrapper-->
                      <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
                        <!--end::Input-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="required fs-6 fw-semibold">Notifications</label>
                          <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="d-flex">
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid me-10">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="settings_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Email</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="settings_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Phone</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                      </div>
                      <!--begin::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">Project Type</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="settings-next">
                        <span class="indicator-label">Budget</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Settings-->
                <!--begin::Budget-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Budget</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Setup Budget</span>
                        <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-outline ki-bank fs-3 me-3&quot;&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Dialer-->
                      <div class="position-relative w-lg-250px" id="kt_modal_create_project_budget_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                        <!--begin::Decrease control-->
                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                          <i class="ki-outline ki-minus-circle fs-1"></i>
                        </button>
                        <!--end::Decrease control-->
                        <!--begin::Input control-->
                        <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget_setup" readonly="readonly" value="$50" />
                        <!--end::Input control-->
                        <!--begin::Increase control-->
                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                          <i class="ki-outline ki-plus-circle fs-1"></i>
                        </button>
                        <!--end::Increase control-->
                      </div>
                      <!--end::Dialer-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                      <!--end::Label-->
                      <!--begin::Row-->
                      <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-12 col-xxl-6">
                          <!--begin::Option-->
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                            <!--begin::Radio-->
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                              <input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                              <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
                              <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                            </span>
                            <!--end::Info-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-12 col-xxl-6">
                          <!--begin::Option-->
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                            <!--begin::Radio-->
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                              <input class="form-check-input" type="radio" name="budget_usage" value="2" />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                              <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
                              <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                            </span>
                            <!--end::Info-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="budget-previous">Project Settings</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="budget-next">
                        <span class="indicator-label">Build Team</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Budget-->
                <!--begin::Team-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Build a Team</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Add project memnbers by name or email.." name="invite_teammates" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <div class="fs-6 fw-semibold mb-2">Team Members</div>
                      <!--end::Label-->
                      <!--begin::Users-->
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">melody@altbox.com</div>
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">brian@exchange.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">olivia@corpmail.com</div>
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
                              <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
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
                              <div class="fw-semibold text-muted">dam@consilting.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">miller@mapple.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
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
                              <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
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
                              <div class="fw-semibold text-muted">ethan@loop.com.au</div>
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
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
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
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack mb-15">
                      <!--begin::Label-->
                      <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                      </div>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                      </label>
                      <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="team-previous">Budget</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="team-next">
                        <span class="indicator-label">Set Target</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Team-->
                <!--begin::Targets-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Set First Target</h1>
                      <!--end::Title-->
                      <!--begin::Title-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="fs-6 fw-semibold mb-2">Target Title</label>
                      <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="Project Launch" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                      <!--begin::Col-->
                      <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Assign</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                          <option></option>
                          <option value="1">Karina Clark</option>
                          <option value="2" selected="selected">Robert Doe</option>
                          <option value="3">Niel Owen</option>
                          <option value="4">Olivia Wild</option>
                          <option value="5">Sean Bean</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                        <div class="position-relative d-flex align-items-center">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                          <!--end::Icon-->
                          <!--begin::Datepicker-->
                          <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
                          <!--end::Datepicker-->
                        </div>
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="fs-6 fw-semibold mb-2">Target Details</label>
                      <textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="required fs-6 fw-semibold mb-2">Tags</label>
                      <input class="form-control form-control-solid" value="Important, Urgent" name="target_tags" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Notifications</label>
                          <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="d-flex">
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid me-10">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="target_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Email</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="target_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Phone</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">Build a Team</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="targets-next">
                        <span class="indicator-label">Upload Files</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Targets-->
                <!--begin::Files-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Upload Files</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Dropzone-->
                      <div class="dropzone" id="kt_modal_create_project_files_upload">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <div class="ms-4">
                            <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                            <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                          </div>
                          <!--end::Info-->
                        </div>
                      </div>
                      <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                      <!--End::Label-->
                      <!--begin::Files-->
                      <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/pdf.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica Technical Requirements</a>
                              <div class="fw-semibold text-muted">230kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/doc.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree CURD draftplan</a>
                              <div class="fw-semibold text-muted">3.6mb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/css.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User CRUD Styles</a>
                              <div class="fw-semibold text-muted">85kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/ai.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Initial Logo</a>
                              <div class="fw-semibold text-muted">40kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/tif.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower Hill Bilboard</a>
                              <div class="fw-semibold text-muted">27mb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                      </div>
                      <!--end::Files-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="files-previous">Set First Target</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="files-next">
                        <span class="indicator-label">Complete</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Files-->
                <!--begin::Complete-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12 text-center">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Created!</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check how to create project</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center pb-20">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Project</button>
                      <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Project</a>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                      <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
                    </div>
                    <!--end::Illustration-->
                  </div>
                </div>
                <!--end::Complete-->
              </form>
              <!--end::Form-->
            </div>
            <!--begin::Container-->
          </div>
          <!--end::Stepper-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Create Project-->
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
            <div class="text-muted fw-semibold fs-5">If you need more info, please check
              <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
            </div>
          </div>
          <!--end::Heading-->
          <!--begin::Plans-->
          <div class="d-flex flex-column">
            <!--begin::Nav group-->
            <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
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
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
                        <div class="fw-semibold opacity-75">Best for startups</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
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
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
                        <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
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
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                          <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                        </div>
                        <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
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
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
                        <div class="fw-semibold opacity-75">Requet a custom license</div>
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
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
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
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
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
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
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
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for corporations</div>
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
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
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
  <!--begin::Modal - New Address-->
  <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Form-->
        <form class="form" action="#" id="kt_modal_new_address_form">
          <!--begin::Modal header-->
          <div class="modal-header" id="kt_modal_new_address_header">
            <!--begin::Modal title-->
            <h2>Add New Address</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <i class="ki-outline ki-cross fs-1"></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
              <!--begin::Notice-->
              <!--begin::Notice-->
              <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                  <!--begin::Content-->
                  <div class="fw-semibold">
                    <h4 class="text-gray-900 fw-bold">Warning</h4>
                    <div class="fs-6 text-gray-700">Updating address may affter to your
                      <a href="#">Tax Location</a>
                    </div>
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Notice-->
              <!--end::Notice-->
              <!--begin::Input group-->
              <div class="row mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="required fs-5 fw-semibold mb-2">First name</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="first-name" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--end::Label-->
                  <label class="required fs-5 fw-semibold mb-2">Last name</label>
                  <!--end::Label-->
                  <!--end::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="last-name" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                  <span class="required">Country</span>
                  <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                  </span>
                </label>
                <!--end::Label-->
                <!--begin::Select-->
                <select name="country" data-control="select2" data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select a Country..." class="form-select form-select-solid">
                  <option value="">Select a Country...</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia, Plurinational State of</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Côte d'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curaçao</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="PF">French Polynesia</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="HT">Haiti</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthélemy</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin (French part)</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten (Dutch part)</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="KR">South Korea</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela, Bolivarian Republic of</option>
                  <option value="VN">Vietnam</option>
                  <option value="VI">Virgin Islands</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
                <!--end::Select-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="required fs-5 fw-semibold mb-2">Address Line 1</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="address1" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="required fs-5 fw-semibold mb-2">Address Line 2</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="address2" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2">Town</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="city" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row g-9 mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="fs-5 fw-semibold mb-2">State / Province</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-solid" placeholder="" name="state" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="fs-5 fw-semibold mb-2">Post Code</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-solid" placeholder="" name="postcode" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-5">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack">
                  <!--begin::Label-->
                  <div class="me-5">
                    <!--begin::Label-->
                    <label class="fs-5 fw-semibold">Use as a billing adderess?</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                    <!--end::Input-->
                  </div>
                  <!--end::Label-->
                  <!--begin::Switch-->
                  <label class="form-check form-switch form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input" name="billing" type="checkbox" value="1" checked="checked" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <span class="form-check-label fw-semibold text-muted">Yes</span>
                    <!--end::Label-->
                  </label>
                  <!--end::Switch-->
                </div>
                <!--begin::Wrapper-->
              </div>
              <!--end::Input group-->
            </div>
            <!--end::Scroll-->
          </div>
          <!--end::Modal body-->
          <!--begin::Modal footer-->
          <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
              <span class="indicator-label">Submit</span>
              <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
          </div>
          <!--end::Modal footer-->
        </form>
        <!--end::Form-->
      </div>
    </div>
  </div>
  <!--end::Modal - New Address-->
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
            <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
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
                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
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
                        <div class="fw-semibold text-muted">melody@altbox.com</div>
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
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">sean@dellito.com</div>
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
                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
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
                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
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
                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">emma@intenso.com</div>
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
                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
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
                        <div class="fw-semibold text-muted">robert@benko.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
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
                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
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
                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
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
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                </div>
                <!--end::Users-->
                <!--begin::Actions-->
                <div class="d-flex flex-center mt-15">
                  <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                  <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Results-->
              <!--begin::Empty-->
              <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Message-->
                <div class="fw-semibold py-10">
                  <div class="text-gray-600 fs-3 mb-2">No users found</div>
                  <div class="text-muted fs-6">Try to search by username, full name or email...</div>
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
            <div class="text-muted fw-semibold fs-5">If you need more info, please check out
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
                    <div class="fw-semibold text-muted">melody@altbox.com</div>
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
                    <div class="fw-semibold text-muted">brian@exchange.com</div>
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
                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
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
                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
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
                    <div class="fw-semibold text-muted">dam@consilting.com</div>
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
                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
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
                    <div class="fw-semibold text-muted">miller@mapple.com</div>
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
                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
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
                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
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
              <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
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
  <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <!--end::Vendors Javascript-->
  <!--begin::Custom Javascript(used for this page only)-->
  <script src="assets/js/widgets.bundle.js"></script>
  <script src="assets/js/custom/widgets.js"></script>
  <script src="assets/js/custom/apps/chat/chat.js"></script>
  <script src="assets/js/custom/utilities/modals/create-app.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
  <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
  <script src="assets/js/custom/utilities/modals/new-address.js"></script>
  <script src="assets/js/custom/utilities/modals/users-search.js"></script>
  <!--end::Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>