@props([
    'title' => false,
    'useBtn' => false
])

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">

        <div class="flex flex-wrap items-center">

            <div class="text-2xl pb-4 "> {{ $title }} </div>

            @if ($useBtn)

                {{ $modalBtn }}

            @endif

        </div>

    </h2>

    <form {{ $attributes }}>

        {{ $slot }}

    </form>

</section>
