<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_loads_for_all_locales(): void
    {
        foreach (['en', 'ru', 'uz', 'kk'] as $locale) {
            $this->get("/{$locale}")->assertStatus(200);
        }
    }
}
