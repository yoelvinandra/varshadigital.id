<?="<input type='hidden' value='".$_SESSION['activepage']."'>";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hanasta Indo Teknologi - No. 1 Penjualan NAS Server</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>29181359 / 0812-2240-283</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@hanastaindoteknologi.com</small>
                </div>
		<div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt me-2"></small>
                    <small>Soho Capital Lt.32 unit 7, Jl.S.Parman kav 28, Tanjung Duren Selatan, Jakarta Barat, 11470</small>
                </div>

            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href="https://www.facebook.com/HanastaIndoTeknologi/"  target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href="https://www.instagram.com/hanasta.indoteknologi/"  target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="text-white-50 ms-4" href="https://www.tiktok.com/@hanasta.indotech?_t=8fAbWpEui4g&_r=1"  target="_blank"><img class="img-fluid fab" src="img/tiktok.png" alt=""  style="height:15px;"></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-youtube"  target="_blank"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light px-4 px-lg-5"> <!-- class="sticky-top" // MEMBUAT TETEP MUNCUL MESKI SCROLL KEBAWAH -->
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h6 class="m-0"><img class="img-fluid me-2" src="img/logo.png" alt="" style="height:40px;">Hanasta Indo Teknologi</h6>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php  $width = '<script type="text/javascript">document.write(screen.availWidth);</script>';?>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link <?=$_SESSION['activepage'] == "Home" ? "Active" :""?>">Home</a>
                <a href="<?=$_SESSION['activepage'] != "Products" ? "" :"index.php"?>#services" class="nav-item nav-link <?=$_SESSION['activepage'] == "Services" ? "Active" :""?>">Services</a>
                <div class="nav-item dropdown">
                    <a href="#products" class="nav-link <?=$_SESSION['activepage'] == "Products" ? "Active" :""?> dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu bg-light border-0 m-0" style="width:97vw; top:60px; left:-52vw; !important; overflow-y: scroll;">
                    <div class="row" style="padding:0px 15px 0px 15px" >
			            <div class="col-md-3 col-sm-4" style="padding:15px">
                            <table  width="100%">
                                <tr>
                                    <th style="padding-left:18px">Data Storage</th>
                                </tr> 
                                <tr>
                                    <td><hr></hr></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Data Storage&q=Asustor" class="dropdown-item">Asustor <img class="img-fluid me-3" src="img/top.png" style="height:20px;"> </a></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Data Storage&q=Seagate" class="dropdown-item">Seagate</a></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Data Storage&q=Netapp" class="dropdown-item">Netapp</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-3 col-sm-4" style="padding:15px">
                            <table width="100%">
                                <tr>
                                    <th style="padding-left:18px">Servers</th>
                                </tr>
                                <tr>
                                    <td><hr></hr></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Servers&q=ASRock Rack" class="dropdown-item">ASRock Rack <img class="img-fluid me-3" src="img/promo.png" style="height:20px;"></a></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Servers&q=Quanta" class="dropdown-item">Quanta</a></td>
                                </tr>
				                <tr>
                                    <td><a href="produk.php?k=Servers&q=Lenovo" class="dropdown-item">Lenovo</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-3 col-sm-4" style="padding:15px">
                            <table  width="100%">
                                <tr>
                                    <th style="padding-left:18px">Security</th>
                                </tr>
                                <tr>
                                    <td><hr></hr></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=Security&q=Fortinet" class="dropdown-item">Fortinet</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-3 col-sm-4" style="padding:15px">
                            <table  width="100%">
                                <tr>
                                    <th style="padding-left:18px">All-in-Ones and Mini PC</th>
                                </tr>
                                <tr>
                                    <td><hr></hr></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=All-in-Ones and Mini PC&q=Dell" class="dropdown-item">Dell</a></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=All-in-Ones and Mini PC&q=Lenovo" class="dropdown-item">Lenovo</a></td>
                                </tr>
                                <tr>
                                    <td><a href="produk.php?k=All-in-Ones and Mini PC&q=Gigabyte" class="dropdown-item">Gigabyte</a></td>
                                </tr>
                                <tr>
                            </table>
                        </div>
                    </div>
                       
                        <!-- <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                <a href="<?=$_SESSION['activepage'] != "Products" ? "" :"index.php"?>#aboutus" class="nav-item nav-link <?=$_SESSION['activepage'] == "About Us" ? "Active" :""?>">About Us</a>
            </div>
        </div>
        <a href="<?='https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik'?>" target="_blank" class="btn btn-primary px-3 d-none d-lg-block">Contact <i class="fab fa-whatsapp"></i></a>
    </nav>
    <!-- Navbar End -->