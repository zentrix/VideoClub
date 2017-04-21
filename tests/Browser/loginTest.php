<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class loginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('login')
                    ->assertSee('Login usuario');
        });
    }

    public function testLogout()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit('logout')
                    ->assertSee('Logout usuario');
        });
    }
}
