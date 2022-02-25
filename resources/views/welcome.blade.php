<link rel="stylesheet" href="{{ asset('blade.css') }}">
<div>

    @foreach ($categories as $category)
       
        <span class="categor2">{{ $category['category_name']}} </span>
         <span>&#8594;</span>
        @foreach ($category['product'] as $prod)
        <span class="categor1">{{ $prod['name']}} </span>
        <span class="categor3">{{ $prod['id']}} </span>
        <hr>
        @endforeach
       
    @endforeach

</div>
