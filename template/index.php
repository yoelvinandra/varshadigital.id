<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Varsha Digital Solution | Marketing Branding Sosmed Management</title>
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
    
    #clientbutton{
        transition: 0.3s;
    }
    
    #clientbutton:hover{
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
            <div class="box-logo" style="text-align:center;">
                <a href="index.html"><img src="../img/logo-teks.png" width="200"   alt="Logo"></a>
                <div class="title-total" style="text-align:center; color:black;"><b>Template</b></div>
            </div>
        </header>
        <!-- end box header -->
    </div>
    <!-- CLient -->
    <div class="col-md-12" style="background:white; padding:50px 10px 50px 10px">
        <br>
          <div id="bodyTemplate" class="row" style="margin: 0px 20% 0px 20%">
            </div>
            <br>
            <div class="col-md-5">
            </div> 
        <br>
        <br>
    </div>
    <!-- Client -->

     <!-- footer -->
    <footer class="col-md-12">
        <div class="container-fluid">
            <p class="copyright">&copy; <span id="displayYear"></span> All Rights Reserved By<br>
          <a href="#" style="color:black;">Varsha Digital Solution</a></p>
        </div>
    </footer>
    <!-- end footer -->

  <!-- jQery -->
  <script src="../js/jquery-2.1.1.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <script src="../js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
  
  <script>
   var filesDirectory = "../template/mytemplate";
   var fileNameArray = [];
    $(".title-total").css("font-size","22pt");
        String.prototype.ucwords = function() {
			str = this.toLowerCase();
			return str.replace(/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g,
				function($1) {
					return $1.toUpperCase();
				});
		}
        
		// get auto-generated page 
		$.ajax({url: filesDirectory,async:false,cache:false}).then(function(html) {
			// create temporary DOM element
				var document = $(html);
				var counter = 0;
				var counterChild = 0;
				var fileNameArray = [];
				// find all links ending with .pdf 
				document.find('a[href]').each(function() {
					 fileName = $(this).text().split("/")[0];
					 var fileUrl = filesDirectory+"/"+$(this).attr('href');

					 if(fileUrl.split("/")[fileUrl.split("/").length-1] == "" && fileName != "Parent Directory")
					 {
					    fileNameArray.push(fileName);
						$("#bodyTemplate").append('<br><br>'+
						     '<h4 color>'+
                              fileName.ucwords() +
                            '</h4>'+
                            '<div class="myTemplate">'+
                                '<div class="row" id="bodyTemplateChild'+counter+'" >'+
                                '</div>'+
                            '</div>'
						);
						
					    counter++;
					    
					 }
				})
				setChild(fileNameArray,counterChild,counter);
				
		});
		
		
		
		function setChild(fileName,counterChild,counter){
		     var filesDirectoryChild = "../template/mytemplate/"+fileName[counterChild]+"/";
		  
           // get auto-generated page 
           $.ajax({url: filesDirectoryChild,async:false,cache:false}).then(function(html) {
           	// create temporary DOM element
           	   
           		var document = $(html);
           		// find all links ending with .pdf 
           		document.find('a[href]').each(function() {
           			 var fileNameChild = $(this).text().split("/")[0];
           			 var fileUrlChild = filesDirectoryChild+$(this).attr('href');
           
           			 if(fileUrlChild.split("/")[fileUrlChild.split("/").length-1] == "" && fileNameChild != "Parent Directory")
           			 {
           			     
           			     $("#bodyTemplateChild"+(counterChild)).append('<div class="col-md-6 col-lg-4">'+
           				    '<a href="'+fileUrlChild+'" style="color:black;" target="_blank; width:100px;">'+
                                     '<div class="box" style="text-align:center;">'+
                                       '<div class="img-box iframe-container" >'+
                                         '<iframe src="'+filesDirectoryChild+'/'+fileNameChild+'/" alt=""></iframe>'+
                                       '</div>'+
                                       '<div class="detail-box"'+
                                         '<h5 >'+
                                           fileNameChild+
                                         '</h5>'+
                                       '</div>'+
                                     '</div>'+
                                     '</a>'+
                               '</div>');
           			 }
           		})
           });
           
           	counterChild++;
           	if(counterChild< counter )
           	{
           	    setChild(fileName,counterChild,counter);
           	}
           	
						
		}


    </script>

</body>

</html>