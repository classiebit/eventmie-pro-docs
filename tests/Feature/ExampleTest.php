<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root_redirects_to_docs(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/docs');
    }

    public function test_docs_introduction_page_loads(): void
    {
        $response = $this->get('/docs/3.0/introduction');

        $response->assertOk();
        $response->assertSee('Eventmie Pro Docs', false);
    }
}
