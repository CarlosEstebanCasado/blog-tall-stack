<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$post->title}}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- Full width column -->
        <div class="flex flex-wrap overflow-hidden my-10 justify-center">
            <div class="w-1/2 inline-block overflow-hidden ">
                <h1 class="text-5xl font-medium text-center">{{$post->title}}</h1>
                <p class="">{{ $post->body }}</p>
                <div class="px-6 pt-4 pb-2">
                    @foreach ($categories as $category)
                        @if ($category->id == $post->category_id)
                        <a href="{{route('category', $post->category_id)}}">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $category->name }}</span>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>