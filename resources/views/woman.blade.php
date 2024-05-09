@php

    function isDiscounted($product) {
        foreach ($product['badges'] as $badge) {
            if ($badge['type'] === 'discount') {
                return true;
            }
        }
        return false;
    }

    function discountedPrice($product) {
        if (isDiscounted($product)) {
            foreach ($product['badges'] as $badge) {
                if ($badge['type'] === 'discount') {
                    $discountValue = (int) str_replace('%', '', $badge['value']);
                    $discountedPrice = $product['price'] + ($product['price'] / 100 * $discountValue);
                    return number_format($discountedPrice, 2);
                }
            }
        } else {
            return number_format($product['price'], 2);
        }
    }

    function check_products() {
        foreach ($products as $product) {
            if ($product['category'] === Route::currentRouteName() ) {
                return true;
            }
        }
        return false;
    }

@endphp

@extends('layout.main')

@section('content')

    <div class="container d-flex">

    <div class="row row-cols-3">

        @foreach ($products as $product)
        @if ($product['category'] === 'woman')

        <div class="col mb-3">
            <div class="card h-100 border-0">
                {{-- <!-- Card Top --> --}}
                <div class="card-top">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/') . $product['front_image'] }}" alt="{{ $product['name'] }}" class="first-img">
                    <img src="{{ Vite::asset('resources/img/') . $product['back_image'] }}" alt="{{ $product['name'] }}" class="hover-img">
                </a>
                <div class="heart"
                    class="{{ $product['is_in_favorites'] ? 'active' : '' }}"
                    >&hearts;</div>
                <div class="item-characteristics d-flex">
                    @foreach ($product['badges'] as $badge)
                        <span class="{{$badge['type']}}">{{$badge['value']}}</span>
                    @endforeach
                </div>
                </div>
                {{-- <!-- /Card Top --> --}}

                {{-- <!-- Card Bottom --> --}}
                <div class="card-bottom">
                <div>
                    <a href="#" class="brand">{{ $product['brand'] }}</a>
                </div>
                <div class="item-name">
                    <a href="#">
                        <h3 class="fw-bold">{{ $product['name'] }}</h3>
                    </a>
                </div>
                <div class="prices">
                    <span class="current-price">{{ discountedPrice($product) }} &euro; </span>
                    @if (isDiscounted($product))
                        <span class="original-price">{{ $product['price'] }} &euro;</span>
                    @endif
                </div>
                </div>
                {{-- <!-- /Card Bottom --> --}}
            </div>
        </div>
        @endif
        @endforeach
    </div>

  </div>
@endsection
