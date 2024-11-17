@props(['route', 'parameters' => [], 'title' => 'Text' , 'btnClass' => '', 'icon' => 'bx-edit'])

@php
    $btn = $btnClass ?? 'btn-outline-info btn-sm';
@endphp

<a href="{{ route($route, $parameters) }}"
   class="btn {{ $btn }}" data-bs-toggle="tooltip"
   data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
   title="{{ $title }}">
   <span class="bx {{ $icon }} "></span>
</a>
