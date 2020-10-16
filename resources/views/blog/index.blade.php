<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <!-- Full width column -->
        <div class="flex flex-wrap overflow-hidden my-10 justify-center">
            <div class="w-1/2 inline-block overflow-hidden ">
                <h1 class="text-5xl font-medium text-center">Last posts</h1>
                <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque maxime reiciendis praesentium est, ea ut beatae pariatur sed quia dolor asperiores blanditiis. Unde commodi excepturi neque ratione, quaerat alias aliquam.</p>
            </div>
        </div>
        <!-- Four columns -->
        <div class="flex flex-wrap -mx-2 overflow-hidden ">
            @if ($posts != null)
                @foreach ($posts as $post)
                <div class="bg-white shadow rounded my-2 px-2 w-full overflow-hidden sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/4">
                    <!--Card-->
                    <!--<div class="max-h-full rounded overflow-hidden shadow-lg">-->
                        <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                        <p class="text-gray-700 text-base">
                            {{ Str::limit($post->body , 150, '...')}}
                        </p>
                        <br>
                        @foreach ($users as $user)
                            @if ($user->id == $post->user_id)
                            <p class="text-gray-700 text-base">{{ $user->name }}</p>
                            @endif
                        @endforeach
                        </div>
                        <div class="px-6 pt-4 pb-2">
                        @foreach ($categories as $category)
                            @if ($category->id == $post->category_id)
                            <a href="{{route('category', $post->category_id)}}">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $category->name }}</span>
                            </a>
                            @endif
                        @endforeach
                        </div>
                    <!--</div>-->
                </div>
                @endforeach
            @else
                <p class="text-gray-700 text-base">No results</p>
            @endif
        </div>
    </div>
</x-app-layout>