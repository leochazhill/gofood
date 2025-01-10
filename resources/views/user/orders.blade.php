<x-app-layout>
<div class="py-1">
        

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" x-data="ordersList()">
            <div class="overflow-hidden sm:rounded-lg">
                
            <h3 class="text-2xl mb-2 px-3 py-2 border-b-2 border-gray-300 font-extrabold">Your Order</h3>

               <template x-for="(order, index) in orders" :key="order.id">
                    <div class="flex bg-white gap-1 mb-1 px-4 py-3 border-2 border-gray-100">
                        
                        <div class="py-2 px-3 bg-sky-500 text-white rounded-md flex border-r-2 border-b-2 border-gray-500"><strong>Order ID.</strong><span x-text="order.id"></span></div>
                        <div class="py-2 px-3 bg-green-500 text-white rounded-md flex border-r-2 border-b-2 border-gray-500"><strong>Status: </strong><span x-text="order.delivery_status"></span></div>
                        
                        <div class="py-2 px-3 bg-sky-500 text-white rounded-md border-r-2 border-b-2 border-gray-500">
                            <template x-for="(item, index) in order.order_items" :key="item.id">
                                
                                    <div>
                                        <strong>Name: </strong><span x-text="item.name"></span>
                                        <em>Price: </em><span x-text="item.price"></span>
                                        <em>Qty: </em><span x-text="item.quantity"></span>
                                    </div>
                                
                            </template>
                            
                    
                        </div>
                    </div>
                </template>






            </div>

          
        </div>
    </div>

    <x-slot name="script">
<script>
        function ordersList() {
            return {
                orders: @json($orders)
            }
        }
    </script>
</x-slot>

</x-app-layout>
