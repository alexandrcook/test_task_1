<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    const DATA = [
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '30', 'date' => '2/1/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '31', 'date' => '2/2/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '32', 'date' => '2/3/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '33', 'date' => '2/4/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '34', 'date' => '2/5/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '35', 'date' => '2/6/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '36', 'date' => '2/7/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '37', 'date' => '2/8/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '38', 'date' => '2/9/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '39', 'date' => '2/10/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '40', 'date' => '2/11/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '41', 'date' => '2/12/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '42', 'date' => '2/13/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '43', 'date' => '2/14/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '44', 'date' => '2/15/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '45', 'date' => '2/16/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '46', 'date' => '2/17/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '47', 'date' => '2/18/2015'],
        ['client' => 'Acme', 'product' => 'The Matrix Tr', 'total' => '48', 'date' => '2/19/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1200', 'date' => '2/19/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1201', 'date' => '2/20/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1202', 'date' => '2/21/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1203', 'date' => '2/22/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1204', 'date' => '2/23/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1205', 'date' => '2/24/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1206', 'date' => '2/25/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1207', 'date' => '2/26/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1208', 'date' => '2/27/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1209', 'date' => '2/28/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1210', 'date' => '3/1/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1211', 'date' => '3/2/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1212', 'date' => '3/3/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1213', 'date' => '3/4/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1214', 'date' => '3/5/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1215', 'date' => '3/6/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1216', 'date' => '3/7/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1217', 'date' => '3/8/2015'],
        ['client' => 'Microsoft', 'product' => 'Macbook Air', 'total' => '1218', 'date' => '3/9/2015'],
        ['client' => 'Apple', 'product' => 'Server Rack', 'total' => '10000', 'date' => '2/10/2015'],
        ['client' => 'Apple', 'product' => 'Server Farm', 'total' => '100000', 'date' => '2/28/2015'],
        ['client' => 'Apple', 'product' => 'Watch', 'total' => '399', 'date' => '3/9/2015 ']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::DATA as $dataItem){
            Product::create($dataItem);
        }
    }
}
