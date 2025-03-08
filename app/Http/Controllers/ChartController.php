<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMainWallet;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function totalUsers()
    {
        $totalUsers = User::count();
        $paidUsers = 0;//UserMainWallet::where('balance', '>', 0)->whereHas('topups')->count();
        $promoUsers = 0;// User::whereIn('id', PromotionTopUps::pluck('user_id')->toArray())->count();
        $freeUsers = $totalUsers - ($paidUsers + $promoUsers);

        return response()->json([
            'total' => $totalUsers,
            'paid' => $paidUsers,
            'promo' => $promoUsers,
            'free' => $freeUsers,
        ]);
    }
}