<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SearchTaskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    public function test_can_search(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tache/1')
                ->type('table_search', "amine")
                ->waitForText('amine');
        });
    }
}
