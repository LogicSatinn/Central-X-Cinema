<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'English'],
            ['name' => 'Swahili'],
            ['name' => 'Arabic'],
            ['name' => 'Hindi'],
            ['name' => 'Tamil'],
            ['name' => 'Multiple Language']
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}
