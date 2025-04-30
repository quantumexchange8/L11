@extends('layouts.main')
@section('title', 'Distribution Intelligence | Specialist Expertise | Investor Services | Sunrise Fund Limited')

@section('content')
    @component('components.page-header', [
        'title' => __('public.distribution intelligence'),
        'url' => 'investor-services/specialist-expertise',
        'sub2' => __('public.specialist expertise'),
        'headerImage' => url('assets/img/banner53.jpg'),

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
                            {{-- <strong>@lang('public.distribution intelligence')</strong> --}}
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
                        <p class="paragraph">
                            @lang('public.distribution intelligence 1') <a class="link-effect" href="{{ route('web.investor-services.specialist-expertise.cross_border_funds') }}">@lang('public.distribution intelligence 2')</a>, @lang('public.distribution intelligence 3')
                            <br><br>
                            <strong>@lang('public.distribution intelligence 4')</strong>
                            <br><br>
                            @lang('public.distribution intelligence 5')
                            <br><br>
                            <strong>@lang('public.distribution intelligence 6')</strong>
                            <br><br>
                            @lang('public.distribution intelligence 7') <a class="link-effect" href="{{ route('web.investor-services.specialist-expertise.cross-border-funds.global_service_model') }}">@lang('public.global service model')</a> @lang('public.distribution intelligence 8')
                            <br><br>
                            &nbsp;&nbsp;&nbsp;&bull;&nbsp;<span class="capitalize">@lang('public.our')</span> <a class="link-effect" href="{{ route('web.investor-services.custody-and-fund-services.transfer_agency') }}">@lang('public.transfer agency')</a> @lang('public.distribution intelligence 9')
                            <br>
                            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.Sunrise') <a class="link-effect" href="{{ route('web.investor-services.data_connectivity_and_applications_via_infomediary') }}">@lang('public.infomediary')</a>® @lang('public.distribution intelligence 10')
                            <br>
                            &nbsp;&nbsp;&nbsp;&bull;&nbsp;@lang('public.Sunrise') <a class="link-effect" href="{{ route('web.investor-services.custody-and-fund-services.fund_order_and_custody') }}">@lang('public.fund order & custody')</a> @lang('public.distribution intelligence 11')
                            <br><br>
                            <strong>@lang('public.distribution intelligence 12')</strong>
                            <br><br>
                            @lang('public.distribution intelligence 13')
                        </p>
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