<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>

      <!-- Favicons -->
  <link href="foto\logo.png" rel="icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="css/stylemain2.css" rel="stylesheet">

    @stack('styles')

</head>

<body>
    <div class="sidebar" id="mySidebar">
        <ion-icon name="menu-outline" id="btnclose" onclick="w3_close() ">></ion-icon>
        <div class="top">
            Toko Mata Dewa
        </div>  
        <ul>
            <li><a href ="/" span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Lihat Data Karyawan</span></a></li>
            <li><a href ="/inputkaryawan" span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Input Data Karyawan</span></a></li></a></li>
            <li><a href ="/editkaryawan" span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Edit Data Karyawan</span></a></li></a></li>
            <li><a href ="/hapuskaryawan" span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Hapus Data Karyawan</span></a></li>
            <li><a href ="/laporanpenjualan"span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Laporan Penjualan</span></a></li></a></li>
            <li><a href ="/laporankeuangan"span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Laporan Keuangan</span></a></li></a></li>
            <li><a href ="/logout" span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Keluar</span></a></li></a></li> 
        </ul>
        <div class="bottom">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 2 | Rekayasa Perangkat Lunak</span></strong>
              </div>
        </div>
    </div>

    <div id="main">
        <section id="hero">
            <div class="container">
                <ion-icon name="menu-outline" class="fas fa-bars" id="btn" onclick="w3_open()">&#9776;></ion-icon>
                @yield('container')
            </div>
        </section>
    </div>
    
    <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "25%";
                document.getElementById("mySidebar").style.width = "25%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("btn").style.display = 'none'
            }
            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("btn").style.display = "inline-block";
                }
        </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @stack('scripts')
</body>
</html>
