<x-front-layout>
<div x-data="getRestaurants()">
    <div class="bg-banner relative overflow-hidden h-96 flex justify-center items-center">
        <img src="{{ asset('banner-1.jpg') }}" class="absolute top-0 left-0 right-0 z-1 w-full h-96 object-cover">

         
        <div class="max-w-2xl mx-auto mt-6 px-6 py-4 overflow-hidden sm:rounded-lg relative z-2 bg-gray-200">
                <div class="p-1 text-gray-900 mb-4 w-full">
                
                <form method="get" action="{{ url('search') }}">
       
        <!-- search field -->
        <div>
            <x-input-label for="s" :value="__('Search the widest range of foods - Hunger No Longer :)')" />
            <x-text-input @keyup="searchRestaurants()" x-model="s" id="s" class="block mt-1 w-full" type="text" name="s" :value="old('s')" required autofocus autocomplete="s" />
            <x-input-error :messages="$errors->get('s')" class="mt-2" />
            <span x-text="s"></span>
        </div>

        <div class="mt-2 text-center">
            <input type="radio" name="stype" value="restaurant" checked> Restaurant
            <input type="radio" name="stype" value="Menu Item"> Menu Item

        </div>

      
        

        <div class="flex items-center justify-center mt-1">
          

            <x-primary-button class="ms-3">
                {{ __('Find Restaurant') }}
            </x-primary-button>
        </div>
    </form>

                </div>
            </div>
            

    </div>
    
            
       



            <div class="max-w-7xl mx-auto flex flex-wrap mt-4">

                <template x-for="(restaurant, index) in restaurants" :key="restaurant.id">
           
                    <div class="basis-3/12 p-2">
                        <div class="flex-initial p-3 border border-gray-200 rounded-lg flex flex-col justify-center items-center">
                       
                        <div class="mb-2">
                        <img :src="'{{ asset('restaurants/') }}' + '/' + restaurant.thumbnail" class="object-cover rounded-md h-60">
                        </div>
                        <a :href="'/restaurant/' + restaurant.id">   
                        <div class="flex">
                      
                                <div class="pe-2">
                                <svg fill="#f60" width="40px" height="40px" viewBox="0 -2.89 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  style="enable-background:new 0 0 122.88 117.09" xml:space="preserve">

<style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style>

<g>

<path class="st0" d="M36.82,107.86L35.65,78.4l13.25-0.53c5.66,0.78,11.39,3.61,17.15,6.92l10.29-0.41c4.67,0.1,7.3,4.72,2.89,8 c-3.5,2.79-8.27,2.83-13.17,2.58c-3.37-0.03-3.34,4.5,0.17,4.37c1.22,0.05,2.54-0.29,3.69-0.34c6.09-0.25,11.06-1.61,13.94-6.55 l1.4-3.66l15.01-8.2c7.56-2.83,12.65,4.3,7.23,10.1c-10.77,8.51-21.2,16.27-32.62,22.09c-8.24,5.47-16.7,5.64-25.34,1.01 L36.82,107.86L36.82,107.86z M29.74,62.97h91.9c0.68,0,1.24,0.57,1.24,1.24v5.41c0,0.67-0.56,1.24-1.24,1.24h-91.9 c-0.68,0-1.24-0.56-1.24-1.24v-5.41C28.5,63.53,29.06,62.97,29.74,62.97L29.74,62.97z M79.26,11.23 c25.16,2.01,46.35,23.16,43.22,48.06l-93.57,0C25.82,34.23,47.09,13.05,72.43,11.2V7.14l-4,0c-0.7,0-1.28-0.58-1.28-1.28V1.28 c0-0.7,0.57-1.28,1.28-1.28h14.72c0.7,0,1.28,0.58,1.28,1.28v4.58c0,0.7-0.58,1.28-1.28,1.28h-3.89L79.26,11.23L79.26,11.23 L79.26,11.23z M0,77.39l31.55-1.66l1.4,35.25L1.4,112.63L0,77.39L0,77.39z"/>

</g>

</svg>
                                </div>
                                <div class="flex flex-col">
                                   <strong x-text="restaurant.name"></strong>
                                   <small x-text="restaurant.town" class="uppercase"></small>
                                   <small x-text="restaurant.address"></small>
                                </div>
                            </div>
                        </div>
</a>
                     
                    </div>
</template>


</div>

                

        </div>
    </div>


    <x-slot name="script">
<script>
        function getRestaurants() {
            return {
                restaurants:@json($restaurants),
                s:'',
                init(){
                    this.getCart();
                    
                },
                async getCart(){
                    
                },
                async searchRestaurants(){
                    if(this.s.length > 2 || this.s.length == 0){
                       
                        const response = await fetch("{{ route('restaurants.search') }}" + '?s=' + this.s);

                        let data = await response.json();

                        this.restaurants = data.restaurants;

                        console.log(this.restaurants);

                        //this.restaurants = Array.isArray(data.restaurants) ? data.restaurants : Object.values(data.restaurants);



                    }
                }
              
            }
        }
    </script>
</x-slot>

</x-front-layout>