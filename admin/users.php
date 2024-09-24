<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'config.php';

// Mengubah query menjadi dari tabel users
$result = mysqli_query($koneksi, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Palmeera Lounge | Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
      <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li>
              <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> 
                  <i data-feather="align-justify"></i>
                </a>
            </li>
            <li>
              <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Palmeera Lounge</span>
            </a>
          </div>
          <ul class="sidebar-menu"> 
            <li>
              <a href="dashboard.php" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a class="nav-link" href="news.php"><i class="fas fa-newspaper"></i><span>News</span></a>
            </li> 
            <li>
              <a class="nav-link" href="partnership.php"> <i class="fas fa-building"></i></i><span>Partnership</span></a>
            </li>
            <li>
              <a class="nav-link" href="gallery.php"> <i class="fas fa-images"></i></i><span>Gallery</span></a>
            </li>
            <li>
              <a class="nav-link" href="newsletter.php"> <i class="fas fa-users"></i></i><span>Newsletter</span></a>
            </li>
            <li>
              <a class="nav-link" href="message.php"> <i class="fas fa-envelope"></i></i><span>Message</span></a>
            </li> 
            <li class="dropdown active">
              <a class="nav-link" href="users.php"> <i class="fas fa-users"></i></i><span>Users</span></a>
            </li>         
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div><h3>Users</h3></div> <!-- Mengubah dari News menjadi Users -->
                <div class="card">
                  <div class="card-header">
                    <div><a href="users/addUsers.php" type="button" class="btn btn-primary"> <i class="far fa-user"></i> Add User</a></div> <!-- Mengubah tombol ke Add User -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php while ($row = mysqli_fetch_assoc($result)) :  ?>
                          <tr>
                            <td><?= $row['id'] ?></td> <!-- Mengubah title menjadi username -->
                            <td><?= $row['email'] ?></td> <!-- Mengubah title menjadi username -->
                            <td><?= $row['password'] ?></td> <!-- Mengubah category menjadi email -->
                            <td>
                                <a href="users/editUsers.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a>
                            </td>
                          </tr>
                          <?php endwhile;  ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
        <a href="#">IT Development</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
</html>
