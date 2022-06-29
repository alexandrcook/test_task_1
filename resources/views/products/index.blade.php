<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revenue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0;font-family: 'Nunito', sans-serif;}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
</head>
<body>

    <div id="app">
        <app-wrap></app-wrap>
    </div>

{{--<div class="container pt-5">--}}

{{--    <!-- SETTINGS -->--}}
{{--    <div class="mb-5 d-flex justify-content-between">--}}
{{--        <!-- SEARCH PART -->--}}
{{--        <form action="{{route('filter')}}" class="d-flex justify-content-between">--}}
{{--            @foreach(request()->except('search_keyword','search_column','page') as $name => $value)--}}
{{--                @if(is_array($value))--}}
{{--                    @foreach($value as $k => $v)--}}
{{--                        <input type="hidden" name="{{$name}}[]" value="{{$value[$k]}}">--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <input type="hidden" name="{{$name}}" value="{{$value}}">--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--            <input class="input-group-text text-left mr-3" type="text" name="search_keyword" value="{{request()->get('search_keyword')}}">--}}
{{--            <select class="input-group-text mr-3" name="search_column">--}}
{{--                @foreach (['all', 'client', 'product', 'total', 'date'] as $type)--}}
{{--                    <option value="{{ $type }}" @selected(request()->get('search_column') == $type)>--}}
{{--                        {{ $type }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <input class="btn btn-primary" type="submit" value="Search">--}}
{{--        </form>--}}
{{--        <!-- SEARCH PART END -->--}}
{{--        <!-- ITEMS PER PAGE SELECTOR -->--}}
{{--        <form action="{{route('filter')}}" class="d-flex justify-content-between mt-1">--}}
{{--            <div class="mr-3 mt-1">Items per page: </div>--}}
{{--            <div>--}}
{{--            @foreach(request()->except('items_count_limit', 'page') as $name => $value)--}}
{{--                @if(is_array($value))--}}
{{--                    @foreach($value as $k => $v)--}}
{{--                        <input type="hidden" name="{{$name}}[{{$k}}]" value="{{$v}}">--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <input type="hidden" name="{{$name}}" value="{{$value}}">--}}
{{--                @endif--}}
{{--            @endforeach--}}

{{--            <select name="items_count_limit" class="input-group-text" onchange="submit()">--}}
{{--                @foreach (call_user_func(function(array $a){sort($a);return $a;}, array_unique([10,15,20,30,50,$products->perPage()])) as $type)--}}
{{--                    <option value="{{ $type }}" @selected(request()->get('items_count_limit') == $type || $products->perPage() == $type)>--}}
{{--                        {{ $type }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <!-- ITEMS PER PAGE SELECTOR END -->--}}
{{--    </div>--}}
{{--    <!-- SETTINGS END -->--}}
{{--</div>--}}

{{--<!-- CHARTS PART -->--}}
{{--<div class="container mt-5 @if(!count($products)) d-none @endif">--}}
{{--    <div class="row">--}}
{{--        <div class="col-6">--}}
{{--            <h3>Total revenue chart</h3>--}}
{{--            <div id="chart" class="mb-5"></div>--}}
{{--        </div>--}}
{{--        <div class="col-6">--}}
{{--            <h3>Total of each client chart</h3>--}}
{{--            <div id="chart1" class="mb-5"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- CHARTS PART END -->--}}

{{--<div class="container">--}}
{{--    <div class="text-center mb-4">--}}
{{--        <h3>Orders table</h3>--}}
{{--    </div>--}}

{{--    <!-- TABLE LIST -->--}}
{{--    <div class="mb-5">--}}
{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul class="list-unstyled">--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if(Session::has('message'))--}}
{{--            <p class="alert alert-info">{{ Session::get('message') }}</p>--}}
{{--        @endif--}}
{{--        @if(!count($products))--}}
{{--            <div class="">Empty date... Please change searching params...</div>--}}
{{--        @else--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">#</th>--}}
{{--                    <th scope="col">--}}
{{--                        <div class="d-flex">--}}
{{--                            <span class="mr-2">Client</span>--}}
{{--                            @include('.products.partials.sorting-input', ['sort_column' => 'client'])--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col">--}}
{{--                        <div class="d-flex">--}}
{{--                            <span class="mr-2">Product</span>--}}
{{--                            @include('.products.partials.sorting-input', ['sort_column' => 'product'])--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col">--}}
{{--                        <div class="d-flex">--}}
{{--                            <span class="mr-2">Total</span>--}}
{{--                            @include('.products.partials.sorting-input', ['sort_column' => 'total'])--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col">--}}
{{--                        <div class="d-flex">--}}
{{--                            <span class="mr-2">Date</span>--}}
{{--                            @include('.products.partials.sorting-input', ['sort_column' => 'date'])--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col">Actions</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($products as $product)--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{$products->currentPage() > 1 ? (($products->currentPage()-1) * $products->perPage() + $loop->index + 1) : ($loop->index + 1) }}</th>--}}
{{--                        <td>@if(in_array(request()->get('search_column'), ['all','client'])) {!! stringHighlight($product->client, request()->get('search_keyword')) !!} @else{{$product->client}}@endif</td>--}}
{{--                        <td>@if(in_array(request()->get('search_column'), ['all','product'])) {!! stringHighlight($product->product, request()->get('search_keyword')) !!} @else{{$product->product}}@endif</td>--}}
{{--                        <td>${{$product->total}}</td>--}}
{{--                        <td>{{$product->date}}</td>--}}
{{--                        <td>--}}
{{--                            @include('products.partials.edit_modal', ['product' => $product])--}}
{{--                            <form action="">--}}

{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}

{{--                </tbody>--}}
{{--            </table>--}}
{{--            {{$products->links()}}--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <!-- TABLE LIST END -->--}}


</div>
</body>

<?php
//    $datesClientTotalArr = [];
//
//    foreach ($products->groupBy('date') as $date => $clientProducts){
//        $datesClientTotalArr[$date]['summaryTotal'] = $clientProducts->sum('total');
//        foreach ($clientProducts as $product){
//            $datesClientTotalArr[$date][$product->client] = $product->total;
//        }
//    }
//?>

<script>
    {{--let axisSettings = {--}}
    {{--    x: {--}}
    {{--        show: true,--}}
    {{--        type: 'timeseries',--}}
    {{--        tick: {--}}
    {{--            format: '%Y/%m/%d',--}}
    {{--            rotate: 90,--}}
    {{--            culling: {--}}
    {{--                max: 20--}}
    {{--            }--}}
    {{--        },--}}
    {{--    },--}}
    {{--    y: {--}}
    {{--        padding: 10--}}
    {{--    }--}}
    {{--};--}}

    {{--var chart = c3.generate({--}}
    {{--    bindto: '#chart',--}}
    {{--    data: {--}}
    {{--        x: 'x',--}}
    {{--        columns: [--}}
    {{--            ['x', @foreach($datesClientTotalArr as $date => $data) '{{\Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d')}}', @endforeach],--}}
    {{--            ['Total Revenue', @foreach($datesClientTotalArr as $date => $data) {{$data['summaryTotal']}}, @endforeach]--}}
    {{--        ]--}}
    {{--    },--}}
    {{--    line: {connectNull: true},--}}
    {{--    axis: axisSettings--}}
    {{--});--}}

    {{--var chart1 = c3.generate({--}}
    {{--    bindto: '#chart1',--}}
    {{--    data: {--}}
    {{--        x: 'x',--}}
    {{--        columns: [['x', @foreach($datesClientTotalArr as $date => $data) '{{\Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d')}}', @endforeach],--}}
    {{--            @foreach($products->groupBy('client')->keys() as $client)--}}
    {{--                ['{{$client}}',--}}
    {{--                @foreach($datesClientTotalArr as $date => $clientTotalArr)--}}
    {{--                    @if(array_key_exists($client, $clientTotalArr)) {{$clientTotalArr[$client]}}, @else null, @endif--}}
    {{--                @endforeach],--}}
    {{--            @endforeach],--}}
    {{--    },--}}
    {{--    line: {connectNull: true},--}}
    {{--    axis: axisSettings--}}
    {{--});--}}

</script>
<script src="{{ mix('/js/app.js') }}"></script>

</html>
