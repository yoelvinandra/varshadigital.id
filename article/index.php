<!DOCTYPE html>
<html lang="en">

<?php

    $linkfb = "https://www.facebook.com/profile.php?id=61555612670343";
    $linkig = "https://www.instagram.com/varsha_dgs/";
    $linktiktok = "https://www.tiktok.com/@varshadigitalsolution?lang=en";
    $linklinkedin = "https://www.linkedin.com/in/varsha-digital-3a43202a8/";
    
    $promo1 = "img/Promo1.jpg";
    $promo2 = "img/Promo2.jpg";
    $promo3 = "img/Promo3.jpg";
    
    $keunggulan1 = "https://widgets.sociablekit.com/instagram-feed/iframe/247143";
    $keunggulan2 = "https://widgets.sociablekit.com/instagram-feed/iframe/247121";
    $keunggulan3 = "https://widgets.sociablekit.com/instagram-feed/iframe/247169";
    
    $telpFormat = "0895-4027-07777";
    $telp = "0895402707777";
    $wa = "62".substr($telp,1);
    $email = "varshadigital@gmail.com";
    
    $urlwa = "https://wa.me/$wa?text=Hallo%2C+kami+ingin+mendapat+informasi+detail+tentang+layanan+Varsha+Digital+Solution";
    $urltelp = "tel:".$telp;
    $urlemail = "mailto:".$email;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Varsha Digital Solution | Marketing Branding Sosmed Management</title>
    <meta name="description" content="Get more advanced your business by Marketing, Branding, Managing Social Media Content With Varsha">
    <meta name="keywords" content="sosial media, medsos, promosi, marketing, branding, online marketing, online branding, varsha digital, digital marketing, social media manager, surabaya, social media manager surabaya, promosi surabaya, online marketing surabaya">
    <link rel="icon" href="../img/logo.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="../css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="../js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
    body{
         overflow-x: hidden;    
    }
    
    /*#totalklien::after,#totalfollower::after,#totalkonten::after {*/
    /*  content: counter(count);*/
    /*  animation: counter 2s linear forwards alternate;*/
    /*  animation-timing-function: steps(10);*/
    /*}*/
    
    /*@keyframes counter {*/
    /*  0% {*/
    /*    counter-increment: count 0;*/
    /*  }*/
    /*  10% {*/
    /*    counter-increment: count 1;*/
    /*  }*/
    /*  20% {*/
    /*    counter-increment: count 2;*/
    /*  }*/
    /*  30% {*/
    /*    counter-increment: count 3;*/
    /*  }*/
    /*  40% {*/
    /*    counter-increment: count 4;*/
    /*  }*/
    /*  50% {*/
    /*    counter-increment: count 5;*/
    /*  }*/
    /*  60% {*/
    /*    counter-increment: count 6;*/
    /*  }*/
    /*  70% {*/
    /*    counter-increment: count 7;*/
    /*  }*/
    /*  80% {*/
    /*    counter-increment: count 8;*/
    /*  }*/
    /*  90% {*/
    /*    counter-increment: count 9;*/
    /*  }*/
    /*  100% {*/
    /*    counter-increment: count 10;*/
    /*  }*/
    /*}*/
    
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
<body>

  <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1" style="background:transparent;"><img src="../img/logo2.png" width="40px"></div>
                <div class="double-bounce2" style="background:transparent;"><img src="../img/logo.png" width="40px"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid"  style="padding:90px 0px 0px 0px !important;">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href=".."><img src="../img/logo-teks.webp" width="130"   alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></a>
                
                <span id="medsos" class="centered">
                    <a href="<?=$linkfb?>"><i class="ion-social-facebook" style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linkig?>"><i class="ion-social-instagram-outline"  style="font-size:16pt; color:#454545"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linktiktok?>"><img src="../img/tiktok_PNG27.webp"  style="width:16px; color:#454545; margin-top:-8px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=$linklinkedin?>"><i class="ion-social-linkedin"  style="font-size:16pt; color:#454545"></i></a>
                </span>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>
        <!-- end box header -->
        <nav>
            <ul class="box-primary-nav">
                <br>
                <li><a href="..">Home</a></li>

                <!--<li><a href="index.html">Home</a> <i class="ion-ios-circle-filled color"></i></li>-->
                <li><a style="color:#ffbf00; font-size:14pt;">Articles</a></li>
                <li><a href="../client">Clients</a></li>
                <!--<li><a href="services.html">Services</a></li>-->
                <!--<li><a href="portfolio.html">Portfolio</a></li>-->
                <!--<li><a href="contact.html">Contact Us</a></li>-->
                <br>
                <div style="background:white; height:2px; width:200px; margin:auto;">&nbsp;</div>
                <li class="box-label">Follow Us on</li>

                <li class="box-social"><a href="<?=$linkfb?>"><i class="ion-social-facebook" style="font-size:24pt;"></i></a></li>
                <li class="box-social"><a href="<?=$linkig?>"><i class="ion-social-instagram-outline"  style="font-size:24pt;"></i></a></li>
                <li class="box-social"><a href="<?=$linktiktok?>"><img src="../img/tiktok_PNG27.webp"  style="width:24px; filter: brightness(0) invert(1); margin-top:-7px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a></li>
                <li class="box-social"><a href="<?=$linklinkedin?>"><i class="ion-social-linkedin"  style="font-size:24pt;"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="title-total" style="background:url('../img/background-article.webp');background-size:cover; background-position:center;padding:150px 0px 150px 0px; text-align:center; width:100%; "><b id="precious-article"style="color:white; font-size:30pt; text-shadow: 2px 2px 10px #000000;">Articles</b></div>
        <div id="background"  style="margin: 0px 20% 0px 20%;" >
        <!-- article -->
        <div class="col-md-12" style="background:white; padding:50px 10px 50px 10px">
            <br>
              <div id="myarticle" class="row">
                  
                </div>
                <div class="col-md-5">
                </div> 
            <br>
        </div>
    </div>
    <!-- article -->

    <!-- footer -->
    <footer class="col-md-12">
        <section id="tentangkami" style="text-align:left;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 ">
                <div class="info_detail">
                  <a href=".."><img src="../img/logo-teks.webp" style="height:80px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></a>
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
                                   <img src ="../img/location-outline.svg" style="height:24px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="#0" class="footer-service subtitle-total" style="font-size:14pt; color:#454545">Jl. Darmo Permai Timur XIII no.24, Surabaya</a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="../img/logo-whatsapp.svg" style="height:20px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="<?=$urlwa?>" class="footer-service subtitle-total" style="font-size:14pt; color:#454545"><?=$telpFormat?></a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="../img/call-outline.svg" style="height:20px;">&nbsp;&nbsp;
                               </td>
                               <td>
                                  <div style="padding:7px 0px 10px 0px; "><a href="<?=$urltelp?>" class="footer-service subtitle-total" style="font-size:14pt; color:#454545"><?=$telpFormat?></a></div>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <img src ="../img/mail-outline.svg" style="height:20px;">&nbsp;&nbsp;
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
                <a href="<?=$linktiktok?>"><img src="../img/tiktok_PNG27.webp"  style="width:16px; color:#454545; margin-top:-8px;" alt="siap membantu mengembangkan bisnis kamu melalui media sosial"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
    <script src="../js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/animated-headline.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="../js/custom.js"></script>

  
  <script>
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
  					       '<a href="./myarticle/'+fileName+'"><span id="gambarForward'+(counter)+'" class="  " style="border:0px !important; color:black; font-size:14pt;" >'+
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
   
    
    function changeView() {
        
        let widthScreen = window.outerWidth;
        
        if(widthScreen < 1000)
        {
            
            $(".subtitle-total").css("font-size","10pt");
            $("#background").css("margin","0 20px 0 20px");
            
            
        }
        
        if(widthScreen < 500)
        {
            $("#medsos").hide();
            $("#precious-article").css("font-size","24pt");
        }
         
    }
    
   
    changeView();
    window.onresize = changeView;


    </script>

</body>

</html>