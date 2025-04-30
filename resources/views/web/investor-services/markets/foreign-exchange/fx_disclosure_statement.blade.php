@extends('layouts.main')
@section('title', 'Fx Disclosure Statement | Foreign Exchange | Markets | Investor Services | Sunrise Fund Limited')

@section('content')
@component('components.page-header', [
    'title' => __('public.fx disclosure statement'),
    'url' => 'investor-services/markets/foreign-exchange',
    'sub2' => __('public.foreign exchange'),
    'headerImage' => url('assets/img/banner92.jpg'),

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
                        <p class="paragraph">
                            @lang('public.fx disclosure 1')
                            <br><br>
                            1. <span class="underline">@lang('public.fx disclosure 2')</span><br>
                            a. <span class="underline">@lang('public.fx disclosure 3')</span>
                            <br><br>
                            @lang('public.fx disclosure 4')
                            <br><br>
                            b. <span class="underline">@lang('public.fx disclosure 5')</span>
                            <br><br>
                            @lang('public.fx disclosure 6')
                            <br><br>
                            c. <span class="underline">@lang('public.fx disclosure 7')</span>
                            <br><br>
                            @lang('public.fx disclosure 8')
                            <br><br>
                            2. <span class="underline">@lang('public.fx disclosure 9')</span>
                            <br><br>
                            @lang('public.fx disclosure 10')
                            <br><br>
                            a. <span class="underline">@lang('public.fx disclosure 11')</span>
                            <br><br>
                            @lang('public.fx disclosure 12')
                            <br><br>
                            b. <span class="underline">@lang('public.fx disclosure 13')</span>
                            <br><br>
                            @lang('public.fx disclosure 14')
                            <br><br>
                            c. <span class="underline">@lang('public.fx disclosure 15')</span>
                            <br><br>
                            @lang('public.fx disclosure 16')
                            <br><br>
                            d. <span class="underline">@lang('public.fx disclosure 17')</span>
                            <br><br>
                            @lang('public.fx disclosure 18')
                            <br><br>
                            e. <span class="underline">@lang('public.fx disclosure 19')</span>
                            <br><br>
                            @lang('public.fx disclosure 20')
                            <br><br>
                            f. <span class="underline">@lang('public.fx disclosure 21')</span>
                            <br><br>
                            @lang('public.fx disclosure 22')
                            <br><br>
                            3. <span class="underline">@lang('public.fx disclosure 23')</span><br>
                            a. <span class="underline">@lang('public.fx disclosure 24')</span>
                            <br><br>
                            @lang('public.fx disclosure 25')
                            <br><br>
                            b. <span class="underline"></span>@lang('public.fx disclosure 26')
                            <br><br>
                            @lang('public.fx disclosure 27')
                            <br><br>
                            c. <span class="underline"></span> @lang('public.fx disclosure 28')
                            <br><br>
                            @lang('public.fx disclosure 29')
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="divider-s"></div>
                        <p class="paragraph">
                            @lang('public.content unavailable')
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