
    <!-- Footer Start -->
    <div id="aboutus" class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-white mb-4"><img class="img-fluid me-2" src="img/logo.png" alt="" style="width:20%;">Hanasta Indo Teknologi</h6>
                    <p>We are a system integrator company found by some of the best in the industry and has been providing a variety of solution to people with their needs and problem.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="https://www.facebook.com/HanastaIndoTeknologi/"  target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="https://www.instagram.com/hanasta.indoteknologi/"  target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square me-1" href="https://www.tiktok.com/@hanasta.indotech?_t=8fAbWpEui4g&_r=1"  target="_blank"><img class="img-fluid fab" src="img/tiktok.png" alt=""  style="height:20px;" ></a>
                        <a class="btn btn-square me-1" href="#"  target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Soho Capital Lt.32 unit 7<br><span style="padding-left:26px;" >Jl. S.Parman kav 28</span><br><span style="padding-left:26px;" >Tanjung Duren Selatan</span><br><span style="padding-left:26px;">Jakarta Barat, 11470</span></p>
                    <p><i class="fa fa-phone-alt me-3"></i>29181359 / 0812-2240-283</p>
                    <p><i class="fa fa-envelope me-3"></i>info@hanastaindoteknologi.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-light mb-4">Where we are ?</h5>
                    <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Soho+Capital+Lt.32+unit+7/@-6.1749268,106.7878459,17z/data=!3m1!4b1?entry=ttu&amp;z=15&amp;t=m" data-map="!3m1!4b1!4m5!3m4!1s0x2dd7fbaa456b1b51:0x6d402a92418078f3!8m2!3d-7.3045116!4d112.7590545"></iframe>                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="index.php">Hanasta Indo Teknologi</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        function openReadMore(index){
            var dataProduk = [];
            <?php for($x = 0 ; $x < count($dataProduk); $x++) { ?>
                dataProduk.push({
                    'gambar'        : '<?=$dataProduk[$x]['gambar']?>',
                    'judul'         : '<?=$dataProduk[$x]['judul']?>',
                    'spesifikasi'   : '<?=json_encode($dataProduk[$x]['spesifikasi'])?>',
                    'order'         : '<?=$dataProduk[$x]['order']?>',
                });
            <?php } ?>

            $("#readMoreTitle").text('<?=$_GET['q']?>'+' - '+dataProduk[index].judul);
            $("#readMoreGambar").html('<img class="img-fluid"  style=" height:400px;" src="img/produk/<?=$_GET['q']?>/'+dataProduk[index].gambar+'" alt="">');
            $("#readMoreBody").html(dataProduk[index].spesifikasi.replaceAll("\"",""));
            $("#readMoreOrderNow").attr("href",dataProduk[index].order);
            $("#readMore").modal('show');
        }
        function closeReadMore($index){
            $("#readMore").modal('hide');
        }
    </script>
</body>

</html>