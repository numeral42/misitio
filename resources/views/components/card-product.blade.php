@props(['product'])

<div class="border shadow-lg rounded-lg overflow-hidden">
    <div class="bg-cover bg-center rounded-lg"
      style="
        
          @if($product->image)
          background-image: url('{{Storage::url($product->image->url)}}');
            @else
            background-image: url('{{Storage::url('public/numeral42.png')}}');
            @endif

        height: 300px;
      "
    >
    <div class="float-left ml-2 mt-2">
      <strong class="bg-gray-400 px-1 rounded-lg">Art: {{$product->id}}</strong>
</div>


    <div class="grid justify-items-end items-end h-full">
            <span class="py-2">

            @foreach ($product->tags as $tag)

              <a href="" class="text-white bg-{{$tag->color}}-500 px-2 py-0.5 text-sm mr-2 rounded-full">{{$tag->name}}</a>

            @endforeach
          </span>
        </div>


</div>

        <div class="px-2 pt-2">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{$product->name}}</h5>
                <p class="text-gray-700 text-base mb-4 px-2">
                    {{$product->description}}
                </p>
                <p class="text-gray-700 text-base mb-4">
                    Precio: ${{$product->price}}
                </p>
        </div>  

    
</div>
