<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Menu::create([
            'nama_menu' => 'Beranda',
            'icon_menu' => 'fa fa-home',
            'slug_menu' => 'beranda',
            'urutan_menu' => 1
        ]);

        \App\Models\Menu::create([
            'nama_menu' => 'Tentang Kami',
            'icon_menu' => 'fa fa-home',
            'slug_menu' => 'tentang-kami',
            'urutan_menu' => 2
        ]);

        \App\Models\Menu::create([
            'nama_menu' => 'Mahasiswa',
            'icon_menu' => 'fa fa-home',
            'slug_menu' => 'mahasiswa',
            'urutan_menu' => 3
        ]);

        \App\Models\Menu::create([
            'nama_menu' => 'Informasi',
            'icon_menu' => 'fa fa-question',
            'slug_menu' => 'informasi',
            'urutan_menu' => 4
        ]);

        \App\Models\Menu::create([
            'nama_menu' => 'Pusdatin',
            'icon_menu' => 'fa fa-question',
            'slug_menu' => 'pusdatin',
            'urutan_menu' => 5
        ]);
    }
}
