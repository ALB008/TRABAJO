<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\EditorialFactory;
use \App\Models\Usuario;
use \App\Models\Actividad;
use \App\Models\Autor;
use \App\Models\Editorial;
use \App\Models\Empleado;
use \App\Models\Escribe;
use \App\Models\Genero;
use \App\Models\Libro;
use \App\Models\Participa;
use \App\Models\Prestamo;
use \App\Models\Sistema;
use \App\Models\Tiene;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Genero::factory(5)->create();
        Editorial::factory(5)->create();

    }
}
