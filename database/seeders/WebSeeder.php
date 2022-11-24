<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Web::create([
            'title_web' => "Portal DKV",
            'sambutan' => "Selamat datang di Portal DKV",
            'email' => "dkv@cic.ac.id",
            'telepon' => '0998392234',
            'fax' => '93482423423',
            'lokasi' => "Jl. Kesambi No.202, Kesambi, Kota Cirebon",
            'gmap' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.297023819398!2d108.5512130501469!3d-6.733571467686429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d8bed34bb3f%3A0x82cd9d4a88eb1ecd!2sJln%20Cipto%20mangkusumo%20Gg.%20Langgar%20No.121%2C%20RW.03%2C%20Sigendeng%2C%20Kesambi%2C%20Kec.%20Kesambi%2C%20Kota%20Cirebon%2C%20Jawa%20Barat%2045134!5e0!3m2!1sid!2sid!4v1669253419826!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}
