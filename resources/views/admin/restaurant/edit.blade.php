<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Restaurant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                <form method="POST" action="{{ url('admin/restaurants/'.$restaurant->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$restaurant->name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$restaurant->address" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$restaurant->phone" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-2">
            <img src="{{ asset('restaurants/'.$restaurant->thumbnail) }}" width="100px" height="100px" class="rounded-md">
        </div>

        <div class="mt-4">
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <x-text-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" :value="old('thumbnail')" autofocus autocomplete="thumbnail" />
            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
        </div>

       

        <div class="flex items-center justify-end mt-4">
          

            <x-primary-button class="ms-4">
                {{ __('Update Restaurant') }}
            </x-primary-button>
        </div>
    </form>
                    
                </div>
            </div>

          
        </div>
    </div>
</x-app-layout>
