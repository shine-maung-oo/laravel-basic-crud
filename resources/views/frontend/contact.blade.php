@extends('layouts.frontend')

@section('content')
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 g-0">
                    <img src="images/contact_banner.png" alt="banner" class="w-100 d-block">
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container py-lg-5 py-4 my-lg-5 my-4">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="main_header text-uppercase">
                                Contacts
                            </h2>
                        </div>
                        <!-- East Star Plastic Cup Factory -->
                        <div class="col-12 my-md-5 my-4">
                            <h4 class="contact_sub_header">
                                East Star Plastic Cup Factory
                            </h4>
                            <div class="d-flex ps-3">
                                <div>
                                    <img src="images/icon/location_red.svg" alt="icon" class="address_icon">
                                </div>
                                <span class="address_text">
                                    Add : {{$data[3]->address}}
                                    {{-- Add : No.143/61-64 Mya Wa Di Min Gyi Street, Ywar Thar Gyi Industrial Zone, South Dagon
                                    Township, Yangon, Myanmar --}}
                                </span>
                            </div>
                            <div class="d-flex ps-3 my-2">
                                <div>
                                    <img src="images/icon/callcalling_red.svg" alt="icon" class="address_icon">
                                </div>
                                <span class="address_text">
                                    Tel : {{$data[3]->phone}}
                                    {{-- Tel : 09-420716344, 09-799577777, 09-456763777 --}}
                            </div>
                            <div class="d-flex ps-3">
                                <div>
                                    <img src="images/icon/email_red.svg" alt="icon" class="address_icon">
                                </div>
                                <!-- <span class="address_text">
                             E-mail : eaststarplasticcupfactory@gmail.com
                          </span> -->
                                <a href="mailto:{{$data[3]->email}}"
                                    class="text-decoration-none address_text">
                                    E-mail : {{$data[3]->email}}
                                    {{-- E-mail : eaststarplasticcupfactory@gmail.com --}}
                                </a>
                            </div>
                        </div>
                        <!-- End East Star Plastic Cup Factory  -->

                        <!-- Get in touch now  -->
                        <div class="col-12 mt-lg-4 pt-lg-4">
                            <h4 class="contact_sub_header">
                                Get In Touch Now
                            </h4>
                            <div class="row gx-4 gy-5">
                                <div class="col-lg-6 col-md-12 col-12 pe-lg-4">
                                    <img src="images/contact_img.png" alt="contact" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <form action="#" class="contact_form">
                                        <div class="row gx-4 g-3">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Phone Number">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="10" placeholder="Your Message ....."></textarea>
                                            </div>
                                            <div class="col-12 mt-4 pt-2">
                                                <input type="button" class="submit_btn" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Get in touch now  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
