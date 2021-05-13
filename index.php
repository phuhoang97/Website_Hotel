<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0ef7818427.js" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/asserts/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script> 
</head>
<body>
   <!--navbar-->
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler  col-1" type="button" data-toogle="collapse">
                    <div id="mySidenav" class="sidenav">
                        <img src="./img/Logo-Hanoihotel.png" height="80px" alt="">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Clients</a>
                        <a href="#">Contact</a>
                      </div>                      
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </button>
    
                <div class="collapse navbar-collapse col-sm-10 col-lg-5 col-md-4 col-xl-5 col-4" id="navbarResponsive">
                    
                </div>
    
                <a href="" class="navbar-bracnh col-lg-2 col-md-3 col-xl-2 col-11 text-center sticky-center">
                    <img src="./img/Logo-Hanoihotel.png" height="100px" alt="">
                </a>
    
                <div class="Langues collapse navbar-collapse col-md-5 col-lg-5 col-xl-5 col-4" id="navbarResponsive">
                    <select name="Lang" id="">
                        <option value="EN"><b>Engligh</b></option>
                        <option value="VN"><b>Viet Nam</b></option>
                    </select>
                    <div id="main_book" class="hidden-xs">
                        <a href="reservation.php">
                            <span><b>Book Now</b></span>
                        </a>
                    </div>
                </div>
            </div>
       </nav>
    
       <nav class="top navbar navbar-expand-md sticky-top">
            <div class="collapse navbar-collapse col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="container-fluid menu" id="">
                    <div class="container">
                        <div class="row padding">
                            <ul class="navbar-nav row">
                                <li class="nav-item">
                                    <a href="" class="nav-link active"><b>HOME</b></a>
                                </li>
                    
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>ACCOMMODATION</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>F&B SERVICES</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>OFFERS</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>FACILITIES</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>MISSTING & EVENTS</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="./gallery.html" class="nav-link"><b>GALLERY</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="./contact.html" class="nav-link"><b>CONTACT US</b></a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="" class="nav-link"><b>LOCATION</b></a>
                                </li>
                            </ul>

                            <div id="main_book" class="navbar-toggler hidden-xs">
                                <a href="">
                                    <span><b>Book Now</b></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <!--end nav-->

    <!--carousel-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/intercontinental-hanoi-4068417518-2x1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/2012-04-08.06.02.19-1.jpg.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/hanoi.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <!--end carousel-->

    <!--book now-->
    <!--end book now-->

    <!--home intro-->
    <class class="Hotel-infor">
        <div class="container">
            <h1 class="module-title">WELCOME TO HANOI HOTEL</h1>
            <hr class="my-4"/>
            <p>
                Hanoi Hotel is the first international hotel in Hanoi. With 218 Deluxe Rooms and Suites overlooking the scenic Giang Vo Lake, the centrally-located hotel is the perfect place for business or leisure stay. Luxurious accommodations are elegantly furnished and equipped with a wide range of high-end amenities. Hanoi Hotel is renowned for its complete arena of evening entertainments and finest Chinese cuisine in the city. Your stay with us is guaranteed to be a pleasant and the most memorable one.
            </p>
        </div>

        <div class="infor-hotel container-fluid">
           <div class="container">
                <div class="row rgb">
                    <div class="column col-md-4 col-12">
                        <div class="card">
                        <img src="./img/Guest-room.jpg" alt="Jane" style="width:100%">
                        <div class="container text">
                            <p class="title">Guest room</p>
                            <hr class="my-4" />
                            <p>+ Welcome drinks & refresh towels</p>
                            <p>+ Daily complimentary fruit platter</p>
                            <p>+ Daily complimentary fruit platter</p>
                            <p>+ Daily complimentary full hot breakfast</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                        </div>
                    </div>

                    <div class="column col-md-4 col-12">
                        <div class="card">
                        <img src="./img/Superior-Room.jpg" alt="Jane" style="width:100%">
                        <div class="container text">
                            <p class="title">Superior Double or Twin</p>
                            <hr class="my-4" />
                            <p>+ Welcome drinks & refresh towels</p>
                            <p>+ Orientation map</p>
                            <p>+ Daily complimentary fruit platter</p>
                            <p>+ Daily complimentary full hot breakfast</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                        </div>
                    </div>

                    <div class="column col-md-4 col-12">
                        <div class="card">
                        <img src="./img/SET_2153-HDR.jpg" alt="Jane" style="width:100%">
                        <div class="container text">
                            <p class="title">Family suite room</p>
                            <hr class="my-4" />
                            <p>+ FREE Wireless internet acces</p>
                            <p>+ Welcome drinks & refresh towels</p>
                            <p>+ Orientation map</p>
                            <p>+ Orientation map</p>
                            <p><button class="button">Contact</button></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end home-infor-->

    <!--service-->
    <div class="container-fluid service">
        <h6 style="text-align: center; color: #D79F36;">WHAT'S NEW</h6>
        <h1 style="text-align: center;">The New</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4 cd">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top"  src="./img/Ảnh 1.jpg">
                            <h4 class="card-title">Cat Cat village</h4>
                            <p class="cart-text">Cat Cat is a small village of the Black H'Mong people. Come here, you will have the opportunity to visit the 
                                hydroelectric station, Cat Cat Stream &  waterfall, and learn about the culture...</p>
                            <a href="" class="btn btn-outline-secondary">see more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 cd">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top"  src="./img/Ảnh 2 .jpg">
                            <h4 class="card-title">Lao Chai and Ta Van villages</h4>
                            <p class="cart-text">The villages - Lao Chai and  Ta Van are about 6-12 km from the Sapa 
                                town. Up to 100 families of the hill tribe live in the area, along with the other ethnic villagers. Interact with these locals during lunch at a Lao Chai homestay...</p>
                            <a href="" class="btn btn-outline-secondary">see more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 cd">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top"  src="./img/Ảnh 4.jpg">
                            <h4 class="card-title">Fansipan Mountain</h4>
                            <p class="cart-text">Phan Xi Pang peak - with an altitude of 3,143m above sea level, located in the southwest of
                                 Sa Pa town, Sa Pa district. With a length of 280 km from Phong Tho to Hoa Binh.</p>
                            <a href="" class="btn btn-outline-secondary">see more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end service-->

    <!--contact us-->
    <div class="container-fluid">
        <div class="container" style="margin-top:20px;">
            <div class="row">
                <div class="milenia-grid item-content col-md-4 col-12">
                    <h2>CurrentWeather</h2>
                    <p style="color: #858585; font-size: 12px;">Sapa, Vietnam</p>
                    <h1><i class="fas fa-sun"></i> 15°C</h1>
                </div>

                <hr class="my-4"/>

                <div class="milenia-grid item-content col-md-4 col-12">
                    <h2>Stay Connected</h2>
                    <p style="color: #858585; font-size: 12px;">Follow us on social media channelsFollow us on social media channels</p>
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="">
                        <i class="fab fa-youtube"></i>
                    </a>

                    <a href="">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                </div>

                <hr class="my-4"/>

                <div class="milenia-grid item-content col-md-4 col-12">
                    <h2>Newsletter Sign Up</h2>
                    <p style="color: #858585; font-size: 12px;">Sign up for news and special offers</p>
                </div>
            </div>
        </div>
    </div>
    <!--end contact us-->
    <div class="plans-section" id="rooms">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/r1.jpg" alt=" " class="img-responsive" />
                   <h4>Deluxe Room</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>$</span>320</h3>						
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/r2.jpg" alt=" " class="img-responsive" />
                   <h4>Luxury Room</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>$</span>220</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/r3.jpg" alt=" " class="img-responsive" />
                   <h4>Guest House</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>$</span>180</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/r4.jpg" alt=" " class="img-responsive" />
                   <h4>Single Room</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>$</span> 150</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>

    <!--footer-->

    <footer>
        <div class="container-fluid">
                <div class="row">
                    <div class="ft col-md-4">
                        <p>D8 Giang Vo, Ba Dinh District, Hanoi, Vietnam</p>
                        <p>Phone 84 24 3845 2270 Fax 84 24 3845 9209</p>
                        <a href=""><u>sales@hanoihotel.com.vn</u></a>
                        <p>&commat; Copyright Hanoi Hotel 2020</p>
                    </div>
                </div>
        </div>
    </footer>

    <!--end footer-->
</body>
</html>