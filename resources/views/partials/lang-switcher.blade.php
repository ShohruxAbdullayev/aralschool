@php
    $currentLocale = app()->getLocale();
    $locales = config('locales.available', ['en']);
@endphp

<div class="{{ $class ?? '' }}">
    @foreach ($locales as $locale)
        <a href="{{ locale_url($locale) }}" class="{{ $currentLocale === $locale ? 'active' : '' }}">
            {{ strtoupper($locale) }}
        </a>
    @endforeach
</div>
