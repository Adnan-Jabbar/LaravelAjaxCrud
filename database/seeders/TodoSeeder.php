<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = [
            ['name' => 'Adnan', 'created_at' => now()],
            ['name' => 'Imbisat', 'created_at' => now()],
            ['name' => 'Suleman', 'created_at' => now()],
            ['name' => 'Bajwa', 'created_at' => now()],
            ['name' => 'Faiz ', 'created_at' => now()],
        ];

        Todo::insert($todo);
    }
}
