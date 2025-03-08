<?php

namespace App\Livewire\Dashboard;

use App\Models\CashOut;
use App\Models\PromotionTopUps;
use App\Models\TopUp;
use App\Models\User;
use App\Models\UserMainWallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        $auth = Auth::user();
        $today = Carbon::today();

        // $todayusersId = User::whereDate('created_at', $today)
        //     ->pluck('id')
        //     ->toArray();
        // $todayUsers = count($todayusersId);

        // $currentMonth = Carbon::now()->month;
        // $currentYear = Carbon::now()->year;

        // $monthusersId = User::whereMonth('created_at', $currentMonth)
        //     ->whereYear('created_at', $currentYear)
        //     ->pluck('id')
        //     ->toArray();

        // $monthUsers = count($monthusersId);

        // $usersId = User::pluck('id')->toArray();
        // $totalUsers = count($usersId); //User::where('agent_id', $auth->id)->count();
        // $paidUsers = UserMainWallet::where('balance', '>', 0)->whereHas('topups')->count();
        // $promoUsers = User::whereIn('id', PromotionTopUps::pluck('user_id')->toArray())->count();
        // $freeUsers = $totalUsers - ($paidUsers + $promoUsers);

        // $user = [
        //     'today' => $todayUsers,
        //     'thisMonth' => $monthUsers,
        //     'total' => $totalUsers,
        //     'paid' => $paidUsers,
        //     'promo' => $promoUsers,
        //     'free' => $freeUsers,
        // ];

        // $totalTopUp = TopUp::sum('amount');
        // $successTopUp = TopUp::where('success', '=', 1)->sum('amount');
        // $failTopUp = TopUp::where('success', '=', 2)->sum('amount');
        // $onGoingTopUp = TopUp::where('success', '=', 0)->sum('amount');

        // $topUp = [
        //     'total' => $totalTopUp,
        //     'success' => $successTopUp,
        //     'fail' => $failTopUp,
        //     'on_going' => $onGoingTopUp,
        // ];

        // $totalCashout = CashOut::sum('amount');
        // $successCashout = CashOut::where('success', '=', 1)->sum('amount');
        // $failCashout = CashOut::where('success', '=', 2)->sum('amount');
        // $onGoingCashout = CashOut::where('success', '=', 0)->sum('amount');

        // $withdrawal = [
        //     'total' => $totalCashout,
        //     'success' => $successCashout,
        //     'fail' => $failCashout,
        //     'on_going' => $onGoingCashout,
        // ];

        return view('livewire.dashboard.dashboard-page');
        // return view('livewire.dashboard.dashboard-page', compact('user', 'topUp', 'withdrawal'));
    }
}