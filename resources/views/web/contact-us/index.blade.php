@extends('layouts.main')
@section('title', 'Contact Us | Sunrise Fund Limited')

@section('content')

@component('components.page-header', [
    'imgurl' => url('private-equity.jpg'),
    'title' => __('public.contact us'),
    'headerImage' => url('assets/img/banner23.jpg'),
])
@endcomponent
<!-- Paragraph/Description Section -->
<div class="post-wrapper">
    <script src="{{ asset('maps/js/store-data.js') }}"></script>
                    <script src="{{ asset('maps/js/index.js') }}"></script>
                    <link rel="stylesheet" href="{{ asset('maps/style/style.css') }}" />
                    <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
                    <div class="row">
                        <div class="col-lg" style="height: 80vh !important;">
                            <div id="map" style="margin-left:auto;margin-right:auto; text-align:center; ">
                                <iframe src="https://www.google.com/maps/embed/v1/place?q=1900-4720+Kingsway+Burnaby,+BC,+V5H+4N2+Canada&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" style="width:80%; height:100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row container">
                        <div class="col-lg-6">
                            <h3>Canada</h3>
                            <p>Sunrise Insurance and Retirement Advisory Services Ltd.</p>
                            <p>Company Number: BC0641164</p>
                            <p>Business Number: 859879330</p>
                            <p>Address : 1900-4720 Kingsway Burnaby, BC, V5H 4N2 Canada.</p>
                        </div>
                        <div class="col-lg-6">
                            <h3>Singapore</h3>
                            <p>Sunrise Fund Pte. Ltd.</p>
                            <p>Company Registration No: 202105157H</p>
                            <p>Address : 6 Shenton Way,#25-08, OUE Downtown 068809 Singapore.</p>
                        </div>
                    </div>
                    <div class="row container">
                    <form id="contact-form" class="form-box" action="#" method="post">
                        <div class="row">
                            <div class="col-xl-6">
                                <input class="input-text" type="text" name="fname"  placeholder="First Name">
                            </div>
                            <div class="col-xl-6">
                                    <input class="input-text" type="text" name="lname" placeholder="Last Name">
                            </div>
                            <div class="col-xl-12">
                                    <input class="input-text" type="text" name="company" placeholder="Company / Institution">
                            </div>
                            <div class="col-xl-12">
                                <input class="input-text" type="text" name="position" placeholder="Title / Position">
                            </div>
                            <div class="col-xl-12">
                                <input class="input-text" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-xl-12">
                                <input class="input-text" type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-xl-12">
                                <textarea class="input-textarea" name="message" placeholder="Write Your Inquiry Here..." cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="btn btn-sm width-190 full-width-sm">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                    </div>
    {{-- <div class="lower-page lower-page-post">
        <div class="post-content">
            <div class="container">
                <div class="extra-margin-container extra-margin-container-post">                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="divider-m"></div>
                            <div class="blog-tag paragraph" style="color:#fff !Important;">Ireland, Cork</div>
                            <div class="section-txt-2">
                                <p>
                                    85 South Mall<br>
                                    Centre, Cork<br>
                                    T12 A3XN Ireland <br>
                                    Email : <a class="link-effect" href="mailto: irl@sunrisefundlimited.com">irl@sunrisefundlimited.com</a>
                                </p>
                            </div>
                            <div class="divider-l visible-mobile-devices"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="divider-m"></div>
                            <div class="blog-tag paragraph" style="color:#fff !Important;">JAPAN, TOKYO</div>
                            <div class="section-txt-2">
                                <p>
                                    Pacific Century Place Marunouchi<br>
                                    1 Chome-11番1号 <br>
                                    Marunouchi, Chiyoda City<br>
                                    Tokyo 100-6213 Japan<br>
                                    Email : <a class="link-effect" href="mailto: jpn@sunrisefundlimited.com">jpn@sunrisefundlimited.com</a>
                                </p>
                            </div>
                            <div class="divider-l visible-mobile-devices"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="divider-m"></div>
                            <div class="blog-tag paragraph" style="color:#fff !Important;">SINGAPORE</div>
                            <div class="section-txt-2">
                                <p>
                                    Ocean Financial Centre<br>
                                    10 Collyer Quay<br>
                                    049315 Singapore <br>
                                    Email : <a class="link-effect" href="mailto: sg@sunrisefundlimited.com">sg@sunrisefundlimited.com</a>
                                </p>
                            </div>
                            <div class="divider-l visible-mobile-devices"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="divider-m"></div>
                            <div class="blog-tag paragraph" style="color:#fff !Important;">ITALY, MILAN</div>
                            <div class="section-txt-2">
                                <p>
                                    Torre Diamante Building<br>
                                    Via Mike Bongiorno, 13, 20124 <br>
                                    Milano MI<br>
                                    Italy<br>
                                    Email : <a class="link-effect" href="mailto: it@sunrisefundlimited.com">it@sunrisefundlimited.com</a>
                                </p>
                            </div>
                            <div class="divider-l visible-mobile-devices"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="divider-m"></div>
                            <div class="blog-tag paragraph" style="color:#fff !Important;">UK, LONDON</div>
                            <div class="section-txt-2">
                                <p>
                                    1 Poultry, Bank London <br>
                                    EC2R 8EJ<br>
                                    UNITED KINGDOM<br>
                                    Email : <a class="link-effect" href="mailto: ldn@sunrisefundlimited.com">ldn@sunrisefundlimited.com</a>
                                </p>
                            </div>
                            <div class="divider-l visible-mobile-devices"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
