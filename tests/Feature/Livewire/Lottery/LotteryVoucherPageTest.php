<?php

use App\Livewire\Lottery\LotteryVoucherPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LotteryVoucherPage::class)
        ->assertStatus(200);
});
