<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <div class="flex flex-col pt-6">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <div class="text-center py-4 lg:px-4">
                        <div class="p-2 bg-red-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                          <span class="flex rounded-full bg-red-800 uppercase px-2 py-1 text-xs font-bold mr-3">!</span>
                          <span class="font-semibold mr-2 text-left text-white flex-auto">{{ $error }}</span>
                        </div>
                      </div>
                    @endforeach
                </ul>
            @endif

            <form method="post" action="{{ route('categories.update', $category->id) }}" class="w-full">
                @method('PATCH') 
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label 
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                            for="name"
                        >
                            Name
                        </label>
                        <input 
                            name="name" 
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                            id="grid-first-name" 
                            type="text" 
                            placeholder="Category name"
                            value="{{ $category->name }}"
                        >
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Update
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>