<div>
    <h2 class="text-center text-xl">Login</h2>
    <form class="flex flex-col gap-2" wire:submit='handleLogin'>
        <x-form.input model='email' label="Email" type='email' />
        <x-form.input model='password' label="Password" type='password' />
    </form>
</div>
