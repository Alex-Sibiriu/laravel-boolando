@php

    $socials = config('footer_manues.socials');

    $help_sections = config('footer_manues.help_sections')

@endphp

<footer class=" position-absolute w-100 bottom-0 ">
    {{-- <!-- INFO SECTION --> --}}
    <div class="container d-flex">
      {{-- <!-- INFO SECTION --> --}}
      <div class="info-section">
        <h2>Boolando s.r.l.</h2>
        <ul class="d-flex">
            @foreach ($help_sections as $section)
                <li>
                    <a href="{{$section['link']}}">{{ $section['title'] }}</a>
                </li>
            @endforeach
        </ul>
      </div>
      {{-- <!-- /INFO SECTION --> --}}

      {{-- <!-- SOCIAL --> --}}
      <div class="socials">
        <h4>Trovaci anche su</h4>
        <ul class="social-icons d-flex">
            @foreach ($socials as $social)
                <li>
                    <a href="{{ $social['link'] }}">
                        <i class="{{ $social['icon'] }}"></i>
                    </a>
                </li>
            @endforeach
        </ul>
      </div>
      {{-- <!-- /SOCIAL --> --}}
    </div>
  </footer>
