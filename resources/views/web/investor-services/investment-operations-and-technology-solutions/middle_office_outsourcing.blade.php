@extends('layouts.main')
@section('title', 'Middle Office Outsourcing | Investment Operations & Technology Solutions | Investor Services | Sunrise Fund Limited')

@section('content')
@component('components.page-header', [
    'title' => __('public.middle office outsourcing'),
    'url' => 'investor-services/investment-operations-and-technology-solutions',
    'sub2' => __('public.investment operations & technology'),
    'headerImage' => url('assets/img/banner64.jpg'),

])
@endcomponent
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row row-fit-lg">
                    <div class="col-lg-4">
                        <p class="paragraph">
                            {{-- <strong>@lang('public.middle office outsourcing')</strong> --}}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        {{-- <p>
                            Escolo ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempore dolor in reprehenderite in voluptate.
                            Utenim ad minim venia. Duis aute irure dolor in reprehenderite in voluptate velit esse cillum dolore eurtclo
                            mertiso mortaccio della troia fugiat nulla pariature minollo ratiro.
                        </p> --}}
                    </div>
                    {{-- <div class="col-lg-4">
                        <ul class="slider light" data-options="arrows:false,nav:true">
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                {{-- <hr class="space" /> --}}
                {{-- <div class="title">
                    <h2>Our mission and values</h2>
                    <p>What we do</p>
                </div> --}}
                <div class="row">
                    <div class="col-lg-13">
                        <p class="paragraph">
                            @lang('public.middle office outsourcing 1')
                        </p>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="box-sign no-margin">
                            <img alt="sign" src="media/sign-dark.png">
                            <b>Albert Patterson</b>
                            <span>Founder &amp; CEO</span>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="divider-m"></div> --}}
                        {{-- <div class="owl-nav owl-nav-custom-menu"></div> --}}
                        {{-- <div class="divider-l"></div> --}}
                        <div class="menu menu-visible" id="menu-1">
                            <div class="item">
                                <div class="item-wrapper">
                                    <h3 class="item-name"><a href="{{ route('web.investor-services.targeted_technology_solutions_via_infomediary') }}" class="link-effect">@lang('public.targeted technology solutions via infomediary')</a></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"></span>
                                </div>
                                <div class="divider-s"></div>
                                <p class="paragraph">
                                    @lang('public.middle office outsourcing 2')
                                </p>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <h3 class="item-name"><a href="{{ route('web.investor-services.hosted_operations_and_reporting') }}" class="link-effect">@lang('public.hosted operations & reporting')</a></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"></span>
                                </div>
                                <div class="divider-s"></div>
                                <p class="paragraph">
                                    @lang('public.middle office outsourcing 3')
                                </p>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <h3 class="item-name"><a href="{{ route('web.investor-services.investment_accounting_and_enterprise_data_support') }}" class="link-effect">@lang('public.investment accounting & enterprise data support')</a></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"></span>
                                </div>
                                <div class="divider-s"></div>
                                <p class="paragraph">
                                    @lang('public.middle office outsourcing 4')
                                </p>
                            </div>
                            <div class="item">
                                <div class="item-wrapper">
                                    <h3 class="item-name"><a href="{{ route('web.investor-services.custody-and-fund-services.collateral_management') }}" class="link-effect">@lang('public.collateral management')</a></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"></span>
                                </div>
                                <div class="divider-s"></div>
                                <p class="paragraph">
                                    @lang('public.middle office outsourcing 4')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <table class="table table-grid table-border align-left table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-globe text-md"></i>
                                    <div>
                                        <h3>Countries</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="47" data-speed="5000">47</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-business-man text-md"></i>
                                    <div>
                                        <h3>Clients</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="110" data-speed="5000">110</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class=" im-charger text-md"></i>
                                    <div>
                                        <h3>Projects</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="250" data-speed="5000">250</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="counter counter-horizontal counter-icon">
                                    <i class="im-support text-md"></i>
                                    <div>
                                        <h3>Team members</h3>
                                        <div class="value">
                                            <span class="text-md" data-to="30" data-speed="5000">30</span>
                                            <span>+</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table> --}}
            </div>
        </section>
    </main>
@endsection