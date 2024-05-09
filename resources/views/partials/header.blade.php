@php

    $categories = config('header_menues.categories');

    $icons_menu = config('header_menues.icons_menu')

@endphp

<header>
    <div class="container d-flex">
        <nav class="categories">
        <ul class="d-flex">
            @foreach ($categories as $category)
                <li>
                    <a :href="{{ $category['link'] }}">{{ $category['title'] }}</a>
                </li>
            @endforeach
        </ul>
        </nav>

        <div>
        <img src="{{ Vite::asset('resources/img/boolean-logo.png')}}" alt="logo">
        </div>

        <nav class="profile">
        <ul class="d-flex">
            @foreach ($icons_menu as $section)
                <li>
                    <a href="{{ $section['link'] }}">
                        <i class="{{ $section['icon'] }}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
        </nav>
    </div>
</header>
