<div class="flex flex-col flex-1 w-0 overflow-hidden">

    <main x-data="{ isOpen: false }"
          x-on:open-modal.window="isOpen = true"
          x-on:close-modal.window="isOpen = false"
          class="relative flex-1 overflow-y-auto focus:outline-none">

        <x-alert.success :message="session('success')" />


        <div class="py-6">

            <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">

                <h1 class="text-lg text-neutral-600"> Main Dashboard </h1>

            </div>

            <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">

                <div class="py-4">

                    <x-modal.form title="Products" :useBtn="true">

                        <x-slot name="modalBtn">

                            <x-modal.button wire:click.prevent="addProducts"> Add </x-modal.button>

                        </x-slot>

                        <x-table>

                            <x-slot name="header">

                                <x-table.head> Name </x-table.head>

                                <x-table.head> Quantity </x-table.head>

                                <x-table.head> Price </x-table.head>


                            </x-slot>

                            <x-table.body>

                                @forelse($products as $product)

                                    <x-table.row>

                                        <x-table.data> {{ $product->name }} </x-table.data>

                                        <x-table.data> {{ $product->quantity }} </x-table.data>

                                        <x-table.data> $ {{ number_format($product->price,'2') }} </x-table.data>

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

                <!-- Do not cross the closing tag underneath this coment-->

            </div>

        </div>

        <div x-show="isOpen"
             @keydown.esc.window="isOpen = false"
             x-transition.duration.300ms
             class="fixed flex items-center z-50 justify-center bg-black bg-opacity-75 h-screen w-screen top-0 bottom-0 left-0 ">

            <x-modal.form wire:submit.prevent="storeProduct"
                          @click.away.window="isOpen = false"
                          :form="true"
                          title="New Product">

                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

                    <div class="grid grid-cols-1 space-x-2">

                        <x-input.label for="product.name" label="Product Name">

                            <x-input.text wire:model="product.name" :errors="$errors->first('product.name')"/>

                        </x-input.label>

                    </div>

                    <div class="grid grid-cols-1 space-x-2">

                        <x-input.label for="product.quantity" label="Quantity">

                            <x-input.text wire:model="product.quantity" type="number" :errors="$errors->first('product.quantity')"/>

                        </x-input.label>

                    </div>

                    <div class="grid grid-cols-1 space-x-2">

                        <x-input.label for="product.price" label="Price">

                            <x-input.text wire:model="product.price" type="number" :errors="$errors->first('product.price')"/>

                        </x-input.label>

                    </div>


                </div>

                <div class="grid grid-cols-1">

                    <x-input.submit>

                        Create

                    </x-input.submit>


                </div>

            </x-modal.form>

        </div>

    </main>

</div>
