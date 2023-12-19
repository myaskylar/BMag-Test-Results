<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.app')]  #[Title('User Detail')] class extends Component
{
    public ?User $user = null;
};
?>

<x-slot name="header">
    <x-title>Users Detail</x-title>
</x-slot>

<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-white border-b border-grey-200 shadow-sm sm:rounded-lg">
            <div class="flex">
                <div class="m-2 w-80 h-80 bg-slate-400 border-b">image folder</div>
                <div class="p-6 ">
                    <ul>
                        <li>ID: {{ $user->id }}</li>
                        <li>Name: {{ $user->full_name}}</li>
                        <li>Contact:</li>
                        <li>Email: {{ $user->email}}</li>
                        <li>Location:</li>
                        <li>Role:</li>
                        <li>Report To:</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>