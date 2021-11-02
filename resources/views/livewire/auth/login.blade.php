<section @click.away="isOpen = false"
         class="w-10/12 p-6 mx-auto bg-transparent rounded-md shadow-md dark:bg-gray-800">

    <form wire:submit.prevent="userSubmit">

        <div
            class="relative z-10 h-auto p-8 py-10 overflow-hidden w-9/12 mx-auto bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">

            <h3 class="mb-6 text-2xl space-y-4 font-medium text-center">Sign in to your Account</h3>

            <div class="my-4">

                <x-input.label for="user.email" label="Email">

                    <x-input.text wire:model="user.email" class="w-full"
                                  :errors="$errors->first('user.email')"/>

                </x-input.label>

            </div>

            <div class="my-4">

                <x-input.label for="password" label="Password">

                    <x-input.text wire:model="password"
                                  type="password" class="w-full"
                                  :errors="$errors->first('password')"/>

                </x-input.label>

            </div>

            <div class="block">

                <button class="w-full px-3 py-4 font-medium
                        text-white bg-blue-600 rounded-lg">

                    Login

                </button>

            </div>



        </div>

    </form>

</section>

