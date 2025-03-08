<?php

namespace App\Providers;

use App\Models\TicketResult;
use Illuminate\Support\ServiceProvider;
use App\Models\Agent;
use App\Models\Master;
use App\Models\TicketLedger;
use App\Models\TicketRResult;
use App\Models\User;
use App\Observers\AgentObserver;
use App\Observers\MasterObserver;
use App\Observers\TicketLedgerObserver;
use App\Observers\TicketResultObserver;
use App\Observers\TicketRResultObserver;
use App\Observers\UserObserver;
use App\Models\TwoDLedger;
use App\Models\Result;
use App\Models\Section;
use App\Models\ThreeDLedger;
use App\Models\ThreeDResult;
use App\Observers\LedgerObserver;
use App\Observers\ResultObserver;
use App\Observers\SectionObserver;
use App\Observers\ThreeDLedgerObserver;
use App\Observers\ThreeDResultObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Agent::observe(new AgentObserver);

    }
}