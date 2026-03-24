<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * The root URL redirects to the default locale.
     */
    public function test_root_redirects_to_default_locale(): void
    {
        $this->get('/')->assertRedirect('/en');
    }
}
