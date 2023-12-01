<?php

use App\Models\Result; 
use Livewire\Attributes\Rule; 
use Livewire\Volt\Component;

new class extends Component 
{
    public Result $result; 
 
    #[Rule('required|string|max:255')]
    public string $message = '';
 
    public function mount(): void
    {
        $this->message = $this->result->message;
    }
 
    public function update(): void
    {
        $this->authorize('update', $this->result);
 
        $validated = $this->validate();
 
        $this->result->update($validated);
 
        $this->dispatch('result-updated');
    }
 
    public function cancel(): void
    {
        $this->dispatch('result-edit-canceled');
    }  
}; ?>

<div>
    <form wire:submit="update"> 
        <textarea
            wire:model="message"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
        <button class="mt-4" wire:click.prevent="cancel">Cancel</button>
    </form> 
</div>
