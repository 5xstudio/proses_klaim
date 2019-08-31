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
                    <a href="index.php"><i class="fa fa-dashboard"></i> Monitoring Klaim</a>
                </li>
                <li>
                    <a href="?page=klaim"><i class="fa fa-flask"></i> Proses Klaim</a>
                </li>
                <?php if($_SESSION['akses'] == 'TS') : ?>
                <li <?php if ($page == "ban" || $page == "kerusakan" || $page == "distributor" || $page == "toko" || $page == "karyawan") {

                        echo 'class="active"';
                    }
                    ?>>

                    <a href="#"><i class="fa fa-sitemap"></i> Data Master</a>

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
                    </ul>
                    <a href="#"><i class="fa fa-laptop"></i> Pengaturan </a>

                    <ul class="nav nav-second-level">

                        <li>
                            <a href="?page=user"><i class="fa fa-edit fa-1x"></i>User</a>
                        </li>
                        <li>
                            <a href="?page=summary"><i class="fa fa-edit fa-1x"></i>Summary</a>
                        </li>
                    </ul>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->