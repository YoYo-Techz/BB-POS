<?php

use App\Livewire\Lottery\LotteryBetPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LotteryBetPage::class)
        ->assertStatus(200);
});
