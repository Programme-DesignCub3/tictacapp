<div>
    <h2 class="text-center text-xl">Register</h2>
    <form class="flex flex-col gap-2" wire:submit='handleRegister'>
        <x-form.input model='name' label="Nama" />
        <x-form.input model='email' label="Email" type='email' />
        <x-form.input model='password' label="Password" type='password' />
        <x-form.input model='password_confirmation' label="confirm password" type='password' />
    </form>
</div>
