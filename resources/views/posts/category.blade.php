<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase mb-4 text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post">
            </x-card-post>
        @endforeach
        <div class="mt-4">
            {{$posts->links('pagination::tailwind')}}
        </div>
    </div>

</x-app-layout>
