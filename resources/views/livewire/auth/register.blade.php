<section @click.away="isOpen = false"
    class="w-10/12 p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">

    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Sign Up Today</h2>

    <form wire:submit.prevent="storeUser">

        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">

            <div>

                <x-input.label for="user.username" label="Username">

                    <x-input.text wire:model="user.username" class="w-full"
                                  :errors="$errors->first('user.username')" />

                </x-input.label>

            </div>

            <div>

                <x-input.label for="user.email" label="Email">

                    <x-input.text wire:model="user.email" class="w-full"
                                  :errors="$errors->first('user.email')" />

                </x-input.label>

            </div>

            <div>

                <x-input.label for="password" label="Password">

                    <x-input.text wire:model="password" type="password" class="w-full"
                                  :errors="$errors->first('password')" />

                </x-input.label>

            </div>

        </div>

        <div class="flex justify-end mt-6">

            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>

        </div>

    </form>

</section>
