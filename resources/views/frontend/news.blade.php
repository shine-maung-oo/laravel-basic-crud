@extends('layouts.frontend')

@section('content')
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 g-0">
                    <img src="images/new_banner.png" alt="banner" class="w-100 d-block">
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container py-lg-5 py-4 my-lg-5 my-4">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="main_header text-uppercase">News</h2>
                </div>
                <div class="col-lg-11 my-5">
                    <div class="row g-lg-4 g-3">
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="news-detail1.html" class="text-decoration-none cursor">
                                <div class="news_card">
                                    <div class="news_img">
                                        <img src="images/nesws1.png" alt="news" class="w-100">
                                    </div>
                                    <div class="news_body">
                                        <h5 class="news_title">Inferior lunch box market survey</h6>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="images/icon/usersquare.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">Author</label>
                                                </div>
                                                <div class="d-flex align-items-center ms-auto">
                                                    <img src="images/icon/calendar.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">2018-11-08</label>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <p class="news_text">
                                                Market research editor “Beijing consumes 2 million disposable tableware
                                                every day, of which 400,000 foam plastic meals, ....
                                            </p>
                                            <a href="news-detail1.html" class="text-decoration-none read_more">
                                                Read More
                                            </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="news-detail2.html" class="text-decoration-none cursor">
                                <div class="news_card">
                                    <div class="news_img">
                                        <img src="images/nesws2.png" alt="news" class="w-100">
                                    </div>
                                    <div class="news_body">
                                        <h5 class="news_title">Disposable tableware</h6>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="images/icon/usersquare.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">Author</label>
                                                </div>
                                                <div class="d-flex align-items-center ms-auto">
                                                    <img src="images/icon/calendar.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">2018-11-08</label>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <p class="news_text">
                                                The fake eco-friendly lunch box is a product containing a large amount of
                                                inorganic mineral filler ....
                                            </p>
                                            <a href="news-detail2.html" class="text-decoration-none read_more">
                                                Read More
                                            </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="news-detail3.html" class="text-decoration-none cursor">
                                <div class="news_card">
                                    <div class="news_img">
                                        <img src="images/nesws3.png" alt="news" class="w-100">
                                    </div>
                                    <div class="news_body">
                                        <h5 class="news_title">Environmentally friendly lunch box</h6>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="images/icon/usersquare.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">Author</label>
                                                </div>
                                                <div class="d-flex align-items-center ms-auto">
                                                    <img src="images/icon/calendar.svg" alt="icon" class="news_icon">
                                                    <label class="info_text">2018-11-08</label>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <p class="news_text">
                                                The environmentally-friendly tableware is harmless to the human body, and
                                                the production process does not pollute the ....
                                            </p>
                                            <a href="news-detail3.html" class="text-decoration-none read_more">
                                                Read More
                                            </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
