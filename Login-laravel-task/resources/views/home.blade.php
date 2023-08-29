<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    /* fonts import */
@import url("../fonts/octin_sports_rg.ttf");
body {
  font-family: "Poppins", sans-serif;
  color: #0c0c0c;
  background-color: #ffffff;
  overflow-x: hidden;
}

.layout_padding {
  padding: 90px 0;
}

.layout_padding2 {
  padding: 45px 0;
}

.layout_padding2-top {
  padding-top: 45px;
}

.layout_padding2-bottom {
  padding-bottom: 45px;
}

.layout_padding-top {
  padding-top: 90px;
}

.layout_padding-bottom {
  padding-bottom: 90px;
}

.long_section {
  margin-left: 45px;
  margin-right: 45px;
  padding-left: 15px;
  padding-right: 15px;
}

.heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.heading_container h2 {
  position: relative;
  font-weight: bold;
  text-transform: uppercase;
}

/*header section*/
.hero_area {
  min-height: 100vh;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.sub_page .hero_area {
  min-height: auto;
}

.header_section {
  background-color: #ffffff;
}

.header_section .container-fluid {
  padding-right: 25px;
  padding-left: 25px;
}

.header_section .nav_container {
  margin: 0 auto;
}

.custom_nav-container .navbar-nav .nav-item .nav-link {
  padding: 3px 15px;
  margin: 10px 15px;
  color: #272727;
  text-align: center;
  text-transform: uppercase;
}

a,
a:hover,
a:focus {
  text-decoration: none;
}

a:hover,
a:focus {
  color: initial;
}

.btn,
.btn:focus {
  outline: none !important;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.custom_nav-container .nav_search-btn {
  width: 35px;
  height: 35px;
  padding: 0;
  border: none;
}

.navbar-brand span {
  font-size: 24px;
  font-weight: 700;
  color: #272727;
  text-transform: uppercase;
}

.custom_nav-container {
  z-index: 99999;
  padding: 5px 0;
}

.custom_nav-container .navbar-toggler {
  outline: none;
}

.custom_nav-container .navbar-toggler {
  padding: 0;
  width: 37px;
  height: 42px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span {
  display: block;
  width: 32px;
  height: 4px;
  background-color: #000000;
  border-radius: 15px;
  margin: 7px 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  position: relative;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::before, .custom_nav-container .navbar-toggler span::after {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #000000;
  border-radius: 15px;
  top: -10px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::after {
  top: 10px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span::before, .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  top: 0;
}

.quote_btn-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.quote_btn-container a {
  color: #151515;
  margin-right: 25px;
  text-transform: uppercase;
}

.quote_btn-container a span {
  margin-right: 5px;
}

/*end header section*/
/* slider section */
.slider_section {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  background-color: #f9fafa;
}

.slider_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.slider_section #customCarousel {
  width: 100%;
  z-index: 3;
}

.slider_section .detail-box {
  color: #000000;
}

.slider_section .detail-box h1 {
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 0;
}

.slider_section .detail-box p {
  margin: 25px 0;
}

.slider_section .detail-box .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0 -5px;
}

.slider_section .detail-box .btn-box a {
  margin: 5px;
  text-align: center;
  width: 165px;
}

.slider_section .detail-box .btn-box .btn1 {
  display: inline-block;
  padding: 10px 15px;
  background-color: #f89646;
  color: #ffffff;
  border-radius: 0;
  border: 1px solid #f89646;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.slider_section .detail-box .btn-box .btn1:hover {
  background-color: transparent;
  color: #f89646;
}

.slider_section .detail-box .btn-box .btn2 {
  display: inline-block;
  padding: 10px 15px;
  background-color: #6bb7be;
  color: #ffffff;
  border-radius: 0;
  border: 1px solid #6bb7be;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.slider_section .detail-box .btn-box .btn2:hover {
  background-color: transparent;
  color: #6bb7be;
}

.slider_section .img-box img {
  width: 100%;
}

.slider_section .carousel-indicators {
  position: unset;
  margin: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 45px;
}

.slider_section .carousel-indicators li {
  background-color: #6bb7be;
  width: 12px;
  height: 12px;
  border-radius: 100%;
  opacity: 1;
}

.slider_section .carousel-indicators li.active {
  width: 17px;
  height: 17px;
  background-color: #f89646;
}

.furniture_section .box {
  margin-top: 45px;
  background-color: #f7fafa;
  padding: 25px;
  border-radius: 5px;
}

.furniture_section .box .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 275px;
  padding: 25px;
}

.furniture_section .box .img-box img {
  max-width: 100%;
  max-height: 100%;
}

.furniture_section .box .detail-box {
  margin-top: 15px;
}

.furniture_section .box .detail-box h5 {
  text-transform: uppercase;
  font-size: 18px;
}

.furniture_section .box .detail-box .price_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.furniture_section .box .detail-box .price_box .price_heading {
  margin-bottom: 0;
}

.furniture_section .box .detail-box .price_box .price_heading span {
  color: #6bb7be;
}

.furniture_section .box .detail-box .price_box a {
  color: #6bb7be;
  text-transform: uppercase;
  font-size: 15px;
}

.about_section {
  background-color: #f9fafa;
}

.about_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.about_section .img-box img {
  width: 100%;
}

.about_section .detail-box p {
  margin-top: 10px;
  margin-bottom: 35px;
}

.about_section .detail-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #6bb7be;
  color: #ffffff;
  border-radius: 0;
  border: 1px solid #6bb7be;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.about_section .detail-box a:hover {
  background-color: transparent;
  color: #6bb7be;
}

.blog_section .heading_container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.blog_section .heading_container h2::before {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.blog_section .box {
  margin-top: 55px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
}

.blog_section .box .img-box {
  position: relative;
}

.blog_section .box .img-box img {
  width: 100%;
}

.blog_section .box .detail-box {
  padding: 25px;
}

.blog_section .box .detail-box h5 {
  font-weight: bold;
}

.blog_section .box .detail-box p {
  font-size: 15px;
  color: #444;
}

.blog_section .box .detail-box a {
  display: inline-block;
  padding: 10px 30px;
  background-color: #6bb7be;
  color: #ffffff;
  border-radius: 0;
  border: 1px solid #6bb7be;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.blog_section .box .detail-box a:hover {
  background-color: transparent;
  color: #6bb7be;
}

.client_section .heading_container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.client_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 45px;
  padding: 35px 25px;
  -webkit-box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.15);
}

.client_section .box .img-box {
  border-radius: 100%;
  border: 10px solid #6bb7be;
  margin-right: 25px;
  min-width: 175px;
  max-width: 175px;
  overflow: hidden;
}

.client_section .box .img-box img {
  width: 100%;
}

.client_section .box .detail-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.client_section .box .detail-box .name {
  text-align: center;
}

.client_section .box .detail-box .name img {
  width: 25px;
  margin-bottom: 5px;
}

.client_section .box .detail-box .name h6 {
  color: #6bb7be;
  font-size: 20px;
}

.client_section .carousel_btn-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.client_section .carousel-control-prev,
.client_section .carousel-control-next {
  position: unset;
  width: 45px;
  height: 45px;
  border: none;
  opacity: 1;
  background-repeat: no-repeat;
  background-size: 12px;
  background-position: center;
  background-color: #6bb7be;
  background-position: center;
  border-radius: 100%;
  margin: 0 2.5px;
}

.client_section .carousel-control-prev:hover,
.client_section .carousel-control-next:hover {
  background-color: #000000;
}

.client_section .carousel-control-next {
  left: initial;
}

.contact_section {
  position: relative;
  background-color: #f9fafa;
  padding-top: 75px;
  padding-bottom: 75px;
}

.contact_section .heading_container {
  margin-bottom: 25px;
}

.contact_section .heading_container h2 {
  text-transform: uppercase;
}

.contact_section .form_container input {
  width: 100%;
  border: none;
  height: 50px;
  margin-bottom: 25px;
  padding-left: 15px;
  outline: none;
  color: #101010;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.05);
          box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.05);
}

.contact_section .form_container input::-webkit-input-placeholder {
  color: #333;
}

.contact_section .form_container input:-ms-input-placeholder {
  color: #333;
}

.contact_section .form_container input::-ms-input-placeholder {
  color: #333;
}

.contact_section .form_container input::placeholder {
  color: #333;
}

.contact_section .form_container input.message-box {
  height: 120px;
}

.contact_section .form_container button {
  border: none;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 55px;
  background-color: #6bb7be;
  color: #ffffff;
  border-radius: 0px;
  border: 1px solid #6bb7be;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.contact_section .form_container button:hover {
  background-color: transparent;
  color: #6bb7be;
}

.contact_section .map_container {
  height: 500px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  padding: 0;
}

.contact_section .map_container .map {
  height: 100%;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.contact_section .map_container .map #googleMap {
  height: 100%;
}

.info_section {
  background-color: #191e1f;
  color: #ffffff;
  padding-top: 45px;
  padding-bottom: 45px;
}

.info_section .contact_nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 25px 0;
  text-align: center;
}

.info_section .contact_nav a {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  margin: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #ffffff;
}

.info_section .contact_nav a i {
  font-size: 28px;
}

.info_section .contact_nav a:hover {
  color: #f89646;
}

.info_section .info_top {
  padding: 45px 0;
}

.info_section h4 {
  text-transform: uppercase;
  position: relative;
  margin-bottom: 25px;
}

.info_section .info_links .info_links_menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.info_section .info_links .info_links_menu a {
  color: #ffffff;
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
}

.info_section .info_links .info_links_menu a:hover, .info_section .info_links .info_links_menu a.active {
  color: #f89646;
}

.info_section .info_post .post_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.info_section .info_post .post_box .img-box {
  min-width: 65px;
  max-width: 65px;
  height: 65px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #ffffff;
  -ms-flex-preferred-size: calc(33% - 10px);
      flex-basis: calc(33% - 10px);
  padding: 10px;
  margin: 5px;
}

.info_section .info_post .post_box .img-box img {
  max-width: 100%;
  max-height: 100%;
}

.info_section .info_post .post_box p {
  margin: 0;
}

.info_section .info_post .post_box:not(:nth-last-child(1)) {
  margin-bottom: 15px;
}

.info_section .info_form input {
  width: 100%;
  border: none;
  height: 45px;
  margin-bottom: 15px;
  padding-left: 25px;
  background-color: #eaeaea;
  outline: none;
  color: #101010;
}

.info_section .info_form button {
  display: inline-block;
  padding: 10px 45px;
  background-color: #6bb7be;
  color: #ffffff;
  border-radius: 0px;
  border: 1px solid #6bb7be;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.info_section .info_form button:hover {
  background-color: transparent;
  color: #6bb7be;
}

.info_section .info_form .social_box {
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 25px;
}

.info_section .info_form .social_box a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 5px;
  width: 45px;
  height: 45px;
  border: 1px solid #6bb7be;
  color: #6bb7be;
  font-size: 18px;
  margin-right: 10px;
}

.info_section .info_form .social_box a:hover {
  color: #f89646;
  border-color: #f89646;
}

/* footer section*/
.footer_section {
  position: relative;
  text-align: center;
}

.footer_section p {
  color: #000000;
  padding: 25px 0;
  margin: 0;
}

.footer_section p a {
  color: inherit;
}
/*# sourceMappingURL=style.css.map */
  </style>

    <title>Home</title>
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Edgecut
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="furniture.html">Furnitures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Furniture
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Double Bed Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                House Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f5.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blue Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f6.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Look even slightly believable. If you are
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Anything embarrassing hidden in the middle
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Molestias magni natus dolores odio commodi. Quaerat!
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : demo@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row ">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
                QUICK LINKS
              </h4>
              <div class="info_links_menu">
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                <a class="" href="about.html"> About</a>
                <a class="" href="furniture.html">Furniture</a>
                <a class="" href="blog.html">Blog</a>
                <a class="" href="contact.html">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
                INSTAGRAM FEEDS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/f1.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f2.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f3.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f4.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f5.png" alt="">
                </div>
                <div class="img-box">
                  <img src="images/f6.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
                SIGN UP TO OUR NEWSLETTER
              </h4>
              <form action="">
                <input type="text" placeholder="Enter Your Email" />
                <button type="submit">
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
</body>
</html>