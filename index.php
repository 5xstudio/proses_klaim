
<?php 
    $conn = mysqli_connect("localhost","root","","db_klaim");


 ?>


<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>



<?php
$page = $_GET['page'];
$aksi = $_GET['aksi'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tire Claim Sistem</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
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
font-size: 16px;">&nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Monitoring Klaim</a>
                    </li>
                    <li>
                        <a  href="?page=klaim"><i class="fa fa-flask fa-3x"></i> Proses Klaim</a>
                    </li>
                   
                    <li  <?php if($page == "ban" || $page == "kerusakan" || $page == "distributor" || $page == "toko" || $page == "karyawan"){ 

						echo 'class="active"';
					}
                    	?>
                    >
               
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
                            <li>
                                <a href="?page=karyawan"><i class="fa fa-edit fa-1x"></i>Data Karyawan</a>
                            </li>
                      </li>  
                        </ul>

                    <li>
                        <a  href="?page=pengaturan"><i class="fa fa-laptop fa-3x"></i> Pengaturan </a>
                    </li>   	
                </ul> 
            </div>    
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    	<?php 

                    		

                    		if ($page == "pengaturan") {
                    			if ($aksi == "") {
                    				include 'page/pengaturan/pengaturan.php';
                    			}
                    		} 
                    		else if ($page == "klaim") {
                    			if ($aksi == "") {
                    		 		include 'page/proses/proses.php';
                    			}
                    		}
                    		else if ($page == "ban") {
                    			if ($aksi == "") {
                    		 		include 'page/master/ban/ban.php';
                    			}elseif ($aksi == "tambah") {
                                    include 'page/master/ban/tambah.php';
                                }elseif ($aksi == "edit") {
                                    include 'page/master/ban/edit.php';
                                }elseif ($aksi == "hapus") {
                                    include 'page/master/ban/hapus.php';
                                }
                    		}
                    		else if ($page == "distributor") {
                    			if ($aksi == "") {
                    		 		include 'page/master/distributor/distributor.php';
                    			}elseif ($aksi == "tambah") {
                                    include 'page/master/distributor/tambah_distributor.php';
                                }elseif ($aksi == "edit") {
                                    include 'page/master/distributor/edit_distributor.php';
                                }elseif ($aksi == "hapus") {
                                    include 'page/master/distributor/hapus_distributor.php';
                                }
                    		}
                    		else if ($page == "kerusakan") {
                    			if ($aksi == "") {
                    		 		include 'page/master/kerusakan/kerusakan.php';
                                }elseif ($aksi == "tambah") {
                                    include 'page/master/kerusakan/tambah_kerusakan.php';
                    			}elseif ($aksi == "edit") {
                                    include 'page/master/kerusakan/edit_kerusakan.php';
                                }elseif ($aksi == "hapus") {
                                    include 'page/master/kerusakan/hapus_kerusakan.php';
                                }
                    		}
                    		else if ($page == "toko") {
                    			if ($aksi == "") {
                    		 		include 'page/master/toko/toko.php';
                    			}elseif ($aksi == "tambah") {
                                    include 'page/master/toko/tambah_toko.php';
                                }elseif ($aksi == "edit") {
                                    include 'page/master/toko/edit_toko.php';
                                }elseif ($aksi == "hapus") {
                                    include 'page/master/toko/hapus_toko.php';
                                }
                    		}
                            else if ($page == "karyawan") {
                                if ($aksi == "") {
                                    include 'page/master/karyawan/karyawan.php';
                                }
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
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
