@extends('layout.main')

@section('content')
  <div class="container d-flex">

    <div class="container d-flex">
                {{-- <!-- Card 1 --> --}}
        <div class="card">
            {{-- <!-- Card Top --> --}}
            <div class="card-top">
            <a href="#">
                {{-- <img :src="`/assets/img/${item.frontImage}`" :alt="item.name" class="first-img">
                <img :src="`/assets/img/${item.backImage}`" :alt="item.name" class="hover-img"> --}}
            </a>
            {{-- <div class="heart"
                :class="{'active' : item.isInFavorites}"
                @mouseover.stop=""
                @click="toggleFavorite"
                >&hearts;</div> --}}
            <div class="item-characteristics d-flex">
                {{-- <span
                v-for="(badge, index) in item.badges"
                :key="index"
                :class="badge.type">{{badge.value}}</span> --}}
            </div>
            </div>
            {{-- <!-- /Card Top --> --}}

            {{-- <!-- Card Bottom --> --}}
            <div class="card-bottom">
            <div>
                {{-- <a href="#" class="brand">{{ item.brand }}</a> --}}
            </div>
            <div class="item-name">
                <a href="#">
                {{-- <h3>{{ item.name }}</h3> --}}
                </a>
            </div>
            <div class="prices">
                {{-- <span class="current-price">{{ discountedPrice(item) }} &euro; </span>
                <span v-if="isDiscounted(item)" class="original-price">{{ item.price }} &euro;</span> --}}
            </div>
            </div>
            {{-- <!-- /Card Bottom --> --}}
        </div>
        {{-- <!-- /Card 1 --> --}}
    </div>

  </div>
@endsection
