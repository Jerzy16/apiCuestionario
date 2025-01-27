<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
        'NomUsu' => "pedro",
        'AppUsu' => "c",
        'ApmUsu' => "c",
        'DocUsu' => "12345678",
        'PassUsu' => "12345678",
        'EmaUsu' => "c",
        'CelUsu' => "12345678",
        'sexUsu' => "c",
        'FnaUsu' => "2020/12/12",
        'RegUsu' => "2020/12/12"
        ]);

        Usuario::create([
            'NomUsu' => "jerzy",
            'AppUsu' => "leon",
            'ApmUsu' => "rojas",
            'DocUsu' => "75939467",
            'PassUsu' => "12345678",
            'EmaUsu' => "jerzy@gmial.com",
            'CelUsu' => "978319720",
            'sexUsu' => "M",
            'FnaUsu' => "1999-10-12",
            'RegUsu' => "2024/12/12"
            ]);
    }
}
