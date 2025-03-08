<?php

use App\Livewire\Lottery\LotteryLedgerPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LotteryLedgerPage::class)
        ->assertStatus(200);
});
