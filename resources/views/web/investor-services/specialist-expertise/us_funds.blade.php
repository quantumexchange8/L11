@extends('layouts.main')
@section('title', 'Us Funds | Specialist Expertise | Investor Services | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.US funds'),
        'url' => 'investor-services/specialist-expertise',
        'sub2' => __('public.specialist expertise'),
        'headerImage' => url('assets/img/banner51.jpg'),

    ])
    @endcomponent
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row row-fit-lg">
                    <div class="col-lg-4">
                        {{-- <p>
                            @lang('public.our firm 2')
                        </p> --}}
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
                    <div class="col-lg-8">
                        <p>
                            {{-- @lang('public.entry level professionals') --}}
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
                    <div class="col-md-12">
                        <div class="divider-s"></div>
                        <div class="paragraph">
                            @lang('public.us funds 1')
                            <br><br>
                            <table style="width: 100%;">
                                <tbody>
                                    <tr class="justify-content-around">
                                        <td style="padding: 10px;">
                                            <p class="paragraph font-bold"><strong>@lang('public.funds servicing')</strong></p>
                                            <p>
                                                - <a class="link-effect" href="{{ route('web.investor-services.global_custody_direct') }}">@lang('public.global custody')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.custody-and-fund-services.fund_accounting') }}">@lang('public.fund accounting')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.custody-and-fund-services.fund_administration') }}">@lang('public.fund administration')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.custody-and-fund-services.global_tax') }}">@lang('public.global tax services')</a><br>
                                            </p>
                                        </td>
                                        <td style="padding: 10px;">
                                            <p class="paragraph font-bold"><strong>@lang('public.investment operations & technology')</strong></p>
                                            <p>
                                                - <a class="link-effect" href="{{ route('web.investor-services.investment-operations-and-technology-solutions.technology_services') }}">@lang('public.technology services')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.data_connectivity_and_applications_via_infomediary') }}">@lang('public.data & connectivity solutions')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.investment-operations-and-technology-solutions.middle_office_outsourcing') }}">@lang('public.middle office')</a><br>
                                            </p>
                                        </td>
                                        <td style="padding: 10px;">
                                            <p class="paragraph font-bold"><strong>@lang('public.markets')</strong></p>
                                            <p>
                                                - <a class="link-effect" href="{{ route('web.investor-services.markets.securities_lending') }}">@lang('public.securities lending')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.markets.foreign_exchange') }}">@lang('public.foreign exchange')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.markets.currency_hedging') }}">@lang('public.currency hedging')</a><br>
                                                - <a class="link-effect" href="{{ route('web.investor-services.markets.infofx') }}">@lang('public.infofx')</a><br>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <strong>@lang('public.us funds 2')</strong>
                            <br><br>
                            @lang('public.us funds 3')
                            <br><br>
                            <strong>@lang('public.us funds 4')</strong>
                            <br><br>
                            @lang('public.us funds 5')
                            <br><br>
                            <strong>@lang('public.us funds 6')</strong>
                            <br><br>
                            @lang('public.us funds 7')
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