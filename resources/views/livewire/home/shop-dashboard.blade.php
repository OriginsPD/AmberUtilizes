<div>

    <section class="w-full h-screen px-8 py-16 bg-blue-900 bg-opacity-20 xl:px-8">

        <div class="container mt-4 max-w-6xl mx-auto">

            <h2 class="text-4xl text-white font-bold tracking-tight text-center">Our Featured Products</h2>

            <p class="mt-2 text-lg text-center text-white">Check out our list of awesome features below.</p>

            <div class=" mt-4  sm:px-8 xl:px-0">

                <div class="py-4">

                    <x-modal.form title="Products" :useBtn="false">

                        <x-slot name="modalBtn">

                        </x-slot>

                        <x-table>

                            <x-slot name="header">

                                <x-table.head> Product Name</x-table.head>

                                <x-table.head> Price</x-table.head>

                                <x-table.head class="container"></x-table.head>


                            </x-slot>


                            <x-table.body>

                                @forelse($products as $product)

                                    <x-table.row>

                                        <x-table.data class="w-2/6"> {{ $product->name }} </x-table.data>

                                        <x-table.data class="w-2/6"> $ {{ number_format($product->price,'2') }} </x-table.data>

                                        <x-table.data class="text-right container w-2/6">

                                            @if(!in_array($product->id, $cartProduct,true))

                                                <div class=" space-x-6">

                                                    <input wire:model="qty.{{ $product->id }}"
                                                        type="number" class="form-input w-12 h-10 border">

                                                    <a wire:click.prevent="addToCart({{ $product->id }},{{ $product->price }})"
                                                       class="px-4 py-2 bg-blue-500 text-gray-100 text-md
                                                               rounded focus:border-4 cursor-pointer border-blue-300">

                                                        Add To Cart

                                                    </a>
                                                </div>
                                            @else

                                                <a wire:click.prevent="removeFromCart({{ $product->id }})"
                                                    class="px-4 py-2 bg-red-500 text-gray-100 text-md
                                                               rounded focus:border-4 cursor-pointer border-red-300">

                                                    Remove From Cart

                                                </a>

                                            @endif

                                        </x-table.data>

                                    </x-table.row>

                                @empty

                                    <x-table.row>

                                        <x-table.data colspan="2" class="text-center">

                                            No Products Found

                                        </x-table.data>

                                    </x-table.row>

                                @endforelse

                            </x-table.body>

                        </x-table>

                        <div class="p-3 m-2">

                            {{ $products->links() }}

                        </div>

                    </x-modal.form>


                </div>

            </div>

        </div>

    </section>

</div>
