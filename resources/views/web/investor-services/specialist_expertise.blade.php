@extends('layouts.main')
@section('title', 'Specialist Expertise | Investor Services | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.specialist expertise'),
        'url' => '/investor-services',
        'sub2' => __('public.investor services'),
        'headerImage' => url('assets/img/banner20.jpg'),

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
                    <h4>
                        @lang('public.specialist expertise 1')
                    </h4><br>
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
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.cross_border_funds') }}" class="link-effect">@lang('public.cross border funds')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.custody & fund services 2')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.us_funds') }}" class="link-effect">@lang('public.US funds')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 3')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.consultants_and_advisors') }}" class="link-effect">@lang('public.consultants and advisors')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 4')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.distribution_intelligence') }}" class="link-effect">@lang('public.distribution intelligence')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 5')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.alternative_funds') }}" class="link-effect">@lang('public.alternative funds')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 6')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.exchange_traded_funds') }}" class="link-effect">@lang('public.exchange traded funds')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 7')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.insurance') }}" class="link-effect">@lang('public.insurance')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 6')
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="item-wrapper">
                                                    <h3 class="item-name"><a href="{{ route('web.investor-services.specialist-expertise.regulatory_intelligence') }}" class="link-effect">@lang('public.regulatory intelligence')</a></h3>
                                                    <span class="item-divider"></span>
                                                    <span class="item-price"></span>
                                                </div>
                                                <div class="divider-s"></div>
                                                <p class="paragraph">
                                                    @lang('public.specialist expertise 7')
                                                </p>
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