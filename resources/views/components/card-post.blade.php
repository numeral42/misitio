@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <img class="w-full h-72 object-cover object-center" src="
    @if($post->image)
        {{Storage::url($post->image->url)}}
    @else
        {{Storage::url('public/numeral42.png')}}
    @endif
    " alt="">
    <div class="px-6 py-4">
        <h1>
            <a class="font-bold text-xl mb-2" href="{{route('posts.show', $post)}}">
                {{$post->name}}
            </a>
        </h1>
        <div class="text-gray-700 text-base">
            {{$post->extract}}
        </div>
    </div>
    <div class="px-6 pt-3 pb-3">
        @foreach ($post->tags as $tag)
            <a class="inline-block bg-{{$tag->color}}-400 shadow-xl rounded-full px-3 py-1 text-sm text-gray-200 mr-2" 
                href="{{route('posts.tag',$tag)}}">
                {{$tag->name}}
            </a>
        @endforeach 
    </div>
</article>