@php

    $categories = config('header_menues.categories');

    $icons_menu = config('header_menues.icons_menu')

@endphp

<header>
    <div class="container d-flex">
        <nav class="categories">
        <ul class="d-flex m-0 h-100">
            @foreach ($categories as $category)
                <li class="d-flex align-items-center {{ Route::currentRouteName() === $category['link'] ? 'current-page' : '' }}">
                    <a class="px-2" href="{{ route($category['link']) }}">{{ $category['title'] }}</a>
                </li>
            @endforeach
        </ul>
        </nav>

        <div class=" d-flex align-items-center ">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/boolean-logo.png')}}" alt="logo">
            </a>
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
