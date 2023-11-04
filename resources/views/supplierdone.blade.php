<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Supplier -Aanganwadi inventory management</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
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
    <link rel="stylesheet" href="/assets/css/fonts/icofont.css">
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Anganwadi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>End Search Bar -->

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
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Om Patel</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Om Patel</h6>
              <span>principal</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-house"></i>
          <span>Home</span> 
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-card-list"></i>
          <span>Pending</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-card-list"></i>
          <span>Done Deliveries</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>logout</span>
        </a>
      </li><!-- End Error 404 Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <!-- Main section ---------------- -->
  <main id="main" class="main">
    <div class="">
      <div class="card-body">
        <h5 class="card-title"><i class="ri-filter-off-line"></i> Search Anganwadi</h5>

        <!-- Browser Default Validation -->
        <form class="row g-3">
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name or Center </label>
            <input type="text" class="form-control" id="validationDefault01" required>
          </div>
        
          <div class="col-md-3">
            <label for="validationDefault04" class="form-label">city</label>
            <select class="form-select" id="validationDefault04" required>
              <option selected disabled value="">Area</option>
              <option>City 2</option>
              <option>City 2</option>
              <option>City 2</option>
              <option>City 2</option>
            </select>
          </div>
          <!-- <div class="col-md-2">
            <label for="validationDefault05" class="form-label">id</label>
            <input type="text" class="form-control" id="validationDefault05" required>
          </div> -->
        </form>
      </div>
    </div>

    <div class="addbutton card-body" style="margin: 20px auto;">
      <!-- Button trigger modal -->

      <!-- <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered"> <i
          class="bx bxs-plus-circle"></i> Add Anganwadi</button> -->
      <!-- Modal -->
      <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add AnganWadi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="col-12">
                  <label for="yourName" class="form-label">Anganwadi's Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div>

                <div class="col-12" style="display: inline-block;">
                  <div class="col-md-3" style="display: inline-block;">
                    <label for="yourName" class="form-label">Center Name</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Center name!</div>
                  </div>
                  <div class="col-md-3" style="display: inline-block;margin-left: 50px;">
                    <label for="yourName" class="form-label">Code</label>
                    <input type="number" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Code of Your Anganwadi!</div>
                  </div>
                </div>


                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="yourEmail" required>
                  <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                </div>

                <div class="col-12">
                  <label for="yourUsername" class="form-label">Owner/managers Name</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="bi bi-people-fill"></i></span>
                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="Contact" class="form-label">Phone Number</label>
                  <div class="input-group has-validation">

                    <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-telephone-fill"></i></span>
                    <input type="tel" name="phone" class="form-control" id="phone" required>
                    <div class="invalid-feedback">Please choose a username.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label"> <i class="bi bi-geo-alt-fill"></i> Anganwadi's
                    location</label>

                  <textarea name="adddress" id="adddress" rows="2" class="form-control" required></textarea>
                  <div class="invalid-feedback">Address is required!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">City</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">City is required!</div>
                </div>
                <div class="col-12">
                  <label for="yourName" class="form-label">Password</label>
                  <input type="text" name="password" class="form-control" id="password" required>
                  <div class="invalid-feedback">password is required!</div>
                </div>
                <div class="col-12">
                  <label for="yourName" class="form-label">Confirm Password</label>
                  <input type="password" name="password" class="form-control" id="cpassword" required>
                  <div class="invalid-feedback">password is required!</div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Create Now</button>
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal-->
      <!-- Vertically centered modal -->
    </div>

    <div class="card-body">
      <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Assigned Stock</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead class="table-success">
          <tr>
            <th></th>
            <th scope="col">Center Code</th>
            <th scope="col">Aganwadi</th>
            <th scope="col">Area</th>
            <th scope="col">Category</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Pstocks as $stocks)
            <tr>
              <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
              <th scope="row">{{$stocks->center_id}}</th>
              <td>{{$stocks->item_cat}}</td>
              <td>{{$stocks->item_name}}</td>
              <td>{{$stocks->qnt}}</td>
              <td>{{$stocks->created_at}}</td>
              <td>Pending</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

  
    <div class="modal fade" id="grandModal" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalopenLabel">AnganWadi name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul class="list">
              <li class="list-group-item" style="margin-bottom: 10px;"><i class="ri-price-tag-3-line"></i> <b>Date </b> : 23-02-2021</li>
                
              <table class="table table-hover">
                <thead class="table-success">
                  <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Food</td>
                      <td>Apples</td>
                      <td>453 </td>
                    </tr>
                  <tr>
                    <tr>
                      <td>Food</td>
                      <td>wheat</td>
                      <td>500 </td>
                    </tr>
                  <tr>
                    <tr>
                      <td>Food</td>
                      <td>wheat</td>
                      <td>500 </td>
                    </tr>
                 
        
                </tbody>
              </table>
        
            
            </ul><!-- End List group With Icons -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Grant</button>
          </div>
        </div>
      </div>
    </div>
  
    <nav style="float: right;margin: auto 5%;" aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <span class="page-link">2</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </main>
  <!-- Button trigger modal -->



  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    
  </footer> -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>