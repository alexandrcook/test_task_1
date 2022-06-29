<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_{{$product->id}}">
    Edit
</button>

<!-- Modal -->
<div class="modal fade" id="product_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('products.update', [$product->id])}}" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Edit product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <label for="" class="d-flex justify-content-between">
                        <div class="mt-2">Client</div>
                        <select class="ml-2 w-75 form-control" name="client">
                            @foreach (\App\Models\Client::all() as $client)
                                <option value="{{ $client->client }}" @selected($product->client == $client->client)>{{ $client->client }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label for="" class="d-flex justify-content-between">
                        <div class="mt-2">Product</div>
                        <input class="ml-2 form-control w-75" type="text" name="product" value="{{$product->product}}">
                    </label>

                    <label for="" class="d-flex justify-content-between">
                        <div class="mt-2">Total</div>
                        <input class="ml-2 form-control w-75" type="text" name="total" value="{{$product->total}}">
                    </label>

                    <label for="" class="d-flex justify-content-between">
                        <div class="mt-2">Date</div>
                        <input class="ml-2 form-control w-75" type="text" name="date" value="{{$product->date}}">
                    </label>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
