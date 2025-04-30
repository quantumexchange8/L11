@extends('layouts.main')
@section('title', 'Investment Advisory | Private Banking | Vanward International')

@section('content')
    @component('components.page-header', [
        'title' => __('public.investment profile'),
        'url' => 'private-banking/private-equity',
        'sub2' => __('public.private equity'),
        'headerImage' => url('assets/img/banner33.jpeg'),

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
                            {{-- <strong>@lang('public.investment profile')</strong> --}}
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
                        <div class="divider-l"></div>
                        <p class="paragraph">
                            @lang('public.investment profile 1')
                            <br><br>
                            @lang('public.investment profile 2')
                            <br><br>
                            @lang('public.investment profile 3')
                            <br><br>
                            @lang('public.investment profile 4')
                            <br><br>
                            @lang('public.investment profile 5')
                            <br><br>
                            @lang('public.investment profile 6')
                            <br><br>
                            @lang('public.investment profile 7')
                            <br><br>
                            @lang('public.investment profile 8')
                            <br><br>
                            @lang('public.investment profile 9')
                            {{-- <br><br>
                            @lang('public.investment profile 10') --}}
                            <br><br>
                            @lang('public.investment profile 11')
                            <br><br>
                            @lang('public.investment profile 12')
                            <br><br>
                            @lang('public.investment profile 13')
                            <br><br>
                            @lang('public.investment profile 14')
                            <br><br>
                            @lang('public.investment profile 15')
                            <br><br>
                            @lang('public.investment profile 16')
                            <br><br>
                            @lang('public.investment profile 17')
                            <br><br>
                            @lang('public.investment profile 18')
                            <br><br>
                            @lang('public.investment profile 19')
                            <br><br>
                            @lang('public.investment profile 20')
                            <br><br>
                            @lang('public.investment profile 21')
                            <br><br>
                            @lang('public.investment profile 22')
                            <br><br>
                            @lang('public.investment profile 23')
                            <br><br>
                            @lang('public.investment profile 24')
                            <br><br>
                            @lang('public.investment profile 25')
                            <br><br>
                            @lang('public.investment profile 26')
                            <br><br>
                            @lang('public.investment profile 27')
                            <br><br>
                            @lang('public.investment profile 28')
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