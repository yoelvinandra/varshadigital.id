<?php 
    session_start();$_SESSION['activepage'] = 'Products';

    $dataProduk = [];
    if($_GET['q'] == 'Asustor')
    {
        array_push($dataProduk, 
        array(
            'gambar' => 'as5202t.png',
            'judul' => 'AS5202T',
            'detail' => '<div style="font-size:12pt;">Do more with 2.5GbE and AS5202T.<br>The #1 cloud storage device for enthusiasts</div><br>
                        Spesification : 
                        <ul>
                        <li>Two 2.5 GbE ports with up to 5 Gbps under Link Aggregation</li>
                        <li>Up to 36TB. Store live streams on your NAS</li>
                        <li>Overwhelming 4K experience</li>
                        <li>2GB DDR4-2400 - 30% faster than DDR3</li>
                        <li>Intel Celeron dual core CPU - 30% faster than previous generation.</li>
                        <li>Three year warranty, best in class</li>
                        </ul>',
            'spesifikasi' => '
                        <b>Product Details : </b><br><br>    
                        <div style="float:left;"><img class="img-fluid" src="img/icon/CPU.png" alt=""></div>
                        <div style="padding-left:130px;">
                            CPU<br>
                            CPU Model Intel Celeron<br>
                            CPU Architecture x64 64-bit<br>
                            CPU Frequency Dual-Core<br>
                            AES-NI hardware encryption engine integrated <br>
                        </div>	
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Memory.png" alt=""></div>
                        <div style="padding-left:130px;">
                            Memory<br>
                            Memory 2GB SO-DIMM DDR4<br>
                            Memory Module Pre-installed 2GB (1x 2GB)<br>
                            Total Memory Slots 2<br>
                            Memory Expandable up to 8GB (2x 4GB)<br>
                            Support mixed capacity<br>
                            Flash Memory 4GB eMMC<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Harddisk.png" alt=""></div>
                        <div style="padding-left:130px;">
                            Storage<br>
                            Drive Bays 	2<br>
                            Compatible Drive Type<br>
                                3.5" SATA HDD<br>
                                2.5" SATA HDD<br>
                                2.5" SATA SSD<br>
                            Maximum Drive Bays with Expansion Unit 14<br>
                            Supports Hot Swappable Drives<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/ExternalPort.png" alt=""></div>
                        <div style="padding-left:130px;">
                            External Port<br>
                            Expansion 3x USB 3.2 Gen 1<br>
                            Network 2x 2.5 Gigabit Ethernet (2.5G/1G/100M)<br>
                            Multimedia Output 1x HDMI 2.0a<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Other.png" alt=""></div>
                        <div style="padding-left:130px;">
                            Others<br>
                            System Fan 1x 70mm<br>
                            Infrared Receiver<br> 	
                            Power Supply Unit / Adapter 65W x1<br>
                            Input Power Voltage 100V to 240V AC<br>
                            Certification FCC, CE, VCCI, BSMI, C-TICK<br>
                            Warranty 3 Years<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Operation.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Operation<br>
                            Power Consumption 17 W (Operation); 10.5 W (Disk Hibernation); 1.3 W (Sleep Mode)<
                            Noise Level 18.6dB (HDD idle)<br>
                            Operation Temperature 0°C~40°C (32°F~104°F)<br>
                            Humidity 5% to 95% RH<br>           
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Size.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Size and Weight<br>
                            Size 170(H) x 114(W) x 230(D) mm<br>
                            Weight 1.6 kg / 3.53 lbs<br>      
                        </div>	
                            ',
            'order' => "https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik Dengan Produk ".$_GET['q']." AS5202T"
        )
        ,
        array(
            'gambar' => 'as6604t.png',
            'judul' => 'AS6604T',
            'detail' => '<div style="font-size:12pt;">Power for the power user<br>Bringing Double Performance, and SSD Caching to the Small Business</div><br>
                        Spesification : 
                        <ul>
                        <li>Two 2.5 GbE ports with up to 5 Gbps under Link Aggregation</li>
                        <li>Dual M.2 NVMe SSD ports for fast caching</li>
                        <li>Overwhelming 4K experience</li>
                        <li>Intel Celeron quad core CPU - 30% faster than previous generation.</li>
                        <li>4GB DDR4-2400 - 30% faster than DDR3</li>
                        <li>Supports Wake on LAN and Wake on WAN</li>
                        </ul>',
            'spesifikasi' => '
                        <b>Product Details : </b><br><br>    
                        <div style="float:left;"><img class="img-fluid" src="img/icon/CPU.png" alt=""></div>
                        <div style="padding-left:130px;">
                        CPU<br>
                        CPU Model Intel Celeron J4125<br>
                        CPU Architecture x64 64-bit<br>
                        CPU Frequency Quad-Core 2.0GHz (burst up 2.70 GHz)<br>
                        </div>	
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Memory.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Memory<br>
                        Memory 4GB SO-DIMM DDR4<br>
                        Memory Module Pre-installed 4GB (1x 4GB)<br>
                        Total Memory Slots 2<br>
                        Memory Expandable up to 8GB (2x 4GB)<br>
                        Support mixed capacity<br>
                        Flash Memory 8GB eMMC<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Harddisk.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Storage<br>
                        Drive Bays 4<br>
                        M.2 Drive Slots 2<br>
                        Compatible Drive Type<br>
                            3.5" SATA HDD<br>
                            2.5" SATA HDD<br>
                            2.5" SATA SSD<br>
                            M.2 2280 NVMe<br>
                        Maximum Drive Bays with Expansion Unit 16<br>
                        Supports Hot Swappable Drives<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/ExternalPort.png" alt=""></div>
                        <div style="padding-left:130px;">
                        External Ports<br>
                        Expansion 3x USB 3.2 Gen 1<br>
                        Network 2x 2.5 Gigabit Ethernet (2.5G/1G/100M)<br>
                        Multimedia Output 1x HDMI 2.0a<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Other.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Others<br>
                        System Fan 1x 120mm<br>
                        LCD Panel<br> 	
                        Infrared Receiver<br>	
                        Power Supply Unit / Adapter 90W x1<br>
                        Input Power Voltage 100V to 240V AC<br>
                        Certification FCC, CE, VCCI, BSMI, C-TICK, KCC, BIS, CCC<br>
                        Warranty 3 Years<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Operation.png" alt=""></div>
                        <div style="padding-left:130px;"> 
                        Operation<br>
                        Power Consumption 	27.6 W (Operation); 12.6 W (Disk Hibernation); 0.75 W (Sleep Mode)<br>
                        Noise Level 17.6dB (HDD idle)<br>
                        Operation Temperature 0°C~40°C (32°F~104°F)<br>
                        Humidity 5% to 95% RH<br>        
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Size.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Size and Weight<br>
                        Size 185.5(H) x 170(W) x 230(D) mm<br>
                        Weight 2.96 kg / 6.52 lb<br>      
                        </div>	
                            ',
            'order' => "https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik Dengan Produk ".$_GET['q']." AS6604T"
        ),
        array(
            'gambar' => 'as7110t.png',
            'judul' => 'AS7110T',
            'detail' => '<div style="font-size:12pt;">Full Xeon Speed Ahead!<br>Extremely efficient and stable - Your next enterprise virtualization and storage solution</div><br>
                        Spesification : 
                        <ul>
                        <li>Intel Xeon 9th generation Quad-Core CPU</li>
                        <li>8GB of server-grade DDR4-2666 ECC memory (Max 64GB, 32GB x 2)</li>
                        <li>Dual M.2 NVMe SSD ports for fast caching</li>
                        <li>Complete iSCSI/IP-SAN and NFS support. VMware, Citrix and Hyper-V ready. Supports virtualization and Docker apps</li>
                        <li>Brings the smoothest work experience with 10-Gigabit Ethernet, triple 2.5-Gigabit ports and USB 3.2 Gen2 ports.</li>
                        <li>Supports Wake on LAN (2.5-Gigabit ports )</li>
                        </ul>',
            'spesifikasi' => '
                        <b>Product Details : </b><br><br>    
                        <div style="float:left;"><img class="img-fluid" src="img/icon/CPU.png" alt=""></div>
                        <div style="padding-left:130px;">
                        CPU<br>
                        CPU Model Intel Xeon E-2224<br>
                        CPU Architecture x64 64-bit<br>
                        CPU Frequency Quad-Core 3.4GHz up to 4.6GHz<br>
                        </div>	
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Memory.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Memory<br>
                        Memory 	8GB DDR4 ECC SO-DIMM<br>
                        Memory Module Pre-installed 8GB (1x 8GB)<br>
                        Total Memory Slots 2<br>
                        Memory Expandable up to 64GB (2x 32GB)<br>
                        Support mixed capacity<br>
                        Flash Memory 8GB USB DOM<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Harddisk.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Storage<br>
                        Drive Bays 10<br>
                        M.2 Drive Slots 2<br>
                        Compatible Drive Type<br>
                            3.5" SATA HDD<br>
                            2.5" SATA HDD<br>
                            2.5" SATA SSD<br>
                            M.2 2280 NVMe<br>
                            M.2 2280 SATA 3<br>
                            M.2 2260 SATA 3<br>
                            M.2 2242 SATA 3<br>
                        Maximum Drive Bays with Expansion Unit 22<br>
                        Supports Hot Swappable Drives<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/ExternalPort.png" alt=""></div>
                        <div style="padding-left:130px;">
                        External Ports<br>
                        Expansion 1x Front USB 3.2 Gen 1, 2x Rear USB 3.2 Gen 2 (10Gbps)<br>
                        Network 1x 10 Gigabit Ethernet (10G/5G/2.5G/1G/100M); 3x 2.5 Gigabit Ethernet (2.5G/1G/100M)<br>
                        Multimedia Output N/A<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Other.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Others<br>
                        System Fan 2x 120mm<br>
                        LCD Panel<br> 	
                        Power Supply Unit / Adapter 350W x1<br>
                        Input Power Voltage 100V to 240V AC<br>
                        Certification FCC, CE, VCCI, BSMI, C-TICK<br>
                        Warranty 5 Years<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Operation.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Operation<br>
                        Power Consumption 78.7W (Operation); 40.1W (Disk Hibernation); 5.8 W (Sleep Mode)<br>
                        Noise Level 22dB (HDD idle)<br>
                        Operation Temperature 0°C~40°C (32°F~104°F)<br>
                        Humidity 5% to 95% RH<br>         
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Size.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Size and Weight<br>
                        Size 215.5(H) x 293(W) x 230(D) mm<br>
                        Weight 7.1 (kg) / 15.62 (lb)<br>      
                        </div>	
                            ',
            'order' => "https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik Dengan Produk ".$_GET['q']." AS7110t"
        ),
        array(
            'gambar' => 'drivestor 2.png',
            'judul' => 'Drivestor 2 - AS1102T',
            'detail' => '<div style="font-size:12pt;">It is the Little NAS That Can</div><br>
                        Spesification : 
                        <ul>
                        <li>Realtek RTD1296 Quad-Core 1.4 GHz CPU</li>
                        <li>Uses 1 GB DDR4 – 40% more efficient)</li>
                        <li>Superfast 2.5-Gigabit Ethernet</li>
                        <li>Enjoy, download, upload and stream content with 4K transcoding.</li>
                        <li>Supports Wake on LAN and Wake on WAN</li>
                        <li>New Rose Gold logo</li>
                        <li>Tool-free installation</li>
                        </ul>',
            'spesifikasi' => '
                        <b>Product Details : </b><br><br>    
                        <div style="float:left;"><img class="img-fluid" src="img/icon/CPU.png" alt=""></div>
                        <div style="padding-left:130px;">
                        CPU<br>
                        CPU ModelRealtek RTD1296<br>
                        CPU Architecture ARM64 64-bit<br>
                        CPU Frequency Quad-Core 1.4GHz<br>
                        </div>	
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Memory.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Memory<br>
                        Memory 1GB DDR4<br>
                        Flash Memory 8GB eMMC<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Harddisk.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Storage<br>
                        Drive Bays 2<br>
                        Compatible Drive Type<br>
                        5" SATA HDD<br>
                        Maximum Drive Bays with Expansion Unit 10<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/ExternalPort.png" alt=""></div>
                        <div style="padding-left:130px;">
                        External Ports<br>
                        Expansion 2x USB 3.2 Gen 1<br>
                        Network 1x 2.5 Gigabit Ethernet (2.5G/1G/100M)<br>
                        Multimedia Output 	N/A<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Other.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Others<br>
                        System Fan 1x 70mm<br>
                        Power Supply Unit / Adapter 65W x1<br>
                        Input Power Voltage 100V to 240V AC<br>
                        Certification FCC, CE, VCCI, BSMI, C-TICK, KCC, BIS, CCC<br>
                        Warranty 3 Years<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Operation.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Operation<br>
                        Power Consumption 11.6W (Operation) 5.97W (Disk Hibernation);<br>
                        Noise Level 18.6dB (HDD idle)<br>
                        Operation Temperature 0°C~40°C (32°F~104°F)<br>
                        Humidity 5% to 95% RH<br>         
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Size.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Size and Weight<br>
                        Size 165(H) x 102(W) x 218(D) mm<br>
                        Weight 1.14 kg / 2.5 lbs<br>     
                        </div>	
                            ',
            'order' => "https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik Dengan Produk ".$_GET['q']." Drivestor 2 - AS1102T"
        ),
        array(
            'gambar' => 'drivestor 2 pro.png',
            'judul' => 'Drivestor 2 Pro - AS3302T',
            'detail' => '<div style="font-size:12pt;">ARMed to the Max<br>Affordable personal cloud bringing high speeds for individuals and families.</div><br>
                        Spesification : 
                        <ul>
                        <li>Realtek RTD1296 Quad-Core 1.4 GHz CPU</li>
                        <li>Uses 2 GB DDR4 – 40% more efficient</li>
                        <li>Superfast 2.5-Gigabit Ethernet</li>
                        <li>Enjoy, download, upload and stream content with 4K transcoding.</li>
                        <li>Supports Wake on LAN and Wake on WAN</li>
                        <li>New Rose Gold logo</li>
                        <li>Tool-free installation</li>
                        </ul>',
            'spesifikasi' => '
                        <b>Product Details : </b><br><br>    
                        <div style="float:left;"><img class="img-fluid" src="img/icon/CPU.png" alt=""></div>
                        <div style="padding-left:130px;">
                        CPU<br>
                        CPU Model Realtek RTD1296<br>
                        CPU Architecture ARM64 64-bit<br>
                        CPU Frequency Quad-Core 1.4GHz<br>
                        </div>	
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Memory.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Memory<br>
                        Memory 	2GB DDR4<br>
                        Flash Memory 	8GB eMMC<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Harddisk.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Storage<br>
                        Drive Bays 2<br>
                        Compatible Drive Type<br>
                            3.5" SATA HDD<br>
                            2.5" SATA HDD<br>
                            2.5" SATA SSD<br>
                        Maximum Drive Bays with Expansion Unit 	14<br>
                        Supports Hot Swappable Drives<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/ExternalPort.png" alt=""></div>
                        <div style="padding-left:130px;">
                        External Ports<br>
                        Expansion 3x USB 3.2 Gen 1<br>
                        Network 1x 2.5 Gigabit Ethernet (2.5G/1G/100M)<br>
                        Multimedia Output 	N/A<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Other.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Others<br>
                        System Fan 	1x 70mm<br>
                        Power Supply Unit / Adapter 65W x1<br>
                        Input Power Voltage 100V to 240V AC<br>
                        Certification FCC, CE, VCCI, BSMI, C-TICK, KCC, BIS, CCC<br>
                        Warranty 	3 Years<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Operation.png" alt=""></div>
                        <div style="padding-left:130px;">
                        Operation<br>
                        Power Consumption 12.3W (Operation) 6.04W (Disk Hibernation);<br>
                        Noise Level 18.6dB (HDD idle)<br>
                        Operation Temperature 0°C~40°C (32°F~104°F)<br>
                        Humidity 5% to 95% RH<br>
                        </div>	 
                        <hr></hr>  
                        <div style="float:left;"><img class="img-fluid" src="img/icon/Size.png" alt=""></div>
                        <div style="padding-left:130px;"> 
                        Size and Weight<br>
                        Size 170(H) x 114(W) x 230(D) mm<br>
                        Weight 1.6kg / 3.53 lbs <br>    
                        </div>	
                            ',
            'order' => "https://api.whatsapp.com/send?phone=628122240283&text=Saya Tertarik Dengan Produk ".$_GET['q']." Drivestor 2 Pro - AS3302T"
        )

    );
    }
?>
<?php include("header.php")?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4"><?=$_GET['q']?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><?=$_GET['k']?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$_GET['q']?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Our Products</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php for($index = 0 ; $index < count($dataProduk); $index+=3){?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <?php if(array_key_exists(($index),$dataProduk)){ ?>
                    <div class="service-item rounded h-100 p-5">
                    <img class="img-fluid" src="img/produk/<?=$_GET['q']?>/<?=$dataProduk[$index]['gambar']?>" alt="">
                        <h4 class="mb-0" style="text-align:center;"><?=$dataProduk[$index]['judul']?></h4>
                        <br>
                        <!-- <div class="d-flex align-items-top ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/produk/<?=$dataProduk[$index]['gambar']?>" alt="">
                            </div>
                            <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index]['detail']?></div>
                        </div> -->
                        <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index]['detail']?></div>
                        <a class="btn btn-light px-3"  onclick="openReadMore(<?=$index?>)" style="margin-top:10px;" >Read More</a>
                        <a class="btn btn-primary px-3" href="<?=$dataProduk[$index]['order']?>" target="_blank" style="color:white; margin-top:10px;">Order Now</a>
                    </div>
                    <?php }?>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <?php if(array_key_exists(($index+1),$dataProduk)){ ?>
                    <div class="service-item rounded h-100 p-5">
                        <img class="img-fluid" src="img/produk/<?=$_GET['q']?>/<?=$dataProduk[$index+1]['gambar']?>" alt="">
                        <h4 class="mb-0" style="text-align:center;"><?=$dataProduk[$index+1]['judul']?></h4>
                         <br>
                         <!-- <div class="d-flex align-items-top ms-n5 mb-4">
                             <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                 <img class="img-fluid" src="img/produk/<?=$dataProduk[$index+1]['gambar']?>" alt="">
                             </div>
                             <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index+1]['detail']?></div>
                         </div> -->
                         <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index+1]['detail']?></div>
                         <a class="btn btn-light px-3" onclick="openReadMore(<?=$index+1?>)" style="margin-top:10px;">Read More</a>
                         <a class="btn btn-primary px-3" href="<?=$dataProduk[$index+1]['order']?>" target="_blank" style="color:white; margin-top:10px;">Order Now</a>
                    </div>
                    <?php }?>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <?php if(array_key_exists(($index+2),$dataProduk)){ ?>
                    <div class="service-item rounded h-100 p-5">
                    <img class="img-fluid" src="img/produk/<?=$_GET['q']?>/<?=$dataProduk[$index+2]['gambar']?>" alt="">
                        <h4 class="mb-0" style="text-align:center;"><?=$dataProduk[$index+2]['judul']?></h4>
                         <br>
                         <!-- <div class="d-flex align-items-top ms-n5 mb-4">
                             <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                 <img class="img-fluid" src="img/produk/<?=$dataProduk[$index+2]['gambar']?>" alt="">
                             </div>
                             <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index+2]['detail']?></div>
                         </div> -->
                         <div class="mb-4" style="font-size:10pt;"><?=$dataProduk[$index+2]['detail']?></div>
                         <a class="btn btn-light px-3" onclick="openReadMore(<?=$index+2?>)" style="margin-top:10px;" >Read More</a>
                         <a class="btn btn-primary px-3" href="<?=$dataProduk[$index+2]['order']?>" target="_blank" style="color:white; margin-top:10px;">Order Now</a>
                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMore"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" id="readMoreDiv">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreTitle">Modal title</h5>
             
                <i class="fa fa-times " onclick="closeReadMore()"></i>
               
            </div>
            <br>
            <div id="readMoreGambar" style="text-align:center;"></div>
            <div class="modal-body" id="readMoreBody">
                
            </div>
            <br>
            <br>
            <br>
            <div class="modal-footer" id="readMoreFooter" style="border:none !important;"> 
            <a class="btn btn-primary px-3" id="readMoreOrderNow" href="#" target="_blank" style="color:white;position: fixed; bottom: 8%; box-sizing: border-box; margin-right:12px; z-index: 500000000000000000000000; "><img src="img/icon/icon-06-light.png" style="height:50px;"><br>Order Now</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
<?php include("footer.php")?>