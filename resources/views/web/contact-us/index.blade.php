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
                        <div class="col-lg-3">
                            <div class="title">Branch</div>
                                <div class="search-container">
                                  <div class="search">
                                    <input type="text" id="country-input" placeholder="Enter Country" />
                                    <i class="fas fa-search" onclick="searchStores()"></i>
                                  </div>
                                </div>
                                <div class="stores-list-container">
                                  <div class="stores-list">
                                    <div class="store-container">
                                      <div class="store-info-container">
                                        <div class="store-address">
                                          <span>Torre Diamante Building,</span>
                                          <span>Via Mike Bongiorno, 13, 20124 Milano MI Italy</span>
                                        </div>
                                        <div class="store-phone-number"></div>
                                      </div>
                                      <div class="store-number-container">
                                        <div class="store-number">
                                          1
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="col-lg-9" style="height: 80vh !important;">
                            <div id="map"></div>
                        </div>
                    </div>
                    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmnzW-yNsC4NrLvJTVUn9uNd19lReBw1Y&callback=initMap">
        </script>
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
