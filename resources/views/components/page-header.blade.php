

<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="500" data-natural-width="1920" data-bleed="0" data-image-src="{{ $headerImage }}" data-offset="0">

    <div class="overlay"></div>

        <div class="container blur-background">
        <div style="display: flex; justify-content: space-between; align-items: center; height: 100%;">
            <h1>{{ $title }}</h1>
            {{-- <h2>OUr core values </h2> --}}
            <ol class="breadcrumb">
                @if (isset($sub2) && isset($url))
                    <li><a href="{{ url($url) }}">{{ $sub2 }}</a></li>
                    <li class="active" style="color: #F5F0E6">{{ $title }}</li>
                @else
                    <li class="active" style="color: #F5F0E6">{{ $title }}</li>
                @endif
            </ol>
        </div>

    </div>
</div>
</header>
