<?php

use App\Livewire\Twod\TwodBetPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(TwodBetPage::class)
        ->assertStatus(200);
});
