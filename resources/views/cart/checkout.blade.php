<x-front-layout>
<div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4" x-data="shoppingCart()">
            <div class="overflow-hidden sm:rounded-lg col-start-1 col-span-2">
                
          

            <div class="p-4">
                   <form id="">
                        <h4 class="text-xl font-semibold mb-4">Delivery Details</h4>
                        <div class="grid grid-cols-2 bg-gray-100 p-4 rounded-md">
                            <div class="px-3 py-2">
                                <x-input-label>First Name</x-input-label>
                                <x-text-input id="firstname" class="block mt-1 w-full"
                                    type="text"
                                    name="firstname"
                                    required autocomplete="firstname" x-model="data.firstname" />
                                <small x-text="errors.firstname" class="text-red-600"></small>
                            </div>
                            <div class="px-3 py-2">
                                <x-input-label>Last Name</x-input-label>
                                <x-text-input id="firstname" class="block mt-1 w-full"
                                    type="text"
                                    name="lastname"
                                    required autocomplete="lastname" x-model="data.lastname" />
                                <small x-text="errors.lastname" class="text-red-600"></small>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 bg-gray-100 p-4 border-t border-white rounded-md">
                            <div class="px-3 py-2">
                                <x-input-label>Email</x-input-label>
                                <x-text-input id="email" class="block mt-1 w-full"
                                    type="email"
                                    name="email"
                                    required autocomplete="email" x-model="data.email"/>
                                <small x-text="errors.email" class="text-red-600"></small>
                            </div>
                            <div class="px-3 py-2">
                                <x-input-label>Phone</x-input-label>
                                <x-text-input id="phone" class="block mt-1 w-full"
                                    type="text"
                                    name="phone"
                                    required autocomplete="phone" x-model="data.phone" />
                                <small x-text="errors.phone" class="text-red-600"></small>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 bg-gray-100 p-4 border-t border-white rounded-md">
                            
                            <div class="px-3 py-2">
                                <x-input-label>Country</x-input-label>
                                <x-text-input id="country" class="block mt-1 w-full"
                                    type="text"
                                    name="country"
                                    required autocomplete="country" x-model="data.country" />
                                <small x-text="errors.country" class="text-red-600"></small>
                            </div>

                            <div class="px-3 py-2">
                                <x-input-label>Street</x-input-label>
                                <x-text-input id="street" class="block mt-1 w-full"
                                    type="text"
                                    name="street"
                                    required autocomplete="street" x-model="data.street" />
                                <small x-text="errors.street" class="text-red-600"></small>
                            </div>
                            
                            <div class="px-3 py-2">
                                <x-input-label>Town</x-input-label>
                                <x-text-input id="town" class="block mt-1 w-full"
                                    type="text"
                                    name="town"
                                    required autocomplete="town" x-model="data.town" />
                                <small x-text="errors.town" class="text-red-600"></small>
                            </div>

                            <div class="px-3 py-2">
                                <x-input-label>Postcode</x-input-label>
                                <x-text-input id="postcode" class="block mt-1 w-full"
                                    type="text"
                                    name="postcode"
                                    required autocomplete="postcode" x-model="data.postcode" />
                                <small x-text="errors.postcode" class="text-red-600"></small>
                            </div>
                        </div>



                        <h4 class="text-xl font-semibold mt-4 mb-4">Payment Mode</h4>
                        <div class="grid grid-cols-1 bg-gray-100 p-4 rounded-md">
                            <div class="px-3 py-2">
                                Currently we have not integrated any online payment method. We are working on it. However, for now we are delivering it on cash on delivery 
                            </div>
                            
                        </div>

                        
                   </form>
            </div>






            </div>

            <!-- right sidebar-->
             <div class="flex flex-col">

              <h3 class="text-2xl mb-2 px-3 py-2 border-b-2 border-gray-300 font-extrabold">Your Order</h3>

            <template x-for="(cartItem, index) in cartItems" :key="cartItem.id">
                <div class="flex mb-2 px-3 py-2 border-b-2 border-gray-300 relative">
                    <div x-text="cartItem.name" class="py-2 px-3 bg-blue-500 text-white flex justify-center items-center transition ease-in-out delay-200  hover:bg-green-800 rounded-l-md"></div>
                    <div x-text="'Rs.'+ cartItem.price" class="py-2 px-3 bg-blue-300 text-black flex justify-center items-center"></div>
                    <div x-text="'Qty.'+ cartItem.quantity" class="py-2 px-3 bg-blue-300 text-black flex justify-center items-center"></div>
                    <div x-text="'Rs.'+ cartItem.price * cartItem.quantity" class="py-2 px-3 bg-blue-300 text-black flex justify-center items-center rounded-r-md"></div>
                    <div @click="removeItem(cartItem.id)" class="absolute top-0 right-0">

<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
<svg width="25px" height="25px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    
    <title>cross-circle</title>
    <desc>Created with Sketch Beta.</desc>
    <defs>

</defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-570.000000, -1089.000000)" fill="#000000">
            <path d="M591.657,1109.24 C592.048,1109.63 592.048,1110.27 591.657,1110.66 C591.267,1111.05 590.633,1111.05 590.242,1110.66 L586.006,1106.42 L581.74,1110.69 C581.346,1111.08 580.708,1111.08 580.314,1110.69 C579.921,1110.29 579.921,1109.65 580.314,1109.26 L584.58,1104.99 L580.344,1100.76 C579.953,1100.37 579.953,1099.73 580.344,1099.34 C580.733,1098.95 581.367,1098.95 581.758,1099.34 L585.994,1103.58 L590.292,1099.28 C590.686,1098.89 591.323,1098.89 591.717,1099.28 C592.11,1099.68 592.11,1100.31 591.717,1100.71 L587.42,1105.01 L591.657,1109.24 L591.657,1109.24 Z M586,1089 C577.163,1089 570,1096.16 570,1105 C570,1113.84 577.163,1121 586,1121 C594.837,1121 602,1113.84 602,1105 C602,1096.16 594.837,1089 586,1089 L586,1089 Z" id="cross-circle" sketch:type="MSShapeGroup">

</path>
        </g>
    </g>
</svg>

                    </div>
                </div>
            </template>

            <div class="total py-2 px-3 mt-3">
                Total: <span x-text="'Rs.'+ totalPrice.toFixed(2)" class="py-2 px-3 bg-green-500 rounded-md"></span>
            </div>

            <div class="checkout-box mt-5 flex">
                <button @click="checkout()" type="button" class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" x-show="status">Order Now</button>
            </div>


          

             </div>

            <div x-show="login_dialog">
             <x-modal-dialog></x-modal-dialog>
            </div>

        </div>

       

    </div>

    
    <x-slot name="script">
<script>
        function shoppingCart() {
            return {
                data:{
                    firstname : '',
                    lastname: '',
                    email:'',
                    phone: '',
                    country:'',
                    street:'',
                    town:'',
                    postcode:'',
                },
                errors:[],
                cartItems: [],
                user:@json($user),
                totalPrice: 0,
                status:false,
                login_dialog:false,
                init(){
                    this.getCart();
                    if(this.user != null){
                        this.loggin_dialog = true;
                    }
                },
                async getCart(){
                    try {
                        let response = await fetch("{{ route('cart.index') }}");
                        let data = await response.json();
                        this.cartItems = Array.isArray(data.cartItems) ? data.cartItems : Object.values(data.cartItems);
                        //console.log(this.cartItems);
                        this.calculateTotalPrice();
                        this.isCartEmpty();
                    } catch (error) {
                        console.error('Error fetching cart items:', error);
                    }
                    
                },
              

                async removeItem(id) {
                    this.cartItems = this.cartItems.filter(item => item.id !== id);
                    await fetch("{{ route('cart.remove') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({ id })
                    });
                    this.calculateTotalPrice();
                    this.isCartEmpty();
                },

                async checkout(){
                    try {
                        const response = await fetch("{{ route('cart.checkout') }}",{
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            body: JSON.stringify({firstname:this.data.firstname, lastname:this.data.lastname, email: this.data.email, phone: this.data.phone, country: this.data.country, street: this.data.street, town: this.data.town, postcode: this.data.postcode })
                        });
                        let data = await response.json();

                        if(data.user_logged_in == false){
                            this.login_dialog = true;
                            return;
                        }

                        if(data.validation == false){
                            
                            this.errors = data.errors;
                            console.log(this.errors);
                            return;
                        }
                       
                        //alert('hi');
                        console.log(data);
                        this.calculateTotalPrice();
                       
                        alert(data.success);
                        window.location.replace("/orders");
                       
                    } catch (error) {
                        console.error('Error fetching cart items:', error);
                    }
                },
                isCartEmpty(){
                    if(this.cartItems.length > 0){
                            this.status = true;
                        }else{
                            this.status = false;
                        }
                },
                
                calculateTotalPrice() {
                    //this.totalPrice = this.totalPrice + 2;
                   
                    //this.totalPrice = this.cartItems.reduce((total, item) => total + (item.price * item.quantity), 0);    
                    this.totalPrice = Array.isArray(this.cartItems)
                    ? this.cartItems.reduce((total, item) => total + (item.price * item.quantity), 0)
                    : 0;       
                }
            };
        }
    </script>
</x-slot>

</x-front-layout>
