<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name'=>"Laravel's Blog",
        	'address'=>'ind',
        	'contact_number'=>'7264738324',
        	'contact_email'=>'laravel_blog@gmail.com'
        ]);
    }
}
