<?php
  error_reporting(0);
    session_start();
    
    include "koneksi.php";
    include "variabel.php";
    include "kepala.php";

    if($_SESSION['admin'] || $_SESSION['user']){
        $_Akun=$_SESSION['user'];

      // memanggil data login tiap user

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$_Akun'"));
      // memanggil data login tiap user

      $biodata=mysqli_fetch_array(mysqli_query($koneksi,"select * from `pengajar` where `Nik_Pengajar` ='$_Akun'"));

?>


<body>
    <div id="">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div style=" padding: 10px 50px 5px 50px; font-size: 18px; text-align: center; " >
                <a href="?page="> Home</a>
                <a href="?page=rumahmakan"> Rumah Makan</a>
                <a href="?page=datarumahmakan"> Data Rumah Makan</a>
                <a href="?page=kriteria"> Kriteria</a>
                <a href="?page=perankingan"> Perankingan</a>
                <a onclick="return confirm('yakin ingin meninggalkan halaman ini?')" href="logout.php" title="Keluar">Keluar</a>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     	
                     	<?php

                     		$page = $_GET['page'];
                     		$aksi = $_GET['aksi'];


                     		if ($page=="") 
                              {
                                include "home.php";
                              }
                        elseif ($page == "rumahmakan" ) 
                              {
                                if ($aksi == "") {
                                    include "page/rumahmakan/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/rumahmakan/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/rumahmakan/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/rumahmakan/hapus.php";
                                }
                              }
                        elseif ($page == "datarumahmakan" ) 
                              {
                                if ($aksi == "") {
                                    include "page/datarumahmakan/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/datarumahmakan/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/datarumahmakan/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/datarumahmakan/hapus.php";
                                }
                              }
                        elseif ($page == "kriteria" ) 
                              {
                                if ($aksi == "") {
                                    include "page/kriteria/index.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/kriteria/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/kriteria/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/kriteria/hapus.php";
                                }
                              }
                        elseif ($page == "perankingan" ) 
                              {
                                if ($aksi == "") {
                                    include "page/perankingan/index.php";
                                }elseif ($aksi == "detail") {
                                    include "page/perankingan/detail.php";
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

<?php

    include "kaki.php";
    }else{
        header("location:login.php");
    }
?>
