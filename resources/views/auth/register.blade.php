<x-guest-layout>
    <style>
        .row {
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex-basis: 48%;
        }

        .custom-width {
            width: 400px;
        }


        @media (min-width: 640px) {
            .sm\:max-w-md {
                max-width: 880px;
            }
        }

    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="column">
                <div class="first">
                    <!-- Name -->
                    <div>
                        <x-input-label for="No_kp" :value="__('No_kp')" />
                        <x-text-input id="No_kp" class="block mt-1 custom-width" type="number" name="No_kp" :value="old('No_kp')" required autofocus autocomplete="No_kp" oninput="calculateAge(); updateJantina();" />
                        <x-input-error :messages="$errors->get('No_kp')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 custom-width" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 custom-width" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="Jawatan" :value="__('Jawatan')" />
                        <x-text-input id="Jawatan" class="block mt-1 custom-width" type="text" name="Jawatan" :value="old('Jawatan')" required autofocus autocomplete="Jawatan" />
                        <x-input-error :messages="$errors->get('Jawatan')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="Gaji_pokok" :value="__('Gaji_pokok(RM)')" />
                        <x-text-input id="Gaji_pokok" class="block mt-1 custom-width" type="number" name="Gaji_pokok" :value="old('Gaji_pokok')" required autofocus autocomplete="Gaji_pokok" />
                        <x-input-error :messages="$errors->get('Gaji_pokok')" class="mt-2" />
                    </div>

                </div>
            </div>
            <div class="column">
                <div class="second">
                    <div>
                        <x-input-label for="Akaun_bank" :value="__('Akaun_bank')" />
                        <x-text-input id="Akaun_bank" class="block mt-1 custom-width" type="text" name="Akaun_bank" :value="old('Akaun_bank')" required autofocus autocomplete="Akaun_bank" />
                        <x-input-error :messages="$errors->get('Akaun_bank')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="Nombor_telefon" :value="__('Nombor_telefon')" />
                        <x-text-input id="Nombor_telefon" class="block mt-1 custom-width" type="text" name="Nombor_telefon" :value="old('Nombor_telefon')" required autofocus autocomplete="Nombor_telefon" />
                        <x-input-error :messages="$errors->get('Nombor_telefon')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 custom-width" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 custom-width" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <div style="float:left;margin-right:40px;">

                            <x-input-label for="Jantina" :value="__('Jantina')" />
                            <x-text-input id="Jantina" class="block mt-1 custom-width" type="text" style="width:150px;" name="Jantina" :value="old('Jantina')" required readonly autofocus autocomplete="Jantina" />
                            <x-input-error :messages="$errors->get('Jantina')" class="mt-2" />

                        </div>

                        <x-input-label for="Umur" :value="__('Umur')" />
                        <x-text-input id="Umur" class="block mt-1 custom-width" type="number" style="width:100px;" name="Umur" :value="old('Umur')" required readonly autofocus autocomplete="Umur" />
                        <x-input-error :messages="$errors->get('Umur')" class="mt-2" />

                    </div>


                    <br>




                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- <div class="first">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
    {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
    </div>
    </div>

    <div class="second">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
    </div> --}}
    <script>
        function calculateAge() {
            var noKpInput = document.getElementById('No_kp');
            var umurInput = document.getElementById('Umur');

            // Check if the IC number input has at least 2 characters
            if (noKpInput.value.length >= 2) {
                // Extract the birth year from the IC number (first two digits)
                var birthYear = noKpInput.value.substring(0, 2);

                // Get the current year
                var currentYear = new Date().getFullYear();

                // Determine the prefix based on the comparison with the last two digits of the current year
                var prefix = (birthYear >= 0 && birthYear <= currentYear % 100) ? '20' : '19';

                // Combine the prefix and birth year to get the calculated year
                var calculatedYear = prefix + birthYear;

                // Calculate the age by subtracting the calculated year from the current year
                var age = currentYear - parseInt(calculatedYear);

                // Update the value and placeholder of the age input field
                umurInput.value = age;
                umurInput.placeholder = age;
            } else {
                // If the IC number input is less than 2 characters, clear the age input field
                umurInput.value = '';
                umurInput.placeholder = '';
            }
        }




        function updateJantina() {
            var noKpInput = document.getElementById('No_kp');
            var jantinaInput = document.getElementById('Jantina');

            if (noKpInput.value.length > 0) {
                var lastNumber = parseInt(noKpInput.value.charAt(noKpInput.value.length - 1));
                var jantinaValue = (lastNumber % 2 === 0) ? 'perempuan' : 'lelaki';

                jantinaInput.value = jantinaValue;
                jantinaInput.placeholder = jantinaValue;
            } else {
                jantinaInput.value = '';
                jantinaInput.placeholder = '';

            }
        }

    </script>

</x-guest-layout>
