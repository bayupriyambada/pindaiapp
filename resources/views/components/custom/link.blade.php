@props(['route', 'parameters' => [], 'tooltip' => 'Text' , 'btn' => '', 'icon' => 'bx-edit'])


<a href="{{ route($route, $parameters) }}"
   class="btn {{ $btn }}" data-bs-toggle="tooltip"
   data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
   title="{{ $tooltip }}">
   <span class="bx {{ $icon }} "></span>

    {{ $slot }}
</a>
