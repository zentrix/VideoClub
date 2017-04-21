<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class catalogTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCatalog()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('catalog')
                    ->assertSee('Listado de peliculas');
        });
    }

    public function testCatalogShow()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('catalog/show/3')
                    ->assertSee('Detalles de peliculas 3');
        });
    }

    public function testCatalogCreate()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('catalog/create')
                    ->assertSee('Agregar pelicula');
        });
    }

    public function testCatalogEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('catalog/edit/3')
                    ->assertSee('Editar pelicula 3');
        });
    }

}
