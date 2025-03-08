<?php

use App\Livewire\Lottery\LotteryLedgerDetailPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LotteryLedgerDetailPage::class)
        ->assertStatus(200);
});
