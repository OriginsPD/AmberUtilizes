<div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

    <button {{ $attributes->merge([
                'class' => 'bg-green-500 shadow text-white active:bg-green-600 text-xs font-bold
                                    uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear
                                    transition-all duration-150']) }} >

        {{ $slot }}

    </button>

</div>
