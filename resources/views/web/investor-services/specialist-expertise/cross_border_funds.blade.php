@extends('layouts.main')
@section('title', 'Cross Border Funds | Specialist Expertise | Investor Services | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.cross border funds'),
        'url' => 'investor-services/specialist-expertise',
        'sub2' => __('public.specialist expertise'),
        'headerImage' => url('assets/img/banner50.jpg'),

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
                            {{-- <strong>@lang('public.cross border funds')</strong> --}}
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
                            @lang('public.cross border funds 1')
                            <br><br>
                            @lang('public.we provide') @lang('public.custody'),
                              @lang('public.fund accounting') @lang('public.and')
                             @lang('public.administration'),
                             @lang('public.transfer agency')
                            @lang('public.cross border funds 2')
                            <br><br>
                            <span class="capitalize">@lang('public.our')</span> @lang('public.global service model') @lang('public.cross border funds 3')
                            @lang('public.luxembourg') @lang('public.and') @lang('public.irish') @lang('public.cross border funds 4')
                            <br><br>
                            @lang('public.cross border funds 5')&nbsp;@lang('public.greater china')
                            @lang('public.cross border funds 6')&nbsp;@lang('public.latin america')@lang('public.cross border funds 7')&nbsp;@lang('public.japan')
                            <br><br>
                            @lang('public.cross border funds 8')
                            <br><br>
                            <strong>@lang('public.cross border funds 9')</strong>
                            <br><br>
                            @lang('public.cross border funds 10')
                            <br><br>
                            <strong>@lang('public.cross border funds 11')</strong>
                            <br><br>
                            @lang('public.cross border funds 12')
                            <br><br>
                            <strong>@lang('public.cross border funds 13')</strong>
                            <br><br>
                            @lang('public.cross border funds 14')
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