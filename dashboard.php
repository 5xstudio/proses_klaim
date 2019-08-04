<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">TCS System</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="function.php?type=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    <span style="color:white;font-weight;bold;font-size:1.5em;"><?= ucwords($_SESSION['nama']) ?></span>
                    <br>
                    <span style="color:white;font-weight;bold;font-size:1em;"><?= $_SESSION['akses'] ?></span>
                </li>


                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Monitoring Klaim</a>
                </li>
                <li>
                    <a href="?page=klaim"><i class="fa fa-flask fa-3x"></i> Proses Klaim</a>
                </li>

                <li <?php if ($page == "ban" || $page == "kerusakan" || $page == "distributor" || $page == "toko" || $page == "karyawan") {

                        echo 'class="active"';
                    }
                    ?>>

                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Data Master<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>
                            <a href="?page=ban"><i class="fa fa-edit fa-1x"></i>Data Ban</a>
                        </li>
                        <li>
                            <a href="?page=kerusakan"><i class="fa fa-edit fa-1x"></i>Data Kerusakan</a>
                        </li>
                        <li>
                            <a href="?page=distributor"><i class="fa fa-edit fa-1x"></i>Data Distributor</a>
                        </li>
                        <li>
                            <a href="?page=toko"><i class="fa fa-edit fa-1x"></i>Data Toko</a>
                        </li>
                        <!-- <li>
                            <a href="?page=karyawan"><i class="fa fa-edit fa-1x"></i>Data Karyawan</a>
                        </li> -->
                </li>
            </ul>

            <li>
                <a href="#"><i class="fa fa-laptop fa-3x"></i> Pengaturan </a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="?page=user"><i class="fa fa-edit fa-1x"></i>User</a>
                    </li>
                    <li>
                        <a href="?page=summary"><i class="fa fa-edit fa-1x"></i>Summary</a>
                    </li>
                </ul>
            </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <?php

                    if ($page == "pengaturan") {
                        if ($aksi == "") {
                            include 'page/pengaturan/pengaturan.php';
                        }
                    } else if ($page == "klaim") {
                        if ($aksi == "") {
                            include 'page/proses/proses.php';
                        } elseif ($aksi == "tambah") {
                            include 'page/proses/tambah.php';
                        } elseif ($aksi == "edit") {
                            include 'page/proses/tambah.php';
                        } elseif ($aksi == "import") {
                            include 'page/proses/import.php';
                        } elseif ($aksi == "detail") {
                            include 'page/proses/detail.php';
                        } elseif ($aksi == "edit_detail") {
                            include 'page/proses/edit_detail.php';
                        } elseif ($aksi == 'hapus_detail') {
                            include 'page/proses/action.php';
                        }
                    } else if ($page == "ban") {
                        if ($aksi == "") {
                            include 'page/master/ban/ban.php';
                        } elseif ($aksi == "tambah") {
                            include 'page/master/ban/tambah.php';
                        } elseif ($aksi == "edit") {
                            include 'page/master/ban/edit.php';
                        } elseif ($aksi == "hapus") {
                            include 'page/master/ban/hapus.php';
                        }
                    } else if ($page == "distributor") {
                        if ($aksi == "") {
                            include 'page/master/distributor/distributor.php';
                        } elseif ($aksi == "tambah") {
                            include 'page/master/distributor/tambah_distributor.php';
                        } elseif ($aksi == "edit") {
                            include 'page/master/distributor/edit_distributor.php';
                        } elseif ($aksi == "hapus") {
                            include 'page/master/distributor/hapus_distributor.php';
                        }
                    } else if ($page == "kerusakan") {
                        if ($aksi == "") {
                            include 'page/master/kerusakan/kerusakan.php';
                        } elseif ($aksi == "tambah") {
                            include 'page/master/kerusakan/tambah_kerusakan.php';
                        } elseif ($aksi == "edit") {
                            include 'page/master/kerusakan/edit_kerusakan.php';
                        } elseif ($aksi == "hapus") {
                            include 'page/master/kerusakan/hapus_kerusakan.php';
                        }
                    } else if ($page == "toko") {
                        if ($aksi == "") {
                            include 'page/master/toko/toko.php';
                        } elseif ($aksi == "tambah") {
                            include 'page/master/toko/tambah_toko.php';
                        } elseif ($aksi == "edit") {
                            include 'page/master/toko/edit_toko.php';
                        } elseif ($aksi == "hapus") {
                            include 'page/master/toko/hapus_toko.php';
                        }
                    } else if ($page == "karyawan") {
                        if ($aksi == "") {
                            include 'page/master/karyawan/karyawan.php';
                        }
                    } else if ($page == "user") {
                        if ($aksi == "") {
                            include 'page/setting/user/user.php';
                        } elseif ($aksi == "edit") {
                            include 'page/setting/user/edit.php';
                        }
                    } else if ($page == "pengaturan") {
                        if ($aksi == "") {
                            include 'page/master/karyawan/karyawan.php';
                        }
                    } else {
                        include 'page/monitoring/monitoring.php';
                    }

                    ?>


                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->