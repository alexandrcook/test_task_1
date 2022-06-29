<?php
//
//namespace Tests\Feature;
//
//use App\Models\{Client,ProductResource};
//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Tests\TestCase;
//
//class SearchTest extends TestCase
//{
//    use RefreshDatabase;
//
//    /** @test */
//    public function products_page_is_shown()
//    {
//        $this->withoutExceptionHandling();
//
//        $clients = Client::factory(2)->create();
//        $products = collect();
//        foreach ($clients as $client){
//            $products = $products->concat(ProductResource::factory(3)->create(['client' => $client->client]));
//        }
//
//        $this->get('/products')->assertSee($products);
//    }
//}
