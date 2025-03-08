<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Auth\LoginPage::class);
Route::get('/locale/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'vi', 'my'])) {
        abort(400);
    }
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return back();
})->name('set-locale');

Route::get('login', \App\Livewire\Auth\LoginPage::class)->name('login');

Route::middleware('auth')->group(function () {

    Route::get('logout', function (Illuminate\Http\Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');

    Route::get('profile', \App\Livewire\Auth\ProfilePage::class)->name('profile');
    Route::get('dashboard', \App\Livewire\Dashboard\DashboardPage::class)->name('dashboard');


    // transition
    // Route::prefix('transition')->name('transition.')->group(function () {
    //     Route::get('topup-history', \App\Livewire\Transition\TopUpHistoryPage::class)->name('topup-history');
    //     Route::get('withdraw-history', \App\Livewire\Transition\WithdrawHistoryPage::class)->name('withdraw-history');
    //     Route::get('topup-agent/{agent_id}', \App\Livewire\Transition\TopupAgent::class)->name('topup-agent');
    //     Route::get('withdraw-agent/{agent_id}', \App\Livewire\Transition\WithdrawAgent::class)->name('withdraw-agent');
    // });

    Route::prefix('menu')->name('menu.')->group(function () {
    Route::get('menu-type', \App\Livewire\Menu\MenuTypes::class)->name('menu-type');
    Route::get('allergies', \App\Livewire\Menu\Allergies::class)->name('allergies');
    Route::get('category', \App\Livewire\Menu\Category::class)->name('category');
    Route::get('fmenu', \App\Livewire\Menu\FMenu::class)->name('fmenu');
});


    Route::prefix('chart')->namespace('App\Http\Controllers')->group(function () {
        Route::get('total-users', 'ChartController@totalUsers')->name('chart.total-users');
    });
});