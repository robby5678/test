<?php
$proses= $_POST['save'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$data = [
    'nama_siswa' => $nama_siswa,
    'mata_kuliah'=> $mata_kuliah,
    'nilai_uts'  => $nilai_uts,
    'nilai_uas'  => $nilai_uas,
    'nilai_tugas'=> $nilai_tugas
];
$ar_nilai = [$data];
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>TUGAS1</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ms-4" href="index.html">
                        <b class="logo-icon">
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />
                        </b>
                        <span class="logo-text">

                            <img src="../assets/images/logo-light-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Helo Bro.
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Input Mahasiswa</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Table</h4>
                            <h6 class="card-subtitle">Add class <code>.table</code></h6>
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Mata Kuliah</th>
                                            <th class="border-top-0">Nilai UTS</th>
                                            <th class="border-top-0">Nilai UAS</th>
                                            <th class="border-top-0">Nilai Tugas/Praktikum</th>
                                            <th class="border-top-0">Nilai Rata-rata</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                        <tr>
                                        <?php $no =1;   
                                        foreach($ar_nilai as $dt): 
                                        $nilai_rata = ((float)$dt['nilai_uts'] + (float)$dt['nilai_uas'] + (float)$dt['nilai_tugas'])/3;
                                        ?>
                                            <td><?=  $no++;?></td>
                                            <td><?php echo $dt['nama_siswa'];?></td>
                                            <td><?php echo $dt['mata_kuliah'];?></td>
                                            <td><?php echo $dt['nilai_uts'];?></td>
                                            <td><?php echo $dt['nilai_uas'];?></td>
                                            <td><?php echo $dt['nilai_tugas'];?></td>
                                            <td><?php echo $nilai_rata?></td>
                                        <?php
                                        endforeach;
                                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <a href="form_nilai.php" class="btn btn-success text-white" >Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
        <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app-style-switcher.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/sidebarmenu.js"></script>
        <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
        <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../assets/plugins/d3/d3.min.js"></script>
        <script src="../assets/plugins/c3-master/c3.min.js"></script>
        <script src="js/pages/dashboards/dashboard1.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>