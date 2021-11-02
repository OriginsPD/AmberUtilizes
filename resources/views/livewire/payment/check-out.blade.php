<div class="w-3/6 ">

    <div class="bg-white rounded space-y-6 mt-4 shadow-lg py-6">

        <h2 class="text-lg pl-4 font-medium ">Order Summary</h2>

        <div class="px-8 px-8 mt-4 border-t pt-4">


            <span class="text-xs text-gray-500 mt-2">Save 20% with annual billing</span>

        </div>

        <div class="px-8 space-y-4 mt-4 overflow-y-scroll">

            @forelse($cartItems as $cartItem)

                <div class="flex items-end justify-between">

                    <span class="text-sm font-semibold">{{ $cartItem->qty }} x -{{ $cartItem->Product->name }} </span>

                    <span class="text-sm text-gray-500 mb-px">$ {{ number_format($cartItem->Product->price,'2') }}</span>

                </div>

            @empty

                <div class="flex items-end justify-center">

                    <span class="text-sm font-semibold">No Item Added</span>

                </div>

            @endforelse

        </div>

        <div class="px-8 mt-4 border-t pt-4">

            <div class="flex items-end justify-between">

                <span class="font-semibold">Today you pay </span>

                <span class="font-semibold">Grand Total: $ {{ $cartSum }}</span>

            </div>

        </div>


        <div class="flex flex-col px-8 pt-4">

            <button
                class="flex items-center justify-center bg-blue-600 text-sm font-medium w-full h-10 rounded text-blue-50 hover:bg-blue-700">
                PAY NOW
            </button>


        </div>

    </div>

</div>
