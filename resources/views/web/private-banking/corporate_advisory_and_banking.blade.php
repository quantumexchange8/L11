@extends('layouts.main')
@section('title', 'Corporate Advisory & Banking | Private Banking | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.corporate advisory & banking'),
        'url' => '/private-banking',
        'sub2' => __('public.private banking'),
        'headerImage' => url('assets/img/banner10.jpg'),

    ])
    @endcomponent
    <main>
        <section class="section-base section-color">
            <div class="container">
                {{-- <ul class="slider arrows-inner-right" data-options="arrows:true,nav:false">
                    <li>
                        <a href="#" class="media-box media-box-reveal">
                            <img alt="" src="http://via.placeholder.com/1920x800">
                            <div class="caption">
                                <h2>Barcleys financial statements</h2>
                                <div class="extra-field">Barcleys</div>
                                <h3>December, 2020</h3>
                                <p>
                                    Lorem ipsum dolore consectetur adipisicing elito sedo incididunto pertinole.
                                    Duis aute irure dolor in reprehendero  in voluptate velit esse cilluo.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="media-box media-box-reveal">
                            <img alt="" src="http://via.placeholder.com/1920x800">
                            <div class="caption">
                                <h2>Microsoft for blockchains</h2>
                                <div class="extra-field">Microsoft</div>
                                <h3>March, 2020</h3>
                                <p>
                                    Lorem ipsum dolore consectetur adipisicing elito sedo incididunto pertinole.
                                    Duis aute irure dolor in reprehendero  in voluptate velit esse cilluo.
                                </p>
                            </div>
                        </a>
                    </li>
                </ul> --}}
                {{-- <hr class="space" /> --}}
                <div class="maso-list" data-columns="3" data-columns-lg="2" data-columns-sm="1">
                    {{-- <div class="menu-inner">
                        <div><i class="menu-btn"></i><span>Menu</span></div>
                        <ul>
                            <li class="active"><a data-filter="maso-item" href="#">All</a></li>
                            <li><a data-filter="cat-1" href="#">Software</a></li>
                            <li><a data-filter="cat-2" href="#">Financial</a></li>
                            <li><a data-filter="cat-3" href="#">Business</a></li>
                            <li><a class="maso-order" data-sort="asc"></a></li>
                        </ul>
                    </div> --}}
                    {{-- <h2>@lang('public.careers')</h2><br> --}}
                    <h4>@lang('public.corporate advisory & banking 1')
                        <br><br>
                        @lang('public.corporate advisory & banking 2')</h4><br>
                        <div id="menu" class="section-all bg-dark">
                            <div class="container">
                                <div class="extra-margin-container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {{-- <div class="divider-m"></div> --}}
                                            {{-- <div class="owl-nav owl-nav-custom-menu"></div> --}}
                                            {{-- <div class="divider-l"></div> --}}
                                            <div class="menu menu-visible" id="menu-1">
                                                <div class="item">
                                                    <div class="item-wrapper">
                                                        <h3 class="item-name"><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_advisory') }}" class="link-effect">@lang('public.corporate advisory')</a></h3>
                                                        <span class="item-divider"></span>
                                                        <span class="item-price"></span>
                                                    </div>
                                                    <div class="divider-s"></div>
                                                    <p class="paragraph">@lang('public.corporate advisory & banking 3')</p>
                                                </div>
                                                <div class="item">
                                                    <div class="item-wrapper">
                                                        <h3 class="item-name"><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_banking') }}" class="link-effect">@lang('public.corporate banking')</a></h3>
                                                        <span class="item-divider"></span>
                                                        <span class="item-price"></span>
                                                    </div>
                                                    <div class="divider-s"></div>
                                                    <p class="paragraph">@lang('public.corporate advisory & banking 4')</p>
                                                </div>
                                                <div class="item">
                                                    <div class="item-wrapper">
                                                        <h3 class="item-name"><a href="{{ route('web.private-banking.corporate-advisory-and-banking.center_for_family_business') }}" class="link-effect">@lang('public.center for family business')</a></h3>
                                                        <span class="item-divider"></span>
                                                        <span class="item-price"></span>
                                                    </div>
                                                    <div class="divider-s"></div>
                                                    <p class="paragraph">@lang('public.corporate advisory & banking 5')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="divider-l"></div>
                                            <div class="the-line"></div>
                                            <div class="divider-l"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>
    @endsection