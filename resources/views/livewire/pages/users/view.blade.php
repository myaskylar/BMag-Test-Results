<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
};
?>

<div>
    <!-- @if (auth()->user()->role === 'admin') -->
    <h1>User ID: is here</h1>
    <!-- @endif -->
</div>