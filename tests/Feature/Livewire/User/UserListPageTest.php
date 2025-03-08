<?php

use App\Livewire\User\UserListPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(UserListPage::class)
        ->assertStatus(200);
});
