@extends('layouts.frontend')

@section('content')
    <section class="slider">
        <div id="carouselHomeId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slider.png" class="w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slider.png" class="w-100 d-block" alt="Second slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeId" data-bs-slide="prev">
                <span class="" aria-hidden="true">
                    <img src="images/icon/arrowleftcircle.svg" alt="icon" class="mainslider_arrow">
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeId" data-bs-slide="next">
                <span class="" aria-hidden="true">
                    <img src="images/icon/arrowrightcircle.svg" alt="icon" class="mainslider_arrow">
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="features pb-5">
            <div class="container">
                <div class="row g-lg-4 g-3">
                    <div class="col-md-4">
                        <div class="feature_box text-center">
                            <img src="images/icon/select.svg" alt="..." class="feature_icon">
                            <h6 class="count">3.65</h6>
                            <span class="feature_text">
                                More than 36,500 square <br class="d-lg-block d-md-block d-none"> meters
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature_box text-center">
                            <img src="images/icon/saving_user.svg" alt="..." class="feature_icon">
                            <h6 class="count">361</h6>
                            <span class="feature_text">
                                Serving many customers <br class="d-lg-block d-md-block d-none"> around the world
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature_box text-center">
                            <img src="images/icon/profile_user.svg" alt="..." class="feature_icon">
                            <h6 class="count">1075</h6>
                            <span class="feature_text">
                                Serving many customers <br class="d-lg-block d-md-block d-none"> around the world
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <secton class="about">
        <div class="container my-5 pb-3">
            <div class="row gy-5 align-items-lg-center">
                <div class="col-md-5 ps-lg-5">
                    <div class="slider_border">
                        <div id="carouselAboutId" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/about_slider.png" class="w-100 d-block" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/about_slider.png" class="w-100 d-block" alt="Second slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAboutId"
                                data-bs-slide="prev">
                                <span class="" aria-hidden="true">
                                    <img src="images/icon/arrowroundleft.svg" class="about_arrow">
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselAboutId"
                                data-bs-slide="next">
                                <span class="" aria-hidden="true">
                                    <img src="images/icon/arrowroundright.svg" class="about_arrow">
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 ps-lg-5">
                    <h2 class="main_header text-uppercase">About Us</h2>
                    <h5 class="about_sub_header text-uppercase">EAST STAR PLASTIC CUP FACTORY</h5>
                    <p class="all_text">
                        East Star Plastic Cup Factory Packaging is a leading China manufacturer of flexible packaging for
                        multiple industries including snack food, confectionery, frozen food, beverage, retort, liquid
                        detergent and agrochemical markets. We have 12 national patents for our bags, such as Triangle
                        bottom bag, laser scoring bag, shaped bag, stand up pouch, etc.
                    </p>
                    <p class="all_text">East Star Plastic cup Factory has established a reliable system of quality
                        management. We are certified with ISO9001, ISO22000, HACCP and BRC-IOP standards, and prioritize
                        quality production in a safe and sustainably responsible environment.
                    </p>
                    <p class="all_text">Our excellent R&D , Design department will provide you with the most updated
                        packaging solution, it will be our great honor to work with you.
                    </p>
                    <div class="mt-5">
                        <a href="about-us.html" class="text-decoration-none">
                            <button class="seemore_btn">See More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </secton>
    <section class="products">
        <div class="container py-3">
            <div class="row py-5 justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="main_header text-uppercase">RECOMMEND PRODUCTS</h2>
                    <h6 class="sub_header text-uppercase">CREDIT FOREMOST QUALITY FIRST PIONEERING AND INNOVATIVE</h6>
                </div>
                <div class="col-lg-11 col-md-10 col-10">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product1.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">150ML GOBLET</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product2.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">230ML GOBLET</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product3.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">Enviromentally friendly lunch box</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product1.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">150ML GOBLET</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product2.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">230ML GOBLET</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product_box">
                                <img src="images/rec_product3.png" alt="..." class="w-100">
                                <h6 class="product_header text-center">Enviromentally friendly lunch box</h6>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-5">
                        <a href="product.html" class="text-decoration-none">
                            <button class="seemore_btn">See More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <div class="row py-5 mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="main_header text-uppercase">NEWS</h2>
                    <h6 class="sub_header text-uppercase">CREDIT FOREMOST QUALITY FIRST PIONEERING AND INNOVATIVE</h6>
                </div>
                <div class="col-12">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-4 col-md-6">
                            <a href="news-detail1.html" class="text-decoration-none">
                                <div class="news_box">
                                    <img src="images/nesws1.png" alt="news" class="w-100">
                                    <div class="news_info">
                                        <h6 class="news_header text-center">Inferior lunch box market survey</h6>
                                        <p class="text-end date mb-0">
                                            2018-11-08
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="news-detail2.html" class="text-decoration-none">
                                <div class="news_box">
                                    <img src="images/nesws2.png" alt="news" class="w-100">
                                    <div class="news_info">
                                        <h6 class="news_header text-center">Disposable tableware</h6>
                                        <p class="text-end date mb-0">
                                            2018-11-08
                                        </p>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="news-detail3.html" class="text-decoration-none">
                                <div class="news_box">
                                    <img src="images/nesws3.png" alt="news" class="w-100">
                                    <div class="news_info">
                                        <h6 class="news_header text-center">Environmentally friendly lunch box</h6>
                                        <p class="text-end date mb-0">
                                            2018-11-08
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pt-5">
                        <a href="about-us.html" class="text-decoration-none">
                            <button class="seemore_btn">See More</button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
@endsection
