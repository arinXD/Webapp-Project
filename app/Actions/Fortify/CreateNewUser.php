<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'prefix' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'age' => ['required', 'integer', 'max:255'],
            'card_id' => ['required', 'string', 'max:255'],
            'bloodtype' => ['required', 'string', 'max:255'],
            // 'profile_photo_path' => ['required', 'strinig', 'max:2048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate()
        ;

        return User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'prefix' => $input['prefix'],
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'gender' => $input['gender'],
            'birthday' => $input['birthday'],
            'age' => $input['age'],
            'card_id' => $input['card_id'],
            'bloodtype' => $input['bloodtype'],
            // 'profile_photo_path' => $input['profile_photo_path'],
        ]);
    }
}
