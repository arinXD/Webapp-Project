<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script>
        window.onload = function(){
            const title = document.querySelector("#title").innerHTML;
            const subtitle = document.querySelector("#subtitle").innerHTML;
            document.title = title + " " + subtitle;
        }
    </script>
</head>

<body>
    <div class="register-container">
        <div class="text-center pt-3">
            <h1 class="mb-3" id="title">KKC HOSPITAL</h1>
            <h2 id="subtitle">Registation</h2>
        </div>
        <x-guest-layout>
            <x-jet-authentication-card>

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label for="username" value="{{ __('Username') }}" />
                        <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="prefix" value="{{ __('Prefix') }}" />
                        <select id="prefix" class="block mt-1 w-full border-gray-300 shadow-sm rounded-md text-gray-700" name="prefix" required>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="firstname" value="{{ __('Firstname') }}" />
                        <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="lastname" value="{{ __('Lastname') }}" />
                        <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="gender" value="{{ __('Gender') }}" />
                        <select id="gender" class="block mt-1 w-full border-gray-300 shadow-sm rounded-md text-gray-700" name="gender" required>
                            <option value="หญิง">หญิง</option>
                            <option value="ชาย">ชาย</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="birthday" value="{{ __('Birthday') }}" />
                        <x-jet-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="age" value="{{ __('Age') }}" />
                        <x-jet-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="card_id" value="{{ __('Card ID') }}" />
                        <x-jet-input id="card_id" class="block mt-1 w-full" type="text" name="card_id" :value="old('card_id')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="bloodtype" value="{{ __('Bloodtype') }}" />
                        <x-jet-input id="bloodtype" class="block mt-1 w-full" type="text" name="bloodtype" :value="old('bloodtype')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif

                    <div class="flex items-center justify-center mt-4">
                        <x-jet-button class="">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                    <div class="flex items-center justify-center mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-guest-layout>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>