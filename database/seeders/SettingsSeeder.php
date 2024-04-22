<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{

    public $settings = [
        ['key' => 'site_name', 'value' => 'Medsota'], ['key' => 'phone_number', 'value' => '+96800000000'], ['key'=>'email', 'value'=>'test@test.com']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert($this->settings);
    }
}
