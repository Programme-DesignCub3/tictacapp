<div x-data="{ is_show_password: false }" class="flex flex-col gap-4">
    <x-form.input wire:key='name' model='name' :label="__('Name')" />
    <x-form.input wire:key='email' model='email' :label="__('Email')" type='email' />
    <x-form.input wire:key='password' model='password' :label="__('Password')" x-bind:type="is_show_password ? 'text' : 'password'" />
    <x-form.input wire:key='password_confirmation' model='password_confirmation' :label="__('Confirm Password')" x-bind:type="is_show_password ? 'text' : 'password'" />

    <div class="flex items-center gap-2">
        <input id="show-password" type="checkbox" class="border border-tictac-primary-blue rounded-3xl w-5 h-5" x-model="is_show_password">
        <label for="show-password" class="font-winky-sans text-tictac-primary-blue text-base">{{ __('Show Password') }}</label>
    </div>
</div>

