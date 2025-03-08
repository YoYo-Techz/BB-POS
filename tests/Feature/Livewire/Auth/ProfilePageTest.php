<?php

use App\Livewire\Auth\ProfilePage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ProfilePage::class)
        ->assertStatus(200);
});
