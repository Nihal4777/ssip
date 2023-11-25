<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AanganStore inventory management - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="/assets/css/fonts/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/fonts/icofont.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
  <style>
     #google_translate_element {
            margin: auto;
            width: 100%;
            padding: 10px;
            text-align: center;
            
        }
        #google_translate_element .goog-te-combo
        {
          width: 80%;
          margin: 2% auto;
          
        }
        #google_translate_element select
        {
          height: 30px;
          margin: 10px 50px;
        }
        #google_translate_element span
      {
        display: none;
      }
        .redbutton
        {
          z-index: 1;
          right:0;
          bottom: 0;
          margin: 30px;
          position: fixed;
          border-radius: 50%;
          font-size: 25px;
          border: none;
          background-color: green;
        }
       
.actives
{
  color:#F05454;
}
.list-group-horizontal {
  flex-direction: column !important;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assets/img/logo_new.png" alt="AanganStore">
        <span class="d-none d-lg-block">AanganStore</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
      
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">@role('admin')Admin
              @endrole
              @role('teacher')Center
              @endrole</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>@role('admin')Admin
                  @endrole
                  @role('teacher')Center
                  @endrole</h6>
              <span></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  
  <!-- Translate Button -->
  <button type="submit" class="btn btn-primary redbutton"data-bs-toggle="modal" data-bs-target="#verticalycentered"> <i class="bi bi-translate"></i></button>
        <!-- Modal -->
        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Translate Another Language</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div id="google_translate_element"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            { pageLanguage: 'en' },
            'google_translate_element'
        );
    }
</script>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" form="this">Apply Now</button>
                </div>
              </div>
            </div>
          </div><!-- End Vertically centered Modal-->
        

  @role("admin")
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">



      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" aria-expanded="true">
          <i class="bi bi-menu-button-wide"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav" style="">
          <li class="Aanganwadis">
            <a href="/centers">
              <i class="bi bi-circle"></i><span>Aanganwadis</span>
            </a>
          </li>
        
          <li class="Suppliers">
            <a href="/items">
              <i class="bi bi-circle"></i><span>Suppliers</span>
            </a>
          </li>
          <li class="Categories">
            <a href="/categories">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li class="Items">
            <a href="/items">
              <i class="bi bi-circle"></i><span>Items</span>
            </a>
          </li>

         
        
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>logout</span>
        </a>
      </li><!-- End Error 404 Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  @endrole
  @role('teacher')
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item Home">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-house"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item consumption">
        <a class="nav-link collapsed" href="/consumption">
          <i class="bi bi-newspaper"></i>
          <span>Enter consumption</span>
        </a>
      </li>
      <li class="nav-item consumptionh">
        <a class="nav-link collapsed" href="/consumption/history">
          <i class="bi bi-clock-history"></i>
          <span>Consumption history</span>
        </a>
      </li>
      <li class="nav-item consumptionh">
        <a class="nav-link collapsed" href="/purchase/history">
          <i class="bi bi-clock-history"></i>
          <span>Purchase history</span>
        </a>
      </li>
      <li class="nav-item Purchases">
        <a class="nav-link collapsed" href="/purchase">
          <i class="bi bi-file-earmark-bar-graph"></i>
          <span>Enter Purchases</span>
        </a>
      </li>
      <li class="nav-item Stock">
        <a class="nav-link collapsed" href="/current">
          <i class="bi bi-inboxes-fill"></i>
          <span>Current Stock</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item AStock">
        <a class="nav-link collapsed" href="/assigned">
          <i class="bi bi-journal-album"></i>
          <span>Assigned Stock</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item Deliveries">
        <a class="nav-link collapsed" href="/deliveries">
          <i class="bi bi-pin-map-fill"></i>
          <span>Past Deliveries</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>logout</span>
        </a>
      </li><!-- End Error 404 Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
  @endrole




  <main id="main" class="main">
    @if ($errors->any())
    <div class="alert alert-danger solid alert-dismissible fade show mt-3">
        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span aria-hidden="true">×</span>
        </button> --}}
        <ul class="mb-0 pl-3">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif
@if(session("success"))
    <div class="alert alert-success solid alert-dismissible fade show">
        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> --}}
        {{ session("success") }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        </button>
    </div>
@endif
  @yield('main')
</main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Aanganwadi Inventory Management</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit"></script>
  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  @stack("scripts")
</body>

</html>
