<?php

use App\Livewire\User\UserDetailPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(UserDetailPage::class)
        ->assertStatus(200);
});
