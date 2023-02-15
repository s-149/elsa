
<?php
    
    // metta
    $description="Sistem Pendukung Keputusan";
    $author="MR S-149 dan Team Peneliti Nusaputra Sukabumi (Sabar, Elsa Yulia Rahman, Atika Fauzia Akbari, Dea Siti Rahima Juliansa";
    $keyword="SPK ";

    // title
    $title="SPK-SAW";

    // icon
    $icon="gambar/favicon.ico";

    $Tahun_Sekarang=date('Y');

    // jumlah user

    $login="select * from `user` ";
    $query=mysqli_query($koneksi,$login);
    $jml_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_user++;
            }

    // kriteria

    $BobotMenu=mysqli_fetch_array(mysqli_query($koneksi,"select * from `kriteria` where Kriteria='Menu' "));

    $BobotReputasi=mysqli_fetch_array(mysqli_query($koneksi,"select * from `kriteria` where Kriteria='Reputasi' "));

    $BobotHarga=mysqli_fetch_array(mysqli_query($koneksi,"select * from `kriteria` where Kriteria='Harga' "));

    $BobotJarak=mysqli_fetch_array(mysqli_query($koneksi,"select * from `kriteria` where Kriteria='Jarak' "));

    $mm=mysqli_fetch_array(mysqli_query($koneksi,"select * from `bobot` "));
    

// kriteria

    $datarumahmakan=mysqli_fetch_array(mysqli_query($koneksi,"select * from `datarumahmakan` "));

    //********************************************************************//

//Lakukan Normalisasi dengan rumus pada langkah 2
    //Cari Max atau min dari tiap kolom Matrik
    $crMax = mysqli_query($koneksi, "SELECT max(Menu) as maxK1, 
                        max(Reputasi) as maxK2,
                        max(Harga) as maxK3,
                        max(Jarak) as maxK4
                        FROM `bobot`");
    $max = mysqli_fetch_array($crMax);


    $crMin = mysqli_query($koneksi, "SELECT min(Menu) as minK1, 
                        min(Reputasi) as minK2,
                        min(Harga) as minK3,
                        min(Jarak) as minK4
                        FROM `bobot`");
    $min = mysqli_fetch_array($crMin);



 

?> 