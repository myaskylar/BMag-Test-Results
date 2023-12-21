<?php

use App\Livewire\Pages\Page;
use Livewire\Volt\Component;

new class extends Component
{
    public $links;
    public $title;

    public function mount(Page $page): void
    {
        $this->links = $page::$pageSideBarLinks;
        $this->title = $page::$pageTitle;
    }
};
?>

<div class="min-h-screen max-w-7xl border-r-2 hidden sm:flex justify-center">
    <ul class="mt-6 w-full text-center">
        <li class="border p-6 bg-lime-100 hover:bg-lime-900 hover:text-white">{{ $title }}</li>

        @foreach ($links as $key => $value)
        <li class="border p-6 bg-lime-100 hover:bg-lime-900 hover:text-white">
            <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route($value) }}" wire:navigate>
                {{ $key }}
            </a>
        </li>
        @endforeach


    </ul>
</div>