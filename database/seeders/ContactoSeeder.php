<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Empresas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contacto::factory()
            ->count(500)
            ->create();
    }
}
