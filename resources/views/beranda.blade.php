@extends('front.app')
@section('front')

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('front/images/logo_fix.png')}}" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{url ('/')}}">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Kontak</a>
              </li>
            </ul>
            <div class="user_option">
              <a href="{{ route ('login') }}">
                <img src="{{asset('front/images/user.png')}}" alt="">
                <span>
                  Login
                </span>
              </a>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button> -->
              </form>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <!-- <div class="play_btn">
        <a href="">
          <img src="{{asset('front/images/play.png')}}" alt="">
        </a>
      </div> -->
      <!-- <div class="number_box">
        <div>
          <ol class="carousel-indicators indicator-2">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
        </div>
      </div> -->
      <div class="container">
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol> -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Desa Wisata
                      <span>
                        CiHerang
                      </span>
                    </h1>
                    <p>
                     Ciherang Merupakan salah satu desa wisata rintisan.
                    </p>
                    <!-- <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div> -->
                  </div>
                </div>
                <!-- <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      The Latest
                      <span>
                        Furniture
                      </span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="{{asset('front/images/slider-img.png')}}" alt="">
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->
@foreach ($wisata as $w)
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                {{$w -> nama}}
              </h2>

            </div>
            <p>
              {{$w -> deskripsi_aktifitas}}
            </p>
            <a href="{{ url('/destination/'. $w->id) }}">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('images/icons/'.$w-> icon)}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

  <!-- end about section -->

  <!-- trending section -->

  <!-- <section class="trending_section layout_padding">
    <div id="accordion">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Trending Categories
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  <div class="number">
                    <h5>
                      01
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Chairs
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  <div class="number">
                    <h5>
                      02
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Tables
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  <div class="number">
                    <h5>
                      03
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Bads
                    </h5>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">
                  <div class="number">
                    <h5>
                      04
                    </h5>
                  </div>
                  <hr>
                  <div class="t-name">
                    <h5>
                      Furnitures
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-1.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-2.jpg')}}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-3.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-4.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-3.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-4.jpg')}}" alt="">
                  </div>
                </div>
                <div class="box b-2">

                  <div class="img-box">
                    <img src="{{asset('front/images/t-1.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-2.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-4.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-1.jpg')}}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-3.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-2.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img_container ">
                <div class="box b-1">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-1.jpg')}}" alt="">
                  </div>

                  <div class="img-box">
                    <img src="{{asset('front/images/t-4.jpg')}}" alt="">
                  </div>
                </div>
                <div class="box b-2">
                  <div class="img-box">
                    <img src="{{asset('front/images/t-3.jpg')}}" alt="">
                  </div>
                  <div class="img-box">
                    <img src="{{asset('front/images/t-2.jpg')}}" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </section> -->

  <!-- end trending section -->

  <!-- discount section -->

  <!-- <section class="discount_section  layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              The Latest Collection
            </h2>
            <h2 class="main_heading">
              50% DISCOUNT
            </h2>

            <div class="">
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/discount-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- end discount section -->

  <!-- brand section -->
<!-- 
  <section class="brand_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Kegiatan Kegiatan
        </h2>
      </div>
      <div class="brand_container layout_padding2">
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/slider-img.png" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/slider-img.png" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/slider-img.png" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
        <div class="box">
          <a href="">
            <div class="img-box">
              <img src="images/slider-img.png" alt="">
            </div>
            <div class="detail-box">
              <h6 class="price">
                $100
              </h6>
              <h6>
                Chair
              </h6>
            </div>
          </a>
        </div>
      </div>
      <a href="" class="brand-btn">
        See More
      </a>
    </div>
  </section> -->

  <!-- end brand section -->
  <!-- contact section -->

  
  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>

    <div class="container">
      <div class="client_container layout_padding2">
        @foreach($kegiatan as $k)
        <div class="client_box b-1">
          <div class="client-id">
            <div class="img-box">
              <img src="{{asset('images/kegiatan/'.$k->gambar)}}" alt="" />
            </div>
            <div class="name">
              <h5>
                Magna
              </h5>
              <p>
                
              </p>
            </div>
          </div>
          <div class="detail">
            <p>
            {{$k->deskripsi_kegiatan}}
            </p>
            <div>
             <a href="{{ url('/activity/'. $k->id) }}"><div class="arrow_img"></div></a> 
              
            </div>
          </div>
        </div>
        @endforeach
        <!-- <div class="client_box b-2">
          <div class="client-id">
            <div class="img-box">
              <img src="images/client-2.png" alt="" />
            </div>
            <div class="name">
              <h5>
                Aliqua
              </h5>
              <p>
                Consectetur adipiscing
              </p>

            </div>
          </div>
          <div class="detail">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum
            </p>
            <div>
              <div class="arrow_img">
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container">
        <h2 class="">
          Lokasi Pariwisata
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6"> -->
          <!-- <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form> -->
        <!-- </div> -->
        <div class="col-md-12">
          <div class="map_container">
            <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31678.058857956483!2d107.87956019218839!3d-7.037778149696546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c8fed4167b61%3A0x871028ee1d33b7b2!2sCiherang%2C%20Kec.%20Nagreg%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1724074843305!5m2!1sid!2sid" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  <section id="about" class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          Wisata Ciherang
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Tentang Wisata
            </h5>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/location-white.png')}}" width="18px" alt="">
              </div>
              <p>
              Ciherang Kec. Nagreg Kabupaten Bandung Jawa Barat
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/telephone-white.png')}}" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/envelope-white.png')}}" width="18px" alt="">
              </div>
              <p>
                Ciherang@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              Saat ini beberapa tempat wisata sedang dalam proses persiapan.
            </p>
          </div>
        </div>

        <!-- <div class="col-md-3"> -->
          <!-- <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="{{asset('front/images/i-1.jpg')}}" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="{{asset('front/images/i-2.jpg')}}" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="{{asset('front/images/i-3.jpg')}}" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="{{asset('front/images/i-4.jpg')}}" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="{{asset('front/images/i-5.jpg')}}" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="{{asset('front/images/i-6.jpg')}}" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-md-3"> -->
          <!-- <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form> -->
            <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Sosial Media
            </h5>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/fb.png')}}" width="18px" alt="">
              </div>
              <p>
                Ciherang
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/youtube.png')}}" width="12px" alt="">
              </div>
              <p>
                ciherang
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="{{asset('front/images/twitter.png')}}" width="18px" alt="">
              </div>
              <p>
                ciherang
              </p>
            </div>
          </div>
        </div>

            <!-- <div class="social_box">
              <a href="">
                <img src="{{asset('front/images/fb.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('front/images/twitter.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('front/images/linkedin.png')}}" alt="">
              </a>
              <a href="">
                <img src="{{asset('front/images/youtube.png')}}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </section>

  <!-- end info_section -->


@endsection