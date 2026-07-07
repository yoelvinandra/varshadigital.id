<!DOCTYPE html>
<?php

$linkfb = "https://www.facebook.com/profile.php?id=61555612670343";
$linkig = "https://www.instagram.com/varsha_dgs/";
$linktiktok = "https://www.tiktok.com/@varshadigitalsolution?lang=en";
$linklinkedin = "https://www.linkedin.com/in/varsha-digital-3a43202a8/";

$promo1 = "img/Promo1.jpg";
$promo2 = "img/Promo2.jpg";
$promo3 = "img/Promo3.jpg";

$content1 = "img/IG/sight.jpeg";
$content2 = "img/IG/ijk.jpeg";
$content3 = "img/IG/genset.jpeg";

$telpFormat = "0895-4027-07777";
$telp = "0895402707777";
$wa = "62".substr($telp,1);
$email = "varshadigital@gmail.com";

$urlwa = "https://wa.me/$wa?text=Hallo%2C+kami+ingin+mendapat+informasi+detail+tentang+layanan+Varsha+Digital+Solution";
$urltelp = "tel:".$telp;
$urlemail = "mailto:".$email;
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Varsha Digital Solution | Marketing Branding Sosmed Management</title>
    <meta name="description" content="Get more advanced your business by Marketing, Branding, Managing Social Media Content With Varsha">
    <meta name="keywords" content="sosial media, medsos, promosi, marketing, branding, online marketing, online branding, varsha digital, digital marketing, social media manager, surabaya, social media manager surabaya, promosi surabaya, online marketing surabaya">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="img/logo.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>

    iframe {
      pointer-events: none;
    }

    body{
         overflow-x: hidden;    
    }
    
    #sg-carousel {
        position: relative;
    }
    
    #sg-carousel .carousel-inner .item {
    }
    .carousel-caption{top:50%;}
    .carousel-caption h1 {
        font-size: 6em;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    .uppr-txt {
        text-transform: uppercase;
        color: #fff;
        font-size: 35px;
    }
    #sg-carousel .carousel-control.left,
    #sg-carousel .carousel-control.right {
        background-image: none;
        background-repeat: no-repeat;
        opacity: 0;
        text-shadow: none;
        transition: all 0.8s ease 0s;
    }
    .carousel-control {
        bottom: 0;
        color: #fff;
        font-size: 20px;
        left: 0;
        opacity: 0;
        position: absolute;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
        top: 0;
        width: auto;
        transition: all 0.8s ease 0s;
    }
    .carousel-inner {
        box-shadow: 2px 6px 21px;
    }
    .fa-angle-right,
    .fa-angle-left {
        font-size: 80px;
    }
    #sg-carousel:hover .carousel-control.left {
        left: 38px;
        transition: all .2s ease 0;
    }
    #sg-carousel:hover .carousel-control.right {
        right: 38px;
        transition: all .2s ease 0;
    }
    #sg-carousel:hover .carousel-control.left,
    #sg-carousel:hover .carousel-control.right {
        opacity: 1;
    }
    .carousel-inner > .item > a > img,
    .carousel-inner > .item > img,
    .img-responsive,
    .thumbnail a > img,
    .thumbnail > img {
        display: block;
        max-width: 100%;
        width: 100%;
    }
    .img-responsive{
       object-fit: cover;
    }
    .item.active img {
        transition: transform 5000ms linear 0s;
        transform: scale(1.05, 1.05);
    }
    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }
    .carousel-fade .carousel-control {
        z-index: 2;
        font-size: 80px;
    }
    .carousel-caption {
        left: 60%;
        padding-bottom: 5%;
        right: 0;
        text-align: left;
    }
    
    .carousel-caption h1 {
        font-family: raavi;
        font-size: 60px;
        font-weight: 600;
        line-height: 18px;
    }
    .carousel-caption > p {
        font-size: 30px;
        color: #fff;
    }
    .carousel-caption > a {
        text-transform: uppercase;
        color: #fff;
        background: #041132;
        padding: 6px 12px;
    }
    
    .carousel-indicators li {
        background-color: #b3b5b9;
        border-radius: 10px;
        cursor: pointer;
        display: inline-block;
        height: 12px;
        margin: 1px;
        text-indent: -999px;
        width: 12px;
        border: 0;
    }
    .carousel-indicators .active {
        background-color: #041132;
        height: 12px;
        margin: 0;
        width: 12px;
        border: 0;
    }
    #sg-carousel h1 {
        animation-delay: 1s;
    	margin-bottom:25px;
    }
    #sg-carousel p {
        animation-delay: 2s;
    }
    #sg-carousel button {
        animation-delay: 3s;
    	margin-top:25px;
    }
    @media all and (transform-3d),
    (-webkit-transform-3d) {
        .carousel-fade .carousel-inner > .item.next,
        .carousel-fade .carousel-inner > .item.active.right {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-inner > .item.prev,
        .carousel-fade .carousel-inner > .item.active.left {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
      .carousel-fade .carousel-inner > .item{
        transition: opacity 1s ease;
      }
        .carousel-fade .carousel-inner > .item.next.left,
        .carousel-fade .carousel-inner > .item.prev.right,
        .carousel-fade .carousel-inner > .item.active {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    
    .imageMove {
        text-align:center;
        transition: 0.3s;
    }
    
    .imageMove:hover{
        cursor:pointer;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    
    #detailButton{
        transition: 0.3s;
    }
    
    #detailButton:hover{
        background:black !important;
        color:white !important;
        text-decoration:none !important;
    }
    
    /* Centered text */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    hr {
        position: relative;
        top: 20px;
        border: none;
        height: 0.5px;
        background: #999999;
        margin-bottom: 50px;
    }
    
    .footerservice:hover{
        color:black !important;
    }
    
    .portfolio_item_hover{
        border-radius:20px;
    }
    
    .portfolio_item_hover:after{
        border-radius:20px;
    }
    
    .instagram-feed:hover{
        cursor:pointer;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    
    
    @-webkit-keyframes scroll {
    0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    }
    100% {
    -webkit-transform: translateX(calc(-180px * 10));
    transform: translateX(calc(-180px * 10));
    }
    }
    @keyframes scroll {
    0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    }
    100% {
    -webkit-transform: translateX(calc(-180px * 10));
    transform: translateX(calc(-180px * 10));
    }
    }
    .slider {
    background: pr;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%;
    }
    .slider::before, .slider::after {
    background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
    content: "";
    position: absolute;
    width: 100px;
    z-index: 2;
    }
    .slider::after {
    right: 0;
    top: 0;
    -webkit-transform: rotateZ(180deg);
    transform: rotateZ(180deg);
    }
    .slider::before {
    left: 0;
    top: 0;
    }
    .slider .slide-track {
    -webkit-animation: scroll 40s linear infinite;
    animation: scroll 40s linear infinite;
    display: flex;
    width: calc(180px * 20);
    }
    .slider .slide {
    width: 180px;
    }
    
      #articlebutton{
        transition: 0.3s;
    }
    
    #articlebutton:hover{
        background:black !important;
        color:white !important;
        text-decoration:none !important;
    }
    /* Centered text */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    hr {
        position: relative;
        top: 20px;
        border: none;
        height: 0.5px;
        background: #999999;
        margin-bottom: 50px;
    }
    
    .footerservice:hover{
        color:black !important;
    }
    
    .portfolio_item_hover{
        border-radius:20px;
    }
    
    .portfolio_item_hover:after{
        border-radius:20px;
    }
    
    .instagram-feed:hover{
        cursor:pointer;
        -webkit-transform: translateY(-20px);
        transform: translateY(-20px);
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    
    /*GALLERY*/
    
    div.gallery {
      border: 1px solid #ccc;
      border-radius:10px;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .responsive {
      padding: 0 6px;
      float: left;
      width: 33.3333%;
    }
    
    @media only screen and (max-width: 1000px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }
    
    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }
    
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /*GALLERY*/

</style>
<body onload="loadIframe()">

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1" style="background:transparent;"><img src="img/logo2.webp" width="40px"></div>
                <div class="double-bounce2" style="background:transparent;"><img src="img/logo.webp" width="40px"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid"  style="padding:90px 0px 0px 0px !important;">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="#"><img src="img/logo-teks.webp" width="130"   alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></a>
                
                <span id="medsos" class="centered">
                    <a href="<?=$linkfb?>"><i class="ion-social-facebook" style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linkig?>"><i class="ion-social-instagram-outline"  style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linktiktok?>"><img src="img/tiktok_PNG27.webp"  style="width:16px; color:#454545; margin-top:-8px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linklinkedin?>"><i class="ion-social-linkedin"  style="font-size:16pt; color:#454545"></i></a>
                </span>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <br>
                <li><a href="#" style="color:#ffbf00; font-size:14pt;">Home</a></li>
                <!--<li><a href="index.html">Home</a> <i class="ion-ios-circle-filled color"></i></li>-->
                <li><a href="../article">Articles</a></li>
                <li><a href="/client">Clients</a></li>
                <!--<li><a href="services.html">Services</a></li>-->
                <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                <!--<li><a href="contact.html">Contact Us</a></li>-->
                <br>
                <div style="background:white; height:2px; width:200px; margin:auto;">&nbsp;</div>
                <li class="box-label">Follow Us on</li>

                <li class="box-social"><a href="<?=$linkfb?>"><i class="ion-social-facebook" style="font-size:24pt;"></i></a></li>
                <li class="box-social"><a href="<?=$linkig?>"><i class="ion-social-instagram-outline"  style="font-size:24pt;"></i></a></li>
                <li class="box-social"><a href="<?=$linktiktok?>"><img src="img/tiktok_PNG27.webp"  style="width:24px; filter: brightness(0) invert(1); margin-top:-7px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a></li>
                <li class="box-social"><a href="<?=$linklinkedin?>"><i class="ion-social-linkedin"  style="font-size:24pt;"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

        <!-- box-intro --> 
        <section class="box-intro" style="padding-top:30px; padding-bottom:90px; height:auto;"> 
            <img src='img/background_head.webp' id="backgroundhead" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
              <div class="headstyle" style="position:absolute;" >

                <h1 class="box-headline letters rotate-2 head-title" style=" text-align:left; font-size:0pt; line-height:1.2;">
                    <span class="fontmedstyle" style="text-align:left;">
                        Get more advanced your business by<br>
                    </span>
                        <span  class="box-words-wrapper fontbigstyle" style="white-space:normal; background:white">
                            <b style="padding-left:2px;" class="is-visible">Marketing,</b>
                            <b style="padding-left:2px;">Branding,</b>
                            <b style="padding-left:2px;">Managing &nbsp;</b>
                        </span>
                    <span class="fontmedstyle" style="text-align:left;">
                          <br>Social Media Content With Varsha.
                    </span>
                </h1>
            </div>
        </section>
        <!-- end box-intro -->
    </div>

    <div style="background:#dad9d7">
        <div >
            
                <div class="col-md-8 container-video" style="background:#e8e8e8; text-align:center; padding:50px 0px 50px 10px !important;">
                     <div class="title-total"  >Warm <b>greetings</b> from Varsha</div>
                     <br>
                    <!-- <iframe width="90%" id="sg-carousel"-->
                    <!--src="https://www.youtube.com/embed/tgbNymZ7vqY" style="border-radius:10px;">-->
                    <!--</iframe> -->
                    
                    <div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    	<ol class="carousel-indicators">
                    		<li data-target="#carousel" data-slide-to="0" class="active"></li>
                    		<li data-target="#carousel" data-slide-to="1" class=""></li>
                    		<li data-target="#carousel" data-slide-to="2" class=""></li>
                    	</ol>
                    	<div class="carousel-inner carousel-zoom carousel-fade">
                    		<div class="item active">
                    		    <img class="img-responsive" src="<?=$promo1?>" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
                    		</div>
                    	    <div class="item">
                    	       <img class="img-responsive" src="<?=$promo2?>" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
                    		</div>
                    		<div class="item">
                    		    <img class="img-responsive" src="<?=$promo3?>" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
                    		</div>
                    	<a class="carousel-control left" href="#sg-carousel" data-slide="prev" style="color:black;">‹</a>
                    	<a class="carousel-control right" href="#sg-carousel" data-slide="next" style="color:black;">›</a>
                        </div> 
	                </div> 
                </div>
                 <div class="col-md-4 need" style="background:#8a8a8a; padding:50px 20px 50px 20px !important;  color:#e8e8e8;">
                        <div class="title-total everything-you" style="text-align:left;">Everything you need
                            to grow your business<br>
                            in digital marketing.
                        </div>
                        <div class="ataspass">
                            <div class="total" style="text-align:left;">
                              <div style="padding:30px 5px 30px 5px;">
                                    <span id="totalklienatas" style="font-weight:bold;"></span>
                                   <span class="enter1" style="font-weight:bold;">Clients</span>
                                </div>
                                <div  class="total" style="text-align:left; ">
                                  <div style="padding:0px 5px 30px 5px;">
                                        <span id="totalkontenatas" style="font-weight:bold;"></span>
                                       <span class="enter2" style="font-weight:bold;">Content Made</span>
                                    </div>
                                </div>
                                <div  class="total" style="text-align:left;">
                                      <div style="padding:0px 5px 30px 5px;">
                                        <span id="totalfolloweratas" style="font-weight:bold;"></span>
                                       <span class="enter3" style="font-weight:bold;">Followers</span>
                                    </div>
                                 </div>
                            </div>
                        </div>
                         <div class="bawahpass">
                             <br>
                              <table width="100%">
                                  <tr valign="top" style="font-size:16pt; text-align:center;">
                                      <td width="30%">
                                          <div id="totalklienbawah" style="font-weight:bold;"></div>
                                             <div class="enter1" style="font-weight:bold;">Clients</div>
                                      </td>
                                      <td width="30%">
                                          <div id="totalkontenbawah" style="font-weight:bold;"></div>
                                             <div class="enter1" style="font-weight:bold;">Content Made</div>
                                      </td>
                                      <td width="30%">
                                          <div id="totalfollowerbawah" style="font-weight:bold;"></div>
                                             <div class="enter1" style="font-weight:bold;">Followers</div>
                                      </td>
                                  </tr>
                              </table>
                              </br>
                         </div>
                          <div class="title-total"  style="text-align:left;"> <b>contact us</b> anytime
to discuss<br>your needs.
                        </div>
                        <br>
                     </div>
        </div>
    </div>
    
    <!-- keunggulan -->
    
    <div class="col-md-12" style="background:white; padding:50px 10px 50px 10px">
          <div class="title-total" style="text-align:center; color:black;">Why <b>Choose</b> Varsha ?</div>
              <p class="subtitle-total" style="text-align:center; font-size:16pt; color:#69686e; margin-top:10px; ">we trusted by various business fields, because of our <b>special methods</b>
                for handling content with changing market conditions </p>
        <br>
          <div width="100%"  class="row" style="margin:auto;" id="data-keunggulan">
           
          </div>
        <br>
    </div>
    <!-- keunggulan -->
    
    <!-- varsha do-->
    <div style="background:#dad9d7">
        <div width="100%">
                <div class="col-md-4 background-varshado" style="background:url('img/background-tools.webp');background-size:cover;height:100%;">
                    &nbsp;
      
                </div>
                <div class="col-md-8 container-varshado" style="background:#e8e8e8; text-align:left; padding:50px 80px 50px 80px !important;">
                     <div class="title-total" >what <b>Varsha</b> do?</div>
                    <br>
                    <p class="subtitle-total" style=" font-size:16pt; color:#69686e; margin-top:10px; ">
                        <b>Social Media Managing</b> and <b>Optimization</b><br>
                        Tailoring your accounts to meet your customers' specific needs.
                    </p>
                    <br>
                    <p class="subtitle-total" style=" font-size:16pt; color:#69686e; margin-top:10px; ">
                    <b>Content Generating</b><br>
                    specialize in crafting compelling content that seamlessly aligns
                    with the unique style and essence of your business.
                    </p>
                    <br>
                    <p class="subtitle-total" style="font-size:16pt; color:#69686e; margin-top:10px; ">
                    <b>Shooting</b> and <b>Editing Video</b><br>
                    Unlock your business development ideas with our top-notch video shooting
                    and editing services, designed to bring your content to life.
                    </p>
                    <br>
                    <p class="subtitle-total" style=" font-size:16pt; color:#69686e; margin-top:10px; ">
                    <b>Website Developt</b> and <b>SEO</b><br>
                    Instill trust in potential customers through the credibility and accessibility
                    of your website.
                    </p>
                    <br>
                    <p class="subtitle-total" style="font-size:16pt; color:#69686e; margin-top:10px; ">
                    <b>Catalog Product</b> and <b>Company Profile</b><br>
                    Creating a compelling corporate image by company profiles and showcase
                    the essence product of your company
                    </p>
                    <br>
                    <p class="subtitle-total" style="font-size:16pt; color:#69686e; margin-top:10px; ">
                    <b>Merchandise Design</b><br>
                    Design merchandise that perfectly aligns with the unique requirements
                    and identity of your business.
                    </p>
        
                </div>
        </div>
    </div>
    
    <!-- varsha do-->
    
    <!-- article -->
    <div class="col-md-12" style="text-align:center;  padding:50px 0 50px 0 !important; ">
         <div class="title-total" style="color:black;">Latest <b>Articles</b></div>
         <br>
         <div id="myarticle" class="row" style="margin: 0px 20% 0px 20%;">
          
         </div>
         <a href="/article" class="row" style="font-size:16pt;">
            <div class="col-xs-1 col-md-5"></div>
               <div class="col-xs-10 col-md-2"   id="detailButton" style=" padding:10px; border:1px solid black; background:white; color:black; text-align:center;">
                  More Articles 
              </div> 
            <div class="col-xs-1 col-md-5"></div>
        </a>
        
         <br>
    </div>
    <!-- article -->
    
    <!-- About Us -->
    <div class="col-md-12 aboutus"  style="background:#dad9d7; padding:50px 80px 0px 80px">

        <div width="100%"  style="margin:auto;">
         <div class="col-md-5" style="padding-bottom:50px;">
            <div class="title-total know-better"><b>Know</b> Us Better ?</div>
           <p class="subtitle-total" style=" font-size:16pt; color:#69686e; margin-top:10px; ">Varsha is a digital marketing agency with a vision to
             empower businesses to achieve success in the
             digital era. Fueled by a spirit of collaboration and
             diverse expertise ranging from content creation, data
             analysis, social media specialists, to SEO, we are
             dedicated to delivering optimal results for our clients</p>
        </div>   
        <div class="col-md-7" style=" text-align:center;">
                <img src="img/background_aboutus.webp" id="gambar-aboutus" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
            </div>  
           </div>
    </div>
    <!-- About Us -->        
    <!-- CLient -->
    <div class="col-md-12" style="background:white; padding:50px 0px 50px 0px">
          <div class="title-total" style="text-align:center; color:black;">Why <b>Clients</b> choose us ?</div>
              <p class="subtitle-total"  style="text-align:center; font-size:16pt; color:#69686e; margin-top:10px; padding:0px 10px 0px 10px;">Varsha Dgs is helping their <b>Precious Client's Content</b> continuously. </p>
         <br>
          <div width="100%" class="slider" style="margin:auto;">
              <div class="slide-track" id="myclient" >
              </div>
            </div>

        <a href="/client" class="row" style="font-size:16pt;">
            <div class="col-xs-1 col-md-5"></div>
               <div class="col-xs-10 col-md-2"   id="detailButton" style=" padding:10px; border:1px solid black; background:white; color:black; text-align:center;">
                  More Clients 
              </div> 
            <div class="col-xs-1 col-md-5"></div>
        </a>
    </div>
    <!-- Client -->

    <!-- footer -->
    <footer class="col-md-12">
        <section id="tentangkami" style="text-align:left;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 ">
                <div class="info_detail">
                  <img src="img/logo-teks.webp" style="height:80px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial">
                  <br>
                  <br>
                  <p class="subtitle-total" style="font-size:14pt; color:#454545">
                    Varsha Digital Solution is a company operating in the field of Social Media Branding Management. <br><br>Our mission is to help your business grow with digital marketing & branding.
                  </p>
                </div>
                <br>
              </div>
              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                
              </div>
              <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="info_contact" style="margin-top:30px; color:#6a686e;">
                  <h4 style="font-size:18pt; ">
                    Find Us on : 
                  </h4>
                   <br>
                   <div style="padding:7px 0px 10px 0px; ">
                       <table>
                           <tr>
                               <td>
                                   <img src ="img/location-outline.svg" style="height:24px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="#0" class="footer-service subtitle-total" style="font-size:14pt; color:#454545">Jl. Darmo Permai Timur XIII no.24, Surabaya</a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="img/logo-whatsapp.svg" style="height:20px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="<?=$urlwa?>" class="footer-service subtitle-total" style="font-size:14pt; color:#454545"><?=$telpFormat?></a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="img/call-outline.svg" style="height:20px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="<?=$urltelp?>" class="footer-service subtitle-total" style="font-size:14pt; color:#454545"><?=$telpFormat?></a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="img/mail-outline.svg" style="height:20px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="<?=$urlemail?>" class="footer-service subtitle-total" style="font-size:14pt; color:#454545"><?=$email?></a></div>
                               </td>
                           </tr>
                       </table>
                    </div>
                </div>
              </div>
          </div>
          <br>
          <div style="text-align:center; ">
                 <h4>
                    Follow Us on :
                 </h4>
                <a href="<?=$linkfb?>"><i class="ion-social-facebook" style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$linkig?>"><i class="ion-social-instagram-outline"  style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$linktiktok?>"><img src="img/tiktok_PNG27.webp"  style="width:16px; color:#454545; margin-top:-8px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?=$linklinkedin?>"><i class="ion-social-linkedin"  style="font-size:16pt; color:#454545"></i></a>
            </div>
            <br>
            <br>
        </section>
        <div class="container-fluid">
            <p class="copyright">&copy; <span id="displayYear"></span> All Rights Reserved By<br>
          <a href="#" style="color:black;">Varsha Digital Solution</a></p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#" class="cd-top" style="left:10px !important; bottom:10px !important;  text-align:center; width:55px; height:55px; padding-top:8px;"><i class="ion-android-arrow-up" style="font-size:24pt;"></i></a> 
    <div  style="position:fixed; right:10px; bottom:10px; z-index:999; text-align:center; background:#25d366 !important; color:white; width:55px; height:55px;">
         <a href="<?=$urlwa?>" style="color:white;">
            <i class="ion-social-whatsapp" style="font-size:24pt;"></i>
            <br>
          </a>
     </div> 
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

    <!-- google analytics  -->
    <script>
    
    (function( $ ) {
    
        //Function to animate slider captions 
    	function doAnimations( elems ) {
    		//Cache the animationend event in a variable
    		var animEndEv = 'webkitAnimationEnd animationend';
    		
    		elems.each(function () {
    			var $this = $(this),
    				$animationType = $this.data('animation');
    			$this.addClass($animationType).one(animEndEv, function () {
    				$this.removeClass($animationType);
    			});
    		});
    	}
    	
    	//Variables on page load 
    	var $myCarousel = $('#sg-carousel'),
    		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    		
    	//Initialize carousel 
    	$myCarousel.carousel();
    	
    	//Animate captions in first slide on page load 
    	doAnimations($firstAnimatingElems);
    	
    	//Pause carousel  
    	$myCarousel.carousel('pause');
    	
    	
    	//Other slides to be animated on carousel slide event 
    	$myCarousel.on('slide.bs.carousel', function (e) {
    		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
    		doAnimations($animatingElems);
    	});  
       
    	
    })(jQuery);
    
    function changeView() {
        
        let widthScreen = window.outerWidth;
        let heightScreen = window.outerHeight;
        $(".headstyle").css("top", ((widthScreen * 6/100)+100)+"px");   
        $(".headstyle").css("left", (widthScreen * 33/100)+"px");
        $(".fontmedstyle").css("font-size", (widthScreen * 2/100)+"pt");
        $(".fontbigstyle").css("font-size", (widthScreen * 4/100)+"pt");
        
        $(".button-instagram").css("height",parseFloat($(".button-instagram").css("width"))+"px")
         
        $(".total").css("font-size", "22pt"); 
        $(".title-total").css("font-size","22pt");
        
        $("#backgroundhead").css("width", widthScreen+"px");
        
        $(".title-total").css("font-size","22pt");
        $(".ataspass").show();
        $(".bawahpass").hide();
        
        if(widthScreen < 1000)
        {
            $(".ataspass").hide();
            $(".bawahpass").show();
            $(".title-total").css("font-size","16pt");
            $(".title-total").css("text-align","center");
            $("#sg-carousel").css("width","100%");
            
            
            $(".subtitle-total").css("font-size","10pt");
            
            $(".aboutus").css("padding-left","10px");
            $(".aboutus").css("padding-right","10px");
            
            $(".container-video").css("padding-left","30px");
            $(".container-video").css("padding-right","30px");
            
            $(".container-varshado").css("padding-left","30px");
            $(".container-varshado").css("padding-right","30px");
            
            $(".box-intro").css("height","300px");
            $(".head-title").css("background","white");
            $(".head-title").css("padding-right","20px");
            $(".head-title").css("padding-left","10px");
            $(".fontmedstyle").css("font-size", "16pt");
            $(".fontbigstyle").css("font-size", "24pt");
            $("#backgroundhead").css("width","0px");
            $(".box-intro").css("background","url('img/background_head.webp')");
            $(".box-intro").css("background-size","contain");
            $(".box-intro").css("background-repeat","no-repeat");
            $(".box-intro").css("background-position","center");
            $("#myarticle").css("margin","0 20px 0 20px");
            
        }
        
        $("#sg-carousel").css("height",$("#sg-carousel").css("width").replaceAll('px','') * 8/16)+"px";
         
        $("#gambar-aboutus").css("height",(parseInt($("#sg-carousel").css("height").replaceAll('px',''))+30)+"px");
         
        $(".background-varshado").css("height","400");
         
        if(widthScreen > 1000)
        {
             $(".need").css("height",$(".container-video").css("height"));
             $(".need").css("padding-left","65px");
             $(".background-varshado").css("height",$(".container-varshado").css("height"));
             $(".know-better").css("margin-top","18%");
             $(".everything-you").css("margin-top","8%");
             $("#sg-carousel").css("padding","0px 50px 0px 40px");
             
        }
        
        if(widthScreen < 500)
        {
            $("#sg-carousel").css("height",$("#sg-carousel").css("width"));
            $("#medsos").hide();
        }
        
        $(".img-responsive").css("height",$("#sg-carousel").css("height"));
        $(".carousel-control").css("top", (($(".img-responsive").css("height").replaceAll('px','') / 2)-80)+"px");
         
    }
    
    
    function countingNumberAtas(){
        //TOTAL KLIEN
        let countKliens = setInterval(updatedKlien,50);
        let uptoKlien = 0;
        let addKlien = 2;
        function updatedKlien() {
            let countKlien = document.getElementById("totalklienatas");
         
            uptoKlien = uptoKlien + addKlien;
            countKlien.innerHTML = uptoKlien;
            if (uptoKlien === 100) {
                clearInterval(countKliens);
                countKlien.innerHTML = countKlien.innerHTML+"+";
            }
        }
        
        let countKontens = setInterval(updatedKonten,50);
        let uptoKonten = 0;
        let addKonten = 25;
        function updatedKonten() {
            let countKonten = document.getElementById("totalkontenatas");
            uptoKonten = uptoKonten + addKonten
            countKonten.innerHTML = uptoKonten;
            if (uptoKonten === 1250) {
                clearInterval(countKontens);
                countKonten.innerHTML = countKonten.innerHTML+"+";
            }
        }
        
        let countFollowers = setInterval(updatedFollower,50);
        let uptoFollower = 0;
        let addFollower = 100;
        function updatedFollower() {
            let countFollower = document.getElementById("totalfolloweratas");
            uptoFollower = uptoFollower + addFollower;
            countFollower.innerHTML = uptoFollower;
            if (uptoFollower === 8000) {
                clearInterval(countFollowers);
                countFollower.innerHTML = countFollower.innerHTML+"+";
            }
        }
    }
    
    function countingNumberBawah(){
        //TOTAL KLIEN
        let countKliens = setInterval(updatedKlien,50);
        let uptoKlien = 0;
        let addKlien = 2;
        function updatedKlien() {
            let countKlien = document.getElementById("totalklienbawah");
         
            uptoKlien = uptoKlien + addKlien;
            countKlien.innerHTML = uptoKlien;
            if (uptoKlien === 100) {
                clearInterval(countKliens);
                countKlien.innerHTML = countKlien.innerHTML+"+";
            }
        }
        
        let countKontens = setInterval(updatedKonten,50);
        let uptoKonten = 0;
        let addKonten = 25;
        function updatedKonten() {
            let countKonten = document.getElementById("totalkontenbawah");
            uptoKonten = uptoKonten + addKonten
            countKonten.innerHTML = uptoKonten;
            if (uptoKonten === 1250) {
                clearInterval(countKontens);
                countKonten.innerHTML = countKonten.innerHTML+"+";
            }
        }
        
        let countFollowers = setInterval(updatedFollower,50);
        let uptoFollower = 0;
        let addFollower = 100;
        function updatedFollower() {
            let countFollower = document.getElementById("totalfollowerbawah");
            uptoFollower = uptoFollower + addFollower;
            countFollower.innerHTML = uptoFollower;
            if (uptoFollower === 8000) {
                clearInterval(countFollowers);
                countFollower.innerHTML = countFollower.innerHTML+"+";
            }
        }
    }
    
    changeView();
    countingNumberAtas();
    countingNumberBawah();
    window.onresize = changeView;
      
   var filesDirectory = "../client/myclient";
   var fileNameArray = [];
   	// get auto-generated page 
   $.ajax({url: filesDirectory,async:false,cache:false}).then(function(html) {
       
   	// create temporary DOM element
   	   
   		var document = $(html);
   		var indexLoop = 0;
   		var counter = 0;
   		var counterChild = 0;
   		var index = 0;
   		// find all links ending with .pdf 
   		document.find('a[href]').each(function() {
   			fileName = $(this).attr('href').split("/")[0];
   			if(indexLoop > 5)
   			{
   			   
       			fileName = decodeURI(fileName);
       			var fileUrl = filesDirectory+"/"+$(this).attr('href');
       
       			if(fileUrl.split("/")[fileUrl.split("/").length-1] == "" && fileName != "Parent Directory")
       			{
       			   if(index < 10)
   			       {
           			    fileNameArray.push(fileName);
           				$("#myclient").append(
           				    
           				      '<a href="./client/myclient/'+fileName+'"><span id="gambarForward'+(counter)+'" class="imageMove  col-xs-4 col-sm-2 col-md-1 slide" style="border:0px !important;"><img  src="../client/myclient/'+fileName+'.webp" style="width:100%" alt="'+fileName+' bekerja sama dengan varsha digital untuk mengembangkan bisnisnya melalui media sosial" />'+
                                '</span></a>'
       				);
       				
   			       index++;
   			       }
       			}
   			    
   				 
   				    
   			}
   		indexLoop++;
   	})
   	$("#myclient").append($("#myclient").html());
   		
   });
   
 var filesDirectory = "../article/myarticle";
  var fileNameArray = [];
    $(".title-total").css("font-size","22pt");
  	// get auto-generated page 
  $.ajax({url: filesDirectory,async:false,cache:false}).then(function(html) {
       
  	// create temporary DOM element
   	   
  		var document = $(html);
  		var indexLoop = 0;
  		var counter = 0;
  		var counterChild = 0;
  		// find all links ending with .pdf 
  		document.find('a[href]').each(function() {
  			fileName = $(this).attr('href').split("/")[0];
  			if(indexLoop > 5)
  			{
  			     fileName = decodeURI(fileName);
  				 var fileUrl = filesDirectory+"/"+$(this).attr('href');
   
  				 if(fileUrl.split("/")[fileUrl.split("/").length-1] == "" && fileName != "Parent Directory")
  				 {
  				    fileNameArray.push(fileName);
  					$("#myarticle").append(
   					    '<div class="responsive imageMove" style="margin-bottom:15px;">'+
   					    '<div class="gallery">'+
  					       '<a href="./article/myarticle/'+fileName+'"><span id="gambarForward'+(counter)+'" class="  " style="border:0px !important; color:black; font-size:14pt;" >'+
  					            '<img  src="../article/myarticle/'+fileName+'.webp" alt="'+fileName+'" style="border-radius:10px 10px 0px 0px;" />'+
  					            '<div class="desc" style="text-align:left;">'+fileName+'</div>'+
                            '</a>'+
                        '</div>'+
   					    '</div>'
  					);
   					
  				    counter++;
  				 }
   				    
  			}
  		indexLoop++;
  	})
  	
  	if(fileNameArray.length == 0){
  	   $("#myarticle").append(
   	        '<div style="text-align:center; font-size:16pt;" >COMING SOON....</div>'
  		);
  	}
  	//startarticle();
   		
  });
    
    function loadIframe(){
        
        let widthScreen = window.outerWidth;
        let heightScreen = window.outerHeight;
        
        var kontenKeunggulan = '<div class="col-sm-4">'+
                                '<div class="instagram-feed" style="padding:5px; background:black; border-radius:20px;">'+
                                    '<div class="sheet-instagram"  frameborder="0" scrolling="no" width="100%" style="border-radius:20px; background:url(<?=$content1?>); background-size:100%;" ></div>'+
                                    '<div class="button-instagram" style="border:2px solid silver; border-radius:100px; width:10%; text-align:center; margin:5px auto 10px auto; ">&nbsp;</div>'+
                                '</div>'+
                                '<br>'+
                            '</div> '+  
                            '<div class="col-sm-4">'+
                                '<div class="instagram-feed instagram-feed-main" style="padding:5px; background:black; border-radius:20px; overflow-y:hidden;">'+
                                    '<div class="sheet-instagram"  frameborder="0" scrolling="no" width="100%" style="border-radius:20px; background:url(<?=$content2?>); background-size:100%;" ></div>'+
                                    '<div class="button-instagram" style="border:2px solid silver; border-radius:100px; width:10%; text-align:center; margin:5px auto 10px auto;">&nbsp;</div>'+
                                '</div>'+
                                '<br>'+
                            '</div>'+   
                            '<div class="col-sm-4">'+
                                '<div class="instagram-feed" style="padding:5px; background:black; border-radius:20px; overflow-y:hidden;">'+
                                    '<div class="sheet-instagram"  frameborder="0" scrolling="no" width="100%" style="border-radius:20px; background:url(<?=$content3?>); background-size:100%;" ></div>'+
                                    '<div class="button-instagram" style="border:2px solid silver; border-radius:100px; width:10%; text-align:center; margin:5px auto 10px auto;">&nbsp;</div>'+
                                '</div>'+
                               '<br>'+
                            '</div>';
                
        $("#data-keunggulan").html(kontenKeunggulan);
        
        if(widthScreen < 1000)
        {
         $(".sheet-instagram").css("height", (heightScreen * 40/100)+"px");
        }
        
        if(widthScreen > 900)
        {
                     
            $(".sheet-instagram").css("height", (widthScreen * 40/100)+"px");
            $(".instagram-feed").css("margin-top", ((widthScreen * 8/100)/2)+"px");
            $(".main-feed").css("height", (widthScreen * 48/100)+"px");
            $(".instagram-feed-main").css("margin-top", "0px");
            
        }
        
    }
    
   (function(i, s, o, g, r, a, m) {
       i['GoogleAnalyticsObject'] = r;
       i[r] = i[r] || function() {
           (i[r].q = i[r].q || []).push(arguments)
       }, i[r].l = 1 * new Date();
       a = s.createElement(o),
           m = s.getElementsByTagName(o)[0];
       a.async = 1;
       a.src = g;
       m.parentNode.insertBefore(a, m)
   })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

   ga('create', 'UA-76796224-1', 'auto');
   ga('send', 'pageview');
    </script>

</body>

</html>