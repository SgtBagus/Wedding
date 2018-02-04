<!DOCTYPE html>
<?php include('system/session.php');?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Document Title  -->
        <title>Dennys Ayu Rabi</title>

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Cardo|Dancing+Script:700|Montserrat:300,400,500" rel="stylesheet"> 

        <!-- CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/options-menu.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <!-- Color CSS -->
        <link rel="stylesheet" href="css/color/magical.css" type="text/css">
        <style>
            .lokasi_dan_waktu{
                font-family: "Montserrat", sans-serif;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-size: 11px;
                margin: 3px 0 10px 0;
                color: #d4af37;
                margin-top: 20px;
            }
            .spinner:before, .spinner:after, .success-message, label.error, .page-title-description:before{
                background: white;
            }
        </style>
    </head>
    <body>
        
        <header class="top-menu header-menu animate" data-animation="fadeIn" data-timeout="900">
          <div class="container"> <!-- -fluid  -->
            <div class="row">
              <div class="col-md-2 col-sm-2 mobile-center">
                <a href="index-2.html">
                  <div class="site-logo">
                    Dennys <span>&</span> Ayu
                  </div>
                </a>
              </div>
                <div class="col-md-10 col-sm-10 padding-none">
                  <div class="navigation">
                    <div class="mobile-center">
                      <a href="#menu" class="menu-link"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </div> 
                    <nav class="menu" id="menu">
                    </nav> <!-- / nav -->
                  </div>
                </div>
            </div>
          </div>
        </header>
        
         <!--  FULLSCREEN SLIDER -->
            <div class="owl-carousel fullscreen" id="fullscreen-slider">
            <div class="item height100vh blend-bg" style="background-image: url(img/image33.jpg);">
              <div class="slider-overlay slider-bg"></div>
              <div class="slider-alignment">
                <div class="v-align-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-offset-6 col-md-6">
                        <div class="just-image-title-inner text-center">
                          <div class="page-title-description" data-animation="fadeIn" data-timeout="620">
                            <h3 style="color: white; margin-top:-35px">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h3>
                          </div>
                          <div class="just-image-title animate invitation" data-animation="fadeInLeft" data-timeout="600">
                            <p class="just-image-title-one"> 
                                "Maha suci Allah yang telah menciptakan berpasang-pasangan semuanya, baik dari yang ditumbuhkan oleh bumi dan dari diri mereka maupun dari apa yang tidak mereka ketahui."  QS Yaasiin : 36 
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- / .item -->
            <div class="item height100vh blend-bg" style="background-image: url(img/image32.jpg);">
              <div class="slider-overlay slider-bg"></div>
              <div class="slider-alignment">
                <div class="v-align-center">
                  <div class="container">
                    <div class="row">
                    <?php
                    if($logged_in = true){

                    }else if($logged_in = false){

                    }
                    ?>
                      <!-- sudah login kesini -->
<!--
                      <div class="col-md-offset-2 col-md-8">
                        <div class="just-image-title-inner text-center">
                            <div class="just-image-description animate" data-animation="fadeIn" data-timeout="620">
                           Kepada Yth Bapak / Ibu / Saudara / Saudari
                          </div>
                          <div class="just-image-title animate" data-animation="fadeIn" data-timeout="600">
                            <span class="just-image-title-one">Bagus Andhika</span>
                          </div>
                            <div class="page-title-description breadcrumbs">
                            <ul>                              
                              <li>Bumi Asri</li>
                            </ul>
                          </div>
                        </div>
                      </div>
-->
                      <!-- kalau belum kesini -->
                        <div class="col-md-offset-2 col-md-8">
                        <div class="just-image-title-inner text-right">
                          <div class="just-image-title animate" data-animation="fadeInLeft" data-timeout="600">
                            <span class="just-image-title-one">The wedding celebration of<br> Dennys & Ayu</span>
                          </div>
                          <div class="animate" data-animation="fadeInUp" data-timeout="600">
                            <p><a class="btn btn-medium btn-clr" href="kode.html">Kode Undangan</a></p>
                          </div>

                        </div>
                      </div>
                        <!--sampai sini-->
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- / .item -->

            

          </div> <!-- / .owl-carousel -->

          <!--  / FULLSCREEN SLIDER ELEMENT -->
        
            <div class="bg-clr bg-clr-figure">
              <div class="container">
                <div class="row">
                  <div class="col-md-offset-1 col-md-10">
                    <div class="text-center animate" data-animation="fadeIn" data-timeout="200">
                      <div class="section-title">
                        <h3 style="color: white;">Undangan</h3>
                          <p>Ya Allah Ar Rohman Ar Rohim</p>
                          <p> Sesungguhnya hati ini telah terhimpun dalam cinta dan bertemu dalam taat kepada Mu. Eratkanlah ikatannya, kekalkanlah kasih sayangnya, berkahilah jalannya dan penuhilah hati ini dengan cahaya Mu yang tak pernah pudar</p>
                          <p>Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud menyelenggarakan Pernikahan putra-putri kami</p>
                      </div>
                    </div>
                    <div class="white-space"></div>
                  </div>
                </div>
              </div>
            </div> <!-- / .content-section -->
        
        <div class="content-section">
          <div class="container">
            <div class="row">
              <div class="col-md-6 animate" data-animation="fadeIn" data-timeout="300">
                  <div class="about_section left12">
                         <div class="about_pic_container">

                            <div class="about_pic"><img src="img/about_f.jpg" alt="" title=""></div>
                        </div>
                            <h3>Dennys Rizky Eldian</h3>
                            <p style="color: #1f2941">Putra pertama dari Bapak Tris dan Ibu Mamik, Pare, Kediri</p>                            
                   </div>
              </div>
              <div class="col-md-6 animate" data-animation="fadeIn" data-timeout="300">
                  <div class="about_section left12">
                         <div class="about_pic_container">

                            <div class="about_pic"><img src="img/about_f.jpg" alt="" title=""></div>
                        </div>
                            <h3>(Ayu) Yanuar Setyoningsih</h3>
                            <p style="color: #1f2941">Putri pertama dari Bapak Didik Budi Setyo dan Ibu Siti Djulianingsih, Junrejo, Batu</p>
                   </div>
              </div>
            </div>
          </div>
        </div> <!-- / .content-section -->
      
    <div class="content-section text-center">

          <div class="bg-clr call-to-acton">

            <div class="container">
              <div class="row">

                <div class="col-md-offset-1 col-md-10">
                  <div class="text-center animate" data-animation="fadeIn" data-timeout="200">
                    <div class="section-title">
                      <h3>Waktu dan Tempat</h3>
                      <p>Rasa haru dan bahagia terukir dihati kami atas limpahan Rahmat Allah SWT dan kami bersimpuh memohon Ridho Nya untuk melangsungkan pernikahan putra – putri kami</p>
                    </div>
                    <div class="section-description">
                      <p>Kehadiran Anda adalah silaturahmi, Do'a restu Anda adalah kado terindah bagi kami, kehadiran Anda adalah merupakan doa' restu yang tak ternilai harganya. </p>
                    </div>
                  </div>
                  <div class="white-space"></div>
                </div>

                <div class="col-md-4">

                  <!-- IMAGE TEXT ELEMENT -->

                  <div class="image-text image-text-clr animate" data-animation="fadeIn" data-timeout="400">
                    <div class="image-text-div">
                      <img src="img/masonry15.jpg" alt="Reception">
                      <div class="image-text-icon">
                        <i class="fa fa-diamond" style="background-color: #1f2941; color: #d4af37"></i>
                      </div>
                    </div>
                    <div class="image-text-title"><h6>Akad</h6></div>
                    <div class="image-text-description" style="color: white">"Dan kawinkanlah orang-orang yang sendirian di antara kamu, dan orang-orang yang layak (berkawin) dari hamba-hamba sahayamu yang laki-laki dan hamba-hamba sahayamu yang perempuan. Jika mereka miskin, Allah akan menjadikan mereka mampu dengan karunia-Nya" [An-Nuur/24: 32]</div>
                    <div class="image-text-important lokasi_dan_waktu">
                      <span class="fa fa-calendar-check-o"></span> Sabtu, 24 Februari 2018 <br>
                      <span class="fa fa-clock-o"></span> 07.00 : 09.00 WIB <br>
                      <span class="fa fa-map-marker"></span> Villa Hamza, Dadaprejo, Junrejo, Batu
                    </div>
                  </div>

                  <!-- / IMAGE TEXT ELEMENT -->


                </div>

                <div class="col-md-4">

                  <!-- IMAGE TEXT ELEMENT -->

                  <div class="image-text image-text-clr animate" data-animation="fadeIn" data-timeout="600">
                    <div class="image-text-div">
                      <img src="img/masonry13.jpg" alt="Wedding Ceremony">
                      <div class="image-text-icon">
                        <i class="fa fa-heart" style="background-color: #1f2941; color: #d4af37"></i>
                      </div>
                    </div>
                    <div class="image-text-title"><h6>Resepsi</h6></div>
                    <div class="image-text-description" style="color: white">Rasulullah pernah berkata kepada Abdurrahman bin Auf, "Adakanlah walimah walaupun hanya dengan seekor kambing." (HR. Abu Dawud).
                        <br><br>
                        Dalam hadits riwayat Ibnu Majah Nabi bersabda, “Umumkan nikah.”</div>
                    <div class="image-text-important lokasi_dan_waktu">
                      <span class="fa fa-calendar-check-o"></span> Sabtu, 24 Februari 2018 <br>
                      <span class="fa fa-clock-o"></span> 10.00 : 13.00 WIB <br>
                      <span class="fa fa-map-marker"></span> Villa Hamza, Dadaprejo, Junrejo, Batu
                    </div>
                  </div>

                  <!-- / IMAGE TEXT ELEMENT -->


                </div>

                <div class="col-md-4">

                  <!-- IMAGE TEXT ELEMENT -->

                  <div class="image-text image-text-clr animate" data-animation="fadeIn" data-timeout="800">
                    <div class="image-text-div">
                      <img src="img/masonry14.jpg" alt="Wedding Afterparty">
                      <div class="image-text-icon">
                        <i class="fa fa-glass" style="background-color: #1f2941; color: #d4af37"></i>
                      </div>
                    </div>
                    
                    <div class="image-text-title"><h6>Ngunduh Mantu</h6></div>
                    <div class="image-text-description" style="color: white">Hendaklah kita semua mensyukuri nikmat ini dan tidak menodainya dengan berbagai kemungkaran pernikahan yang beraneka macam, sesuai dengah kemajuan zaman dan adat istiadat yang dipertahankan, mulai sejak awal pernikahan hingga penutupan.<br><br></div>
                    <div class="image-text-important lokasi_dan_waktu">
                      <span class="fa fa-calendar-check-o"></span> Rabu, 7 Maret 2018 <br>
                      <span class="fa fa-clock-o"></span>  09.00 AM - selesai <br>
                      <span class="fa fa-map-marker"></span> Stanley Dock, Regent Rd, Liverpool L3 0AN, UK
                    </div>
                  </div>

                  <!-- / IMAGE TEXT ELEMENT -->

                </div>

              </div>
            </div>
          </div>
        </div> <!-- / .content-section -->
        
        <div class="content-section">

          <div class="container">

            <div class="row">
              <div class="col-md-offset-1 col-md-10">
                <div class="text-center animate" data-animation="fadeIn" data-timeout="200">
                  <div class="section-title">
                    <h3 style="margin-top: -45px;">Keluarga Kecil Kami</h3>
                    <p style="color: #1f2941; font-weight:bold; margin-top: 25px;">Bukanlah darah dan daging yang menjadikan kita keluarga, melainkan hati</p>
                  </div>
                  <div class="section-description">
                    <p style="color: #1f2941; font-weight:bold;">Kebersamaan keluarga menjadi sempurna, manakala senyuman tiap orang di dalamnya penuh dengan keikhlasan dan saling menyayangi. Kesenangan bermula dari kebersamaan bersama orang-orang terdekat, terutama keluarga. Percayalah bahwa keluarga adalah tempat terbaik untuk berbagi.</p>
                  </div>
                </div>
                <div class="white-space"></div>
              </div>
            </div>

             <section id="gallery">
              <div class="row">

                <div class="owl-carousel" id="gallery-carousel">

                  <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/team1.jpg" alt="" title="">
                         </div>
                        <h3>Pak Tris</h3>
                        <p>Maid of Honor</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/team1.jpg" alt="" title="">
                         </div>
                        <h3>Bu Mamik</h3>
                        <p>Maid of Honor</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/bapak_didik.jpg" alt="" title="">
                         </div>
                        <h3>Didik Budi Setyo</h3>
                        <p>Ayah dari manten putri</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/ibu_aning.jpg" alt="" title="">
                         </div>
                        <h3>Siti Djulianingsih</h3>
                        <p>Ibu dari manten putri</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/anggun.jpg" alt="" title="">
                         </div>
                        <h3>Anggun Putri Setyoningsih</h3>
                        <p>Adik pertama dari manten putri</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/radin_dian.jpg" alt="" title="">
                         </div>
                        <h3>Radin Dian Zeta</h3>
                        <p>Adik kedua dari manten putri</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/team1.jpg" alt="" title="">
                         </div>
                        <h3>Dian Anggraeni</h3>
                        <p>Adik pertama dari manten putra</p> 
                     </div>               
                  </div>
                    <!-- IMAGE ITEM ELEMENT -->
                  <div class="item grid-img img-item">
                     <div class="carousel_pic_container">					
                         <div class="carousel_pic">
                             <img src="img/bagus.jpg" alt="" title="">
                         </div>
                        <h3>Bagus Andhika</h3>
                        <p>Adik ketiga dari manten putri</p> 
                     </div>               
                  </div>
                  
                </div> <!-- / .owl-carousel -->

              </div> <!-- / .row -->
              
            </section>
          </div> <!-- / .container -->
              
      </div> <!-- / .content-section -->
    
    <div class="content-section text-center bg-clr" style="background-color: white">

        <div class="row">
          
          <div class="col-md-12 text-center" >
            <h4 style="color: #1f2941 !important;">Lokasi</h4>
            <div class="white-space"></div>
            <div class="white-space"></div>
            <!--  GOOGLE MAP ELEMENT -->
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8618470866622!2d112.57484990156381!3d-7.909497584050383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788175fc0f2de1%3A0x3bea395077ea1ee2!2sVilla+HAMSA!5e0!3m2!1sid!2sid!4v1509959586809" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
          </div>
        </div>
    </div>
    
    <section class="landing-section" id="lovestory">

      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="text-center animate" data-animation="fadeIn" data-timeout="200">
              <div class="section-title">
                <h3>Kami yang berbahagia</h3>
                <p style="color: #1f2941;">Do not be late to the ceremony</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
             <div class="col-sm-8 col-sm-offset-2">
          <div class="text-center">
            <h5>Dengan tidak mengurangi rasa hormat, mohon doa serta mengharap kehadiran Bapak/Ibu/Saudara pada acara kami</h5>
            <div class="white-space"></div>
            <div class="white-space"></div>
            <p  style="color: #1f2941;">Mohon maaf apabila ada kesalahan pada penulisan nama dan gelar</p>
            <div class="white-space"></div>
            <div class="white-space"></div>
          </div>
            </div>          
        </div>
      </div> <!-- / .container -->

      <!-- / CALL TO ACTION ELEMENT -->

    </section>  <!-- / #lovestory -->    
    
    <footer class="style-1 text-center" style="background-color: #1f2941">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text">
              <div class="site-logo animate" data-animation="fadeIn" data-timeout="100">
                Dennys <span>&</span> Ayu
              </div>
                <p>© 2017 Designed by <a href="#">AbsharBy</a> 
                    & Developed by <a href="https://www.facebook.com/Redhotresvolska">Bagus Andhika</a>
                </p>
            </div>
          </div>
        
        </div>
      </div>
    </footer>

    <!-- SCROLL UP -->
    <a href="#" class="scrollup">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- / SCROLL UP -->
        
        
        <script src="js/jquery.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.lighterbox.0.0.3.min.js"></script>
        <script src="js/instagramLite.min.js"></script>
        <script src="js/options-menu.js"></script>

        <script>if (window.module) module = window.module;</script>
        <script src="js/main.js"></script>

        
    </body>
</html>