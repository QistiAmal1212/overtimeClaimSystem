<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
    .arrow-down {
        position: relative;
        margin-top: 20px;
        width: 8px;
        height: 8px;
    }

    .arrow-down::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        width: 8px;
        height: 8px;
        border-bottom: 2px solid black;
        border-right: 2px solid black;



    }


    .arrow-down2 {
        position: relative;
        margin-top: 20px;
        width: 8px;
        height: 8px;

    }

    .arrow-down2::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        width: 8px;
        height: 8px;
        border-bottom: 2px solid black;
        border-right: 2px solid black;
        transform: rotate(225deg);



    }

</style>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="nama" :value="__('nama')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-full" :value="old('nama', $user->nama)" required autocomplete="nama" />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>


        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>
        <center>
            <div class="arrow-down"></div>
        </center>


        <div class="hideform" style="display:none">
            <x-input-label for="no_kp" :value="__('no_kp')" />
            <x-text-input id="no_kp" name="no_kp" type="text" class="mt-1 block w-full" :value="old('no_kp', $user->no_kp)" required autocomplete="no_kp" oninput="calculateAge(); updateJantina();" />
            <x-input-error class="mt-2" :messages="$errors->get('no_kp')" />
        </div>
        <div class="hideform" style="display:none">
            <x-input-label for="jawatan" :value="__('jawatan')" />
            <x-text-input id="jawatan" name="jawatan" type="text" class="mt-1 block w-full" :value="old('jawatan', $user->jawatan)" required autocomplete="jawatan" />
            <x-input-error class="mt-2" :messages="$errors->get('jawatan')" />
        </div>
        <div class="hideform" style="display:none">
            <x-input-label for="gaji_pokok" :value="__('gaji_pokok')" />
            <x-text-input id="gaji_pokok" name="gaji_pokok" type="text" class="mt-1 block w-full" :value="old('gaji_pokok', $user->gaji_Pokok)" required autocomplete="gaji_pokok" />
            <x-input-error class="mt-2" :messages="$errors->get('gaji_pokok')" />
        </div>
        <div class="hideform" style="display:none">
            <x-input-label for="akaun_bank" :value="__('akaun_bank')" />
            <x-text-input id="akaun_bank" name="akaun_bank" type="text" class="mt-1 block w-full" :value="old('akaun_bank', $user->akaun_bank)" required autocomplete="akaun_bank" />
            <x-input-error class="mt-2" :messages="$errors->get('akaun_bank')" />
        </div>
        <div class="hideform" style="display:none">
            <x-input-label for="nombor_telefon" :value="__('nombor_telefon')" />
            <x-text-input id="nombor_telefon" name="nombor_telefon" type="text" class="mt-1 block w-full" :value="old('nombor_telefon', $user->nombor_telefon)" required autocomplete="nombor_telefon" />
            <x-input-error class="mt-2" :messages="$errors->get('nombor_telefon')" />
        </div>
        <div class="hideform" style="display:none">
            <x-input-label for="jantina" :value="__('jantina')" />
            <x-text-input id="jantina" name="jantina" type="text" class="mt-1 block w-full" :value="old('jantina', $user->jantina)" readonly required autocomplete="jantina" />
            <x-input-error class="mt-2" :messages="$errors->get('jantina')" />
        </div>

        <div class="hideform" style="display:none">
            <x-input-label for="umur" :value="__('umur')" />
            <x-text-input id="umur" name="umur" type="text" class="mt-1 block w-full" :value="old('umur', $user->umur)" readonly required autocomplete="umur" />
            <x-input-error class="mt-2" :messages="$errors->get('umur')" />
        </div>

        <center>
            <div class="arrow-down2 hideform" style="display:none"></div>
        </center>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".arrow-down").click(function() {
                $(".arrow-down").fadeOut();
                $(".hideform").fadeIn();
            });



            $(".arrow-down2").click(function() {
                $(".arrow-down").fadeIn();
                $(".hideform").fadeOut();
            });
        });

    </script>








    <script>
        function calculateAge() {
            var noKpInput = document.getElementById('no_kp');
            var umurInput = document.getElementById('umur');

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
            var noKpInput = document.getElementById('no_kp');
            var jantinaInput = document.getElementById('jantina');

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

</section>





{{-- <style>
    .w-400 {
        width: 400px !important;
    }

</style>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
</h2>

<p class="mt-1 text-sm text-gray-600">
    {{ __("Update your account's profile information and email address.") }}
</p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div class="flex flex-wrap gap-4">
        <div>
            <div>
                <x-input-label for="nama" :value="__('nama')" />
                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
            </div>

            <div>
                <x-input-label for="nama" :value="__('nama')" />
                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
            </div>
        </div>

        <div>
            <div>
                <x-input-label for="nama" :value="__('nama')" />
                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
            </div>

            <div>
                <x-input-label for="nama" :value="__('nama')" />
                <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
                <x-input-error class="mt-2" :messages="$errors->get('nama')" />
            </div>
        </div>
    </div>

    <div class="flex flex-wrap gap-4">
        <div>
            <x-input-label for="nama" :value="__('nama')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        <div>
            <x-input-label for="nama" :value="__('nama')" />
            <x-text-input id="nama" name="nama" type="text" class="mt-1 block w-400" :value="old('nama', $user->nama)" required autofocus autocomplete="nama" />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-400 " :value="old('email', $user->email)" required autocomplete="username" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div>
            <p class="text-sm mt-2 text-gray-800">
                {{ __('Your email address is unverified.') }}

                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </p>

            @if (session('status') === 'verification-link-sent')
            <p class="mt-2 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to your email address.') }}
            </p>
            @endif
        </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
    </div>
</form>
</section> --}}
