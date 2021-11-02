<header class=" absolute top-0 w-full">
    <div x-data="{ isOpen: false, modalOpen: false }"
         x-on:open-modal.window="modalOpen = true"
         class="p-4 mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between space-x-4 lg:space-x-10">
            <div class="flex lg:w-0 lg:flex-1">

                <h1>

            <a href="{{ route('index') }}" class="ml-2 font-extrabold italic text-white text-4xl">

                <span class="uppercase tracking-tighter text-4xl text-white">

                    Shop</span>AMBER

            </a>

                </h1>

            </div>


            <div
                class="items-center justify-end flex-1 hidden space-x-4 sm:flex">

                <a class="px-5 py-2 text-sm font-medium text-white hover:underline rounded-lg"
                   href="{{ route('product.list') }}">

                    Products Listing

                </a>

                <a wire:click.prevent="showCheckOut"
                   class="px-5 py-2 text-sm font-medium text-white  rounded-lg"
                   href="#">

                    <i class="far fa-shopping-cart text-lg"></i> <span class="text-lg">( {{ $cartCount }} )</span>

                </a>

                <div>

                    <button @click="isOpen=!isOpen"
                        class="relative z-10 flex items-center p-2 text-sm text-white bg-transparent border border-transparent
                                   rounded-md ">

                        <span class="mx-1">{{ auth()->user()->username }}</span>

                        <svg :class="isOpen ? 'transform transition duration-500 rotate-180' : 'transform transition duration-500 rotate-0'"
                            class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>

                        </svg>

                    </button>

                    <div x-show="isOpen"
                         x-transition.duration.300ms.origin.top
                         @click.away="isOpen = false"
                         class="absolute bg-white z-50">

                        <a href="#"
                          class="flex items-center p-3 text-sm text-black capitalize transition-colors duration-200 transform ">
                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"
                                    fill="currentColor"></path>
                            </svg>

                            <span class="mx-1"> Profile </span>
                        </a>

                        <a wire:click.prevent="logout" href="#"
                           class="flex items-center p-3 text-sm text-black capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            <i class="far fa-sign-out-alt"></i>

                            <span class="mx-1"> Logout </span>
                        </a>

                    </div>

                </div>

                <div x-show="modalOpen"
                     @keydown.esc.window="modalOpen = false"
                     x-transition.duration.300ms
                     class="fixed flex items-center z-50 justify-center bg-black bg-opacity-60 h-screen w-screen top-0 bottom-0 left-0 ">

                    @livewire('payment.check-out')

                </div>

            </div>


        </div>

    </div>

</header>
