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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.0016396708493!2d-8.471475523017556!3d51.897434182135065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4844900ff4c4b84f%3A0x3b7c88d8dd156196!2s85%20S%20Mall%2C%20Centre%2C%20Cork%2C%20T12%20A3XN%2C%20Ireland!5e0!3m2!1sen!2smy!4v1746072026290!5m2!1sen!2smy" width="600" height="450" style="width:80%; height:100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
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
