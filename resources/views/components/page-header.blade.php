<header class="header-image ken-burn-center light" style="z-index:9999;" data-parallax="true" data-natural-height="500" data-natural-width="1920" data-bleed="0" data-image-src="{{ $headerImage }}" data-offset="0">
    <div class="container">
        <h1>{{ $title }}</h1>
        {{-- <h2>OUr core values </h2> --}}
        <ol class="breadcrumb">
            @if (isset($sub2) && isset($url))
                <li><a href="{{ url($url) }}">{{ $sub2 }}</a></li>
                <li class="active">{{ $title }}</li>
            @else
                <li class="active">{{ $title }}</li>
            @endif
        </ol>
    </div>
</header>
