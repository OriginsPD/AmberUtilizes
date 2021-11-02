<header class=" absolute top-0 w-full">
    <div x-data="{ isOpen: false }"
         x-on:open-modal.window="isOpen = true"
         class="p-4 mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between space-x-4 lg:space-x-10">
            <div class="flex lg:w-0 lg:flex-1">

                <h1>

            <span class="ml-2 font-extrabold italic text-white text-4xl">

                <span class="uppercase tracking-tighter text-4xl text-white">

                    Shop</span>AMBER

            </span>

                </h1>

            </div>


            <div
                class="items-center justify-end flex-1 hidden space-x-4 sm:flex">

                <a wire:click.prevent="addUser"
                   class="px-5 py-2 text-sm font-medium text-white hover:underline rounded-lg"
                   href="#">

                    Sign up

                </a>

                <a wire:click.prevent="allowUser"
                   class="px-5 py-2 text-sm font-medium text-white hover:underline rounded-lg"
                   href="#">

                    Login

                </a>

            </div>


        </div>

        <div x-show="isOpen"
             @keydown.esc.window="isOpen = false"
             x-transition.duration.300ms
             class="fixed flex items-center z-50 justify-center bg-black bg-opacity-60 h-screen w-screen top-0 bottom-0 left-0 ">

            @if ($isRegister)

                @livewire('auth.register')

            @else

                @livewire('auth.login')

            @endif

        </div>

    </div>

</header>
