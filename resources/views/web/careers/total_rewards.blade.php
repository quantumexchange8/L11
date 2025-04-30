@extends('layouts.main')
@section('title', 'Total Rewards | Careers | Sunrise Fund Limited')

@section('content')
    @component('components.page-header', [
        'title' => __('public.total rewards'),
        'url' => '/careers',
        'sub2' => __('public.careers'),
        'headerImage' => url('assets/img/banner7.jpg'),

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
                <hr class="space" />
                {{-- <div class="title">
                    <h2>Our mission and values</h2>
                    <p>What we do</p>
                </div> --}}
                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            @lang('public.total rewards 1')
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
                <hr class="space" />
                <div class="col-lg-12">
                    {{-- <div class="divider-m"></div> --}}
                    {{-- <div class="owl-nav owl-nav-custom-menu"></div> --}}
                    {{-- <div class="divider-l"></div> --}}
                    <div class="menu menu-visible" id="menu-1">
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.careers.benefits_wellness_and_compensation') }}" class="link-effect">@lang('public.benefits, wellness and compensation')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 2')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.careers.career_management') }}" class="link-effect">@lang('public.career management')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 3')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.careers.ongoing_learning') }}" class="link-effect">@lang('public.ongoing learning')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 4')
                            </p>
                        </div>
                        <div class="item">
                            <div class="item-wrapper">
                                <h3 class="item-name"><a href="{{ route('web.careers.mobility') }}" class="link-effect">@lang('public.mobility')</a></h3>
                                <span class="item-divider"></span>
                                <span class="item-price"></span>
                            </div>
                            <div class="divider-s"></div>
                            <p class="paragraph">
                                @lang('public.total rewards 5')
                            </p>
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