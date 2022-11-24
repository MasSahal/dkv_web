<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Submenu::create([
            'id_menu' => 3,
            'nama_submenu' => 'Prestasi',
            'icon_submenu' => 'fa fa-question',
            'slug_submenu' => 'prestasi',
            'urutan_submenu' => 1
        ]);
    }
}
