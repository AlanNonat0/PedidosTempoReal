<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['status' => 'Em preparo'],
            ['status' => 'Concluido'],

        ];
        foreach ($statuses as $status) {
            Status::create($status);
        }
        
    }
}
