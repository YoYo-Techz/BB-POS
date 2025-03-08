<?php

use App\Livewire\Lottery\LotteryVoucherDetailPage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(LotteryVoucherDetailPage::class)
        ->assertStatus(200);
});
