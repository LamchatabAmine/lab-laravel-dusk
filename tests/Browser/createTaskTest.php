<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class createTaskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    public function test_can_create_task(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tache/1')
                ->visit('/tache/1/create')
                ->type('name', "amine")
                ->type('description', "Dusk Test amine2")
                ->press('Submit')
                ->assertSee('Tache créé avec succès.');
            /*
                // Find and click on the delete button using XPath
                $browser->click('//form[@action="/tache/1/9"]/button[@class="btn btn-sm btn-danger"]')
                        ->waitFor('.swal-button--confirm') // Wait for the confirmation modal to appear
                        ->click('.swal-button--confirm') // Confirm the deletion
                        ->assertDontSee('amine2'); // Ensure the deleted task is not visible
            */
        });
    }
}
