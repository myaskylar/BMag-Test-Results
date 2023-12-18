<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate([
            'form.login' => 'required|string',
            'form.password' => 'required'
        ]);

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(session('url.intended', RouteServiceProvider::HOME), navigate: true);
    }
}; 
?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <div class="mt-1">
            <h1 class="font-bold ">Sign In</h1>
            <p class="text-sm">BoilerMag Test Strip Results App</p>
        </div>

        <!-- Email or Username -->
        <div class="mt-4">
            <x-text-input wire:model="form.login" id="login" placeholder="Email or Username" class="block mt-1 w-full"
                type="text" name="login" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" placeholder="Password"
                type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 flex justify-between">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-blue-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="items-center mt-4">
            <x-primary-button class="mt-3 w-full rounded-full bg-blue-600 px-4 py-2 font-bold text-white hover:bg-blue-400" wire:loading.attr="disabled">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- <div class="flex items-center mt-4">
            <div class="flex-grow bg bg-gray-300 h-0.5"></div>
            <div class="flex-grow-0 mx-5 text dark:text-white">or</div>
            <div class="flex-grow bg bg-gray-300 h-0.5"></div>
         </div>

         <div class="items-center mt-1">
            <x-primary-button class="mt-3 w-full border-2 border-black rounded-full bg-white px-4 py-2 font-bold text-black hover:bg-blue-400">
                {{ 'Google sign in' }}
            </x-primary-button>

            <x-primary-button class="mt-3 w-full border-2 border-black rounded-full bg-white px-4 py-2 font-bold text-black hover:bg-blue-400">
                {{ 'Microsoft sign in' }}
            </x-primary-button>
        </div> -->

        <!-- <div class="flex justify-center item-center mt-4">
            <p class="text-sm">Not register yet? </p>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ms-4 font-semibold text-sm text-blue-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                @endif
        </div> -->
    </form>
</div>
