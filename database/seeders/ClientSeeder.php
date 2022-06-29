<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    const DATA = [
        ['client' => 'Acme'],
        ['client' => 'Apple'],
        ['client' => 'Microsoft']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::DATA as $dataItem){
            Client::create($dataItem);
        }
    }
}
