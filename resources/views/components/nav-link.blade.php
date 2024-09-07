@props([
    "active",
])

@php
    $classes = $active ?? false ? "nav active" : "nav";
@endphp

<a {{ $attributes->merge(["class" => $classes]) }} class="">
    {{ $slot }}
</a>
