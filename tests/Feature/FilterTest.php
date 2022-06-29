<?php

namespace Tests\Feature;

use App\Filters\AbstractFilter;
use App\Models\{Client,Product};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class FilterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_if_filter_by_keyword_and_type_works()
    {
        $this->withoutExceptionHandling();

        $clients = Client::factory(3)->create();
        $products = collect();
        foreach ($clients as $client){
            $products = $products->concat(Product::factory(5)->create(['client' => $client->client]));
        }

        //check if keyword search work
        $request = Request::create('/', 'GET', [
            'keyword' => $products[0]->client
        ]);
        $filtered = (new AbstractFilter($request, Product::class))->filter();
        $this->assertTrue($filtered->getCollection()->contains($products[0]));


        //check if keyword and type search work
        $request = Request::create('/', 'GET', [
            'keyword' => $products[0]->client,
            'type' => 'client'
        ]);
        $filtered = (new AbstractFilter($request, Product::class))->filter();
        $this->assertTrue($filtered->getCollection()->contains($products[0]));
    }
}
