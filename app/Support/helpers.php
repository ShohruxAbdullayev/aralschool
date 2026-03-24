<?php

if (! function_exists('locale_url')) {
    function locale_url(string $locale): string
    {
        $segments = request()->segments();
        if (empty($segments)) {
            $segments = [$locale];
        } else {
            $segments[0] = $locale;
        }

        $path = implode('/', $segments);
        $url = url($path);
        $query = request()->getQueryString();

        if ($query) {
            $url .= '?' . $query;
        }

        return $url;
    }
}
