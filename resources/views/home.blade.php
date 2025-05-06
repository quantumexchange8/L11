@extends('layouts.main')
@section('title', 'Home | Sunrise')

@section('content')
{{-- <nav class="menu-top-logo menu-fixed" data-menu-anima="fade-in">
    <div class="container">
        <div class="menu-brand">
            <a href="#">
                <img class="logo-default scroll-hide" src="{{ asset('assets/img/logo1.png') }}" alt="logo" />
                <img class="logo-retina scroll-hide" src="{{ asset('assets/img/logo2.png') }}" alt="logo" />
                <img class="logo-default scroll-show" src="{{ asset('assets/img/logo3.png') }}" alt="logo" />
                <img class="logo-retina scroll-show" src="{{ asset('assets/img/logo4.png') }}" alt="logo" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
                <li>
                    <a href="{{ url('/') }}">@lang('public.home')</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.our-firm.index') }}">@lang('public.our firm')</a>
                    <ul>
                        <li>
                            <a href="{{ route('web.our-firm.the_partnership') }}">@lang('public.menu 1')</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.careers.index') }}">@lang('public.careers')</a>
                            <ul>
                                <li><a href="{{ route('web.careers.what_we_look_for') }}">@lang('public.menu 5')</a></li>
                                <li><a href="{{ route('web.careers.total_rewards') }}">@lang('public.menu 6')</a></li>
                                <li><a href="{{ route('web.careers.life_here') }}">@lang('public.menu 7')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.our_mission_and_profile') }}">@lang('public.menu 2')</a>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.sustainability') }}">@lang('public.menu 3')</a>
                        </li>
                        <li>
                            <a href="{{ route('web.our-firm.philanthropy') }}">@lang('public.menu 4')</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.private-banking.index') }}">@lang('public.private banking')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.private_wealth_management') }}">@lang('public.private wealth management')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.investment_advisory') }}">@lang('public.menu 8')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.wealth_planning') }}">@lang('public.menu 9')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.philanthropic_advisory') }}">@lang('public.menu 10')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.trust_services') }}">@lang('public.menu 11')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.private_client_landing') }}">@lang('public.menu 12')</a></li>
                                <li><a href="{{ route('web.private-banking.private-wealth-management.center_for_women_and_wealth') }}">@lang('public.menu 13')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.corporate_advisory_and_banking') }}">@lang('public.corporate advisory')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_advisory') }}">@lang('public.menu 14')</a></li>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.corporate_banking') }}">@lang('public.menu 15')</a></li>
                                <li><a href="{{ route('web.private-banking.corporate-advisory-and-banking.center_for_family_business') }}">@lang('public.menu 16')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.private-banking.private_equity') }}">@lang('public.private equity')</a>
                            <ul>
                                <li><a href="{{ route('web.private-banking.private-equity.about_Sunrise') }}">@lang('public.menu 17')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.investment_profile') }}">@lang('public.menu 18')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.investment_strategy_and_transaction_types') }}">@lang('public.menu 19')</a></li>
                                <li><a href="{{ route('web.private-banking.private-equity.select_portfolio_companies') }}">@lang('public.menu 20')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.investment-management.index') }}">@lang('public.investment management')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a class="header" href="{{ route('web.investment-management.public_equity') }}">@lang('public.public equity')</a>
                            <ul>
                                <li><a href="{{ route('web.investment-management.public-equity.us_large_cap_equity') }}">@lang('public.menu 21')</a></li>
                                <li><a href="{{ route('web.investment-management.public-equity.global_equity') }}">@lang('public.menu 22')</a></li>
                                <li><a href="{{ route('web.investment-management.public-equity.us_small_and_mid_cap_equity') }}">@lang('public.menu 23')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investment-management.fixed_income') }}">@lang('public.fixed income')</a>
                            <ul>
                                <li><a href="{{ route('web.investment-management.fixed-income.taxable_fixed_income_strategies') }}">@lang('public.menu 24')</a></li>
                                <li><a href="{{ route('web.investment-management.fixed-income.tax_exempt_fixed_income_strategy') }}">@lang('public.menu 25')</a></li>
                                <li><a href="{{ route('web.investment-management.fixed-income.us_tips_strategy') }}">@lang('public.menu 26')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="header" href="https://app.Sunrise-intl.com/en/applications/create/">@lang('public.open account')</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('web.investor-services.index') }}">@lang('public.investor services')</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.custody_and_fund_services') }}">@lang('public.custody & fund services')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.custody') }}">@lang('public.menu 27')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.depositary_and_trustee') }}">@lang('public.menu 28')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_accounting') }}">@lang('public.menu 29')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_administration') }}">@lang('public.menu 30')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.transfer_agency') }}">@lang('public.menu 31')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.global_tax') }}">@lang('public.menu 32')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.collateral_management') }}">@lang('public.menu 33')</a></li>
                                <li><a href="{{ route('web.investor-services.custody-and-fund-services.fund_order_and_custody') }}">@lang('public.menu 34')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.specialist_expertise') }}">@lang('public.specialist expertise')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.cross_border_funds') }}">@lang('public.menu 35')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.us_funds') }}">@lang('public.menu 36')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.consultants_and_advisors') }}">@lang('public.menu 37')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.distribution_intelligence') }}">@lang('public.menu 38')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.alternative_funds') }}">@lang('public.menu 39')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.exchange_traded_funds') }}">@lang('public.menu 40')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.insurance') }}">@lang('public.menu 41')</a></li>
                                <li><a href="{{ route('web.investor-services.specialist-expertise.regulatory_intelligence') }}">@lang('public.menu 42')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.markets') }}">@lang('public.markets')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.markets.foreign_exchange') }}">@lang('public.menu 43')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.active_fx_execution') }}">@lang('public.menu 44')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.infofx') }}">@lang('public.menu 45')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.currency_hedging') }}">@lang('public.menu 46')</a></li>
                                <li><a href="{{ route('web.investor-services.markets.securities_lending') }}">@lang('public.menu 47')</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="{{ route('web.investor-services.investment_operations_and_technology_solutions') }}">@lang('public.investment operations & technology')</a>
                            <ul>
                                <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.technology_services') }}">@lang('public.menu 49')</a></li>
                                <li><a href="{{ route('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing') }}">@lang('public.menu 50')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/contact-us') }}">@lang('public.menu 51')</a>
                </li>
                <li class="nav-label">
                    
                </li>
                <li class="nav-label">
                    <a class="main-menu" href="https://app.Sunrise-intl.com/en/accounts/login/">@lang('public.client login')</a>
                </li>
            </ul>
            <div class="menu-right">
                <div class="custom-area">
                    Unit 1112, The Metropolis Tower, 10 Metroplis <br />
                    Drive, Hung Hom, Hong Kong <br/>
                    Call us: <a href="tel:+85258088687" style="color: #fff; text-decoration: none;">(+852) 5808 8687 </a>
                </div>
                <ul class="lan-menu">
                    <li class="dropdown">
                        <a href="{{ route('setLang', ['locale' => 'en']) }}"><img src="{{ asset('assets/img/lang/en.svg') }}" style="width:18px; height:12px;" alt="lang" />EN </a>
                        <ul>
                            <li><a href="{{ route('setLang', ['locale' => 'en']) }}"><img src="{{ asset('assets/img/lang/en.svg') }}" style="width:18px; height:12px;" alt="lang" />EN</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'ar']) }}"><img src="{{ asset('assets/img/lang/ar.svg') }}" style="width:18px; height:12px;" alt="lang" />AR</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'zh']) }}"><img src="{{ asset('assets/img/lang/zh.svg') }}" style="width:18px; height:12px;"alt="lang" />ZH</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'da']) }}"><img src="{{ asset('assets/img/lang/da.svg') }}" style="width:18px; height:12px;" alt="lang" />DA</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'nl']) }}"><img src="{{ asset('assets/img/lang/nl.svg') }}" style="width:18px; height:12px;" alt="lang" />NL</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'et']) }}"><img src="{{ asset('assets/img/lang/et.svg') }}" style="width:18px; height:12px;"alt="lang" />ET</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'fi']) }}"><img src="{{ asset('assets/img/lang/fi.svg') }}" style="width:18px; height:12px;" alt="lang" />FI</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'fr']) }}"><img src="{{ asset('assets/img/lang/fr.svg') }}" style="width:18px; height:12px;" alt="lang" />FR</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'de']) }}"><img src="{{ asset('assets/img/lang/de.svg') }}" style="width:18px; height:12px;"alt="lang" />DE</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'it']) }}"><img src="{{ asset('assets/img/lang/it.svg') }}" style="width:18px; height:12px;" alt="lang" />IT</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'ja']) }}"><img src="{{ asset('assets/img/lang/ja.svg') }}" style="width:18px; height:12px;"alt="lang" />JA</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'no']) }}"><img src="{{ asset('assets/img/lang/no.svg') }}" style="width:18px; height:12px;" alt="lang" />NO</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'pt']) }}"><img src="{{ asset('assets/img/lang/pt.svg') }}" style="width:18px; height:12px;" alt="lang" />PT</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'es']) }}"><img src="{{ asset('assets/img/lang/es.svg') }}" style="width:18px; height:12px;" alt="lang" />ES</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'sv']) }}"><img src="{{ asset('assets/img/lang/sv.svg') }}" style="width:18px; height:12px;"alt="lang" />SV</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'gsw']) }}"><img src="{{ asset('assets/img/lang/gsw.svg') }}" style="width:18px; height:12px;"alt="lang" />gsw</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
    <main>
        <section class="section-image section-home-one no-padding-y" style="background-image:url({{ asset('assets/img/hd.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <hr class="space-lg" />
                        <h3 class="text-color-2">
                            @lang('public.home page 30')
                        </h3>
                        <ul class="slider" data-options="arrows:false,nav:false,autoplay:3000,controls:out">
                            <li>
                                <h1 class="text-uppercase" style="color: #F5F0E6;">@lang('public.wealth planning')</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase" style="color: #F5F0E6;">@lang('public.trust services')</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase" style="color: #F5F0E6;">@lang('public.private equity')</h1>
                            </li>
                        </ul>
                        <p>
                            {{-- We provide customised financial solutions that safeguard, expand, and enhance our clients overall financial situation. Client satisfaction is our top priority, and we spare no effort to exceed their expectations in everything we do. --}}
                        </p>
                        <hr class="space-sm" />
                        <a href="https://app.sunrisefundlimited.com/en/applications/create/" class="btn btn-sm width-190 full-width-sm">@lang('public.home page 1')</a>
                        <hr class="space-lg" />
                        <hr class="space-lg" />
                    </div>
                    <div class="col-lg-5 hidden-md">
                        <hr class="space-sm" />
                        <img data-anima="fade-bottom" data-time="1000" class="slide-image" src="{{ asset('assets/img/home-2.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-overflow-top">
            <div class="container">
                <div class="grid-list" data-columns="4" data-columns-md="2" data-columns-sm="1">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-monitor-phone"></i>
                                <div class="caption">
                                    <h3>@lang('public.private wealth management')</h3>
                                    <p>
                                        @lang('public.home page 31')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-bar-chart2"></i>
                                <div class="caption">
                                    <h3>@lang('public.corporate advisory')</h3>
                                    <p>
                                        @lang('public.home page 32')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class=" im-medal"></i>
                                <div class="caption">
                                    <h3>@lang('public.private equity')</h3>
                                    <p>
                                        @lang('public.home page 33')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-top-icon boxed">
                                <i class="im-optimization"></i>
                                <div class="caption">
                                    <h3>@lang('public.fixed income')</h3>
                                    <p>
                                        @lang('public.home page 34')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        {{-- <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" data-lightbox-anima="fade-top">
                            <img src="{{ asset('assets/img/hd-2.jpg') }}" alt="">
                        </a> --}}
                        <video playsinline autoplay muted loop style="max-width: 100%; height: auto;">
                            <source src="{{ asset('stock-market3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>@lang('public.home page 2')</h2>
                            {{-- <p>About us</p> --}}
                        </div>
                        <p>
                            @lang('public.home page 3')
                        </p>
                        {{-- <div class="box-sign">
                            <img alt="sign" src="{{ asset('assets/img/sign-dark.png') }}">
                            <b>Albert Patterson</b>
                            <span>Founder &amp; CEO</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section><br><br>
        <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src={{ asset('assets/img/hd.jpg') }}>
            <div class="container" data-anima="fade-bottom" data-time="1000" style="position: relative;">
                <a data-lightbox-anima="fade-top">
                    <video playsinline autoplay muted loop style="max-width: 100%; height: auto;">
                        <source src="{{ asset('stock-market6.mp4') }}" type="video/mp4">
                    </video>
                </a>
                <h2 class="width-650" style="position: absolute; top: 50%; left: 50%; color: #d1af6f; transform: translate(-50%, -50%); z-index: 1;">
                    @lang('public.home page 4')
                </h2>
                <hr class="space" />
            </div>
            
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            {{-- <h2>Core Technology services</h2> --}}
                            <h2>@lang('public.home page 7')</h2>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                        <a href="#" class="btn-text active">@lang('public.details')</a>
                    </div> --}}
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('resource/private-equity.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 8')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 10')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/corporate-advisory-and-banking.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 12')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$80</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Private</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 13')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/private-wealth-management.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 16')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$50</span></div>
                                        <div><span>Type</span><span>App</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 17')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                <a href="#" class="img-box"><img src={{ url('/resource/markets.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 18')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$30</span></div>
                                        <div><span>Type</span><span>Saas</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 19')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                {{-- <div class="extra-field">30% discount today</div> --}}
                                <a href="#" class="img-box"><img src={{ url('/resource/the-partnership.jpg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.home page 21')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Software</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.home page 22')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-info boxed" data-href="#">
                                {{-- <div class="extra-field">30% discount today</div> --}}
                                <a href="#" class="img-box"><img src={{ url('/resource/fixed-income.jpeg') }} alt="" /></a>
                                <div class="caption">
                                    <h2>@lang('public.private client lending')</h2>
                                    {{-- <div class="cnt-info">
                                        <div><span>Price</span><span>$100</span></div>
                                        <div><span>Type</span><span>Consulting</span></div>
                                        <div><span>Client</span><span>Business</span></div>
                                    </div> --}}
                                    <p>
                                        @lang('public.private wealth management 6')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="section-base">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Request a free<br />consultation with us</h2>
                            <p>Contact us now</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        </p>
                        <a href="#" class="btn-text active">You accept our policy</a>
                    </div>
                    <div class="col-lg-6">
                        <form id="UCiFI" action="thtmekit/scripts/php/contact-form.php" class="form-box form-ajax form-ajax-wp" method="post" data-email="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input id="Name" name="Name" placeholder="Name" type="text" class="input-text" required="">
                                </div>
                                <div class="col-lg-6">
                                    <input id="Email" name="Email" placeholder="Email" type="email" class="input-text" required="">
                                </div>
                            </div>
                            <hr class="space-xs" />
                            <textarea id="Message" name="Message" placeholder="Message" class="input-textarea" required=""></textarea>
                            <button class="btn btn-xs" type="submit">Send message</button>
                            <div class="success-box">
                                <div class="alert alert-success">
                                    Congratulations. Your message has been sent successfully.
                                </div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">
                                    Error, please retry. Your message has not been sent.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-base section-color">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-12">
                        <div class="title">
                            <h2>What our clients think</h2>
                            <p>Testimonials feedback</p>
                        </div>
                        <hr class="space-xs" />
                        <ul class="slider controls-top-right" data-options="type:carousel,arrows:false,nav:true,perView:3,perViewMd:2,perViewXs:1,gap:30,controls:out">
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        If you don’t succeed at first, there’s no need for the word failure. Pick yourself up and try try again.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Richard Branson</span>
                                            <span>Virgin</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        Have the courage to follow your heart and intuition. They somehow already know what you truly want.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Steve Jobs</span>
                                            <span>Apple</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        Do not compare yourself with anyone in this world… if you do so, you are really insulting yourself.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Bill Gates</span>
                                            <span>Microsoft</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-testimonials-bubble">
                                    <p>
                                        The question I ask myself like almost every day is if am I doing the most important thing I could be doing.
                                    </p>
                                    <div class="thumb-bar">
                                        <img src="http://via.placeholder.com/450x450" alt="" />
                                        <p>
                                            <span>Mark Zuckerberg</span>
                                            <span>Microsoft</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="section-base">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>You should choose us</h2>
                            <p>Exclusive benefits</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consecteture Duis aute irure dolor innocente reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla.
                        </p>
                        <hr class="space-sm" />
                        <ul class="accordion-list">
                            <li>
                                <a href="#">The membership cards</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a href="#">Financials helps and money back</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">Team creation and support</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="http://via.placeholder.com/590x364" alt="" />
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- section-base section-color --}}
        <section class="section-image light align-center ken-burn-center" data-parallax="scroll" data-image-src={{ asset('assets/img/hd.jpg') }}>
            <div class="container" data-anima="fade-bottom" data-time="1000" style="position: relative;">
                <a data-lightbox-anima="fade-top">
                    <video playsinline autoplay muted loop style="max-width: 100%; height: auto;">
                        <source src="{{ asset('stock-market7.mp4') }}" type="video/mp4">
                    </video>
                </a>
                <h2 class="width-600" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    @lang('public.home page 23')
                </h2>
                <hr class="space" />
            </div>
            <div>
                <a href=" {{ URL('contact-us') }}" class="btn btn-sm width-190 full-width-sm" style="margin-bottom: 30px;">Contact Us</a>
            </div>
           
        </section>
        {{-- <section class="section-base">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <img src="http://via.placeholder.com/590x364" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>You should choose us</h2>
                            <p>Exclusive benefits</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consecteture Duis aute irure dolor innocente reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla.
                        </p>
                        <hr class="space-sm" />
                        <div class="grid-list boxed-area list-gallery" data-columns="4" data-lightbox-anima="fade-top">
                            <div class="grid-box">
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                                <div class="grid-item">
                                    <a class="img-box" href="http://via.placeholder.com/800x500">
                                        <img src="http://via.placeholder.com/800x500" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <a href="#" class="btn-text active">View services</a>
                    </div>
                </div>
                <hr class="space" />
                <hr class="space-xs" />
            </div>
        </section> --}}
        {{-- <section class="section-base section-overflow-top"> --}}
        
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
@endsection