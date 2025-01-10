<x-app-layout>
    <x-slot name="header">

   

<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray-500">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        Home
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="{{ url('admin/restaurants') }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-gray-500">Restaurants</a>
      </div>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <a href="{{ url('admin/restaurants/'.$restaurant->id) }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-gray-500">{{ $restaurant->name }}</a>
      </div>
    </li>

    <li aria-current="page">
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $menuItem->item_name }}</span>
      </div>
    </li>
  </ol>
</nav>

      
    <div class="flex justify-center items-center mt-4 mb-4 border-b-2">
        <div class="flex gap-1  w-1/2 mb-4">
            <div class="py-2 px-3  bg-red-600 text-white rounded-md flex justify-center items-center transition ease-in-out delay-200  hover:bg-green-800 border-r-2 border-b-2 border-black bg-red-600 rounded-lg ">
                <div class="pe-2">

                <svg fill="#fff" width="40px" height="40px" viewBox="0 -2.89 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  style="enable-background:new 0 0 122.88 117.09" xml:space="preserve">

<style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>

<g>

<path class="st0" d="M36.82,107.86L35.65,78.4l13.25-0.53c5.66,0.78,11.39,3.61,17.15,6.92l10.29-0.41c4.67,0.1,7.3,4.72,2.89,8 c-3.5,2.79-8.27,2.83-13.17,2.58c-3.37-0.03-3.34,4.5,0.17,4.37c1.22,0.05,2.54-0.29,3.69-0.34c6.09-0.25,11.06-1.61,13.94-6.55 l1.4-3.66l15.01-8.2c7.56-2.83,12.65,4.3,7.23,10.1c-10.77,8.51-21.2,16.27-32.62,22.09c-8.24,5.47-16.7,5.64-25.34,1.01 L36.82,107.86L36.82,107.86z M29.74,62.97h91.9c0.68,0,1.24,0.57,1.24,1.24v5.41c0,0.67-0.56,1.24-1.24,1.24h-91.9 c-0.68,0-1.24-0.56-1.24-1.24v-5.41C28.5,63.53,29.06,62.97,29.74,62.97L29.74,62.97z M79.26,11.23 c25.16,2.01,46.35,23.16,43.22,48.06l-93.57,0C25.82,34.23,47.09,13.05,72.43,11.2V7.14l-4,0c-0.7,0-1.28-0.58-1.28-1.28V1.28 c0-0.7,0.57-1.28,1.28-1.28h14.72c0.7,0,1.28,0.58,1.28,1.28v4.58c0,0.7-0.58,1.28-1.28,1.28h-3.89L79.26,11.23L79.26,11.23 L79.26,11.23z M0,77.39l31.55-1.66l1.4,35.25L1.4,112.63L0,77.39L0,77.39z"/>

</g>

</svg>

                </div>
                <div><span>{{ $restaurant->name }}</span> <strong>Restaurant Name</strong> </div>
            </div>
            <div class="py-2 px-3 bg-green-600 text-white rounded-md flex items-center transition all delay-200 hover:bg-blue-600 hover:text-white border-r-2 border-b-2 border-black bg-red-600 rounded-lg">
            <div class="pe-2">

<?xml version="1.0" encoding="utf-8"?>
<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg width="40px" height="40px" viewBox="0 0 1024 1024" fill="#000000" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" fill="" /></svg>
                            </div>
                <div>
                    <span>{{ $restaurant->address }}</span> <strong>Address</strong> 
                </div>
            </div>
            <div class="py-2 px-3 bg-green-600 text-white rounded-md flex items-center transition all delay-200 hover:bg-blue-600 hover:text-white border-r-2 border-b-2 border-black bg-red-600 rounded-lg"> 
                <div class="pe-2">

<?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5.13641 12.764L8.15456 9.08664C8.46255 8.69065 8.61655 8.49264 8.69726 8.27058C8.76867 8.07409 8.79821 7.86484 8.784 7.65625C8.76793 7.42053 8.67477 7.18763 8.48846 6.72184L7.77776 4.9451C7.50204 4.25579 7.36417 3.91113 7.12635 3.68522C6.91678 3.48615 6.65417 3.35188 6.37009 3.29854C6.0477 3.238 5.68758 3.32804 4.96733 3.5081L3 4C3 14 9.99969 21 20 21L20.4916 19.0324C20.6717 18.3121 20.7617 17.952 20.7012 17.6296C20.6478 17.3456 20.5136 17.0829 20.3145 16.8734C20.0886 16.6355 19.7439 16.4977 19.0546 16.222L17.4691 15.5877C16.9377 15.3752 16.672 15.2689 16.4071 15.2608C16.1729 15.2536 15.9404 15.3013 15.728 15.4001C15.4877 15.512 15.2854 15.7143 14.8807 16.119L11.8274 19.1733M12.9997 7C13.9765 7.19057 14.8741 7.66826 15.5778 8.37194C16.2815 9.07561 16.7592 9.97326 16.9497 10.95M12.9997 3C15.029 3.22544 16.9213 4.13417 18.366 5.57701C19.8106 7.01984 20.7217 8.91101 20.9497 10.94" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </div>
                <div class="flex flex-col"><span>{{ $restaurant->phone }}</span> <strong>Phone</strong></div>
            </div>

        </div>
       
       
    </div>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Menu - ').$menuItem->item_name }}
        </h2>

        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              

                @if(session('success'))
                <div class="py-2 px-3 bg-green-700 text-white rounded-md mb-4">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="py-2 px-3 bg-red-700 text-white rounded-md mb-4">
                    {{ session('error') }}
                </div>
                @endif


                <div class="grid grid-cols-2 gap-4">
                    <div class="left">
                    <form method="POST" action="{{ url('admin/restaurants/'.$restaurant->id.'/'.$menuItem->id.'/update-menu') }}">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div>
            <x-input-label for="item_name" :value="__('Item Name')" />
            <x-text-input id="item_name" class="block mt-1 w-full" type="text" name="item_name" :value="$menuItem->item_name" required autofocus autocomplete="item_name" />
            <x-input-error :messages="$errors->get('item_name')" class="mt-2" />
        </div>

       
        <div class="mt-4">
            <x-input-label for="amount" :value="__('Amount')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="$menuItem->amount" required autofocus autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>

       

        <div class="flex items-center justify-end mt-4">
          

            <x-primary-button class="ms-4">
                {{ __('Update Menu') }}
            </x-primary-button>
        </div>
    </form>
                

                    </div>
                    <div class="right border-l-2 md:ps-5">
                        <h4 class="text-xl font-extrabold mb-2">Menu Items</h4>
                    @foreach($restaurant->menus as $menu)
                    <div class="flex bg-white gap-1 mb-1 px-2 py-2 rounded-md border-r-2 border-b-2 border-black">
                        <div class="py-2 px-3 bg-yellow-500 text-black rounded-md flex flex-col border-r-2 border-b-2 border-gray-500"><strong>Name</strong> <span>{{ $menu->item_name }}</span></div>
                        <div class="py-2 px-3 bg-blue-600 text-white rounded-md flex flex-col border-r-2 border-b-2 border-gray-500"><strong>Price</strong> <span>Rs. {{ $menu->amount }}</span></div>

                        <div class="py-2 px-3  rounded-md flex flex-col border-r-2 border-b-2 border-gray-500">
                        <a href="{{ url('admin/restaurants/'.$restaurant->id.'/'.$menu->id.'/edit-menu') }}" class="px-3 py-2 bg-green-500 text-white rounded-md hover:bg-sky-700">Edit Menu</a>
                        </div>
                      

                    </div>
                @endforeach

            

                    </div>      

                </div>

                   
             
            </div>

          
        </div>
    </div>
</x-app-layout>
