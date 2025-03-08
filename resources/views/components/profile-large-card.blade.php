<div class="flex flex-col rounded-lg border border-gray-200/80 bg-white p-6">
    <div class="flex flex-col md:flex-row space-x-3">
        <!-- Avaar Container -->
        <div class="flex flex-row justify-center md:justify-start my-3">
            <!-- User Avatar -->
            <img class="w-40 h-40 rounded-md object-cover"
                src="https://ui-avatars.com/api/?background=random&name={{ $model->name }}" alt="User" />

            {{--
            <!-- Online Status Dot -->
            <div class="absolute -right-3 bottom-5 h-5 w-5 sm:top-2 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"
                title="User is online"></div> --}}
        </div>
        <div class="flex flex-col">
            <!-- Username Container -->
            <div class="flex h-8 flex-row">
                <!-- Username -->
                <a href="https://github.com/EgoistDeveloper/" target="_blank">
                    <h2 class="text-lg font-semibold">{{ $model->name }}</h2>
                </a>

                <!-- User Verified -->
                <svg class="my-auto ml-2 h-5 fill-blue-400" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                </svg>
            </div>

            <!-- Meta Badges -->
            <div class="my-2 flex flex-row ">
                <!-- Badge Role -->
                <div class="flex flex-row items-center">
                    <i class="ri-pass-valid-line text-gray-500/80 mr-1"></i>
                    <div class="text-xs text-gray-400/80 hover:text-gray-400">{{ $model->refer_code }}</div>
                </div>

                <!-- Badge Location -->
                <div class="flex flex-row items-center">
                    <i class="ri-phone-line text-gray-500/80 mr-1"></i>
                    <div class="text-xs text-gray-400/80 hover:text-gray-400">{{ $model->phone }}</div>
                </div>

            </div>

            <div class="mt-2 flex flex-col space-x-0 md:flex-row">
                <!-- Comments -->
                <a href="#"
                    class="flex p-4 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <i class="ri-wallet-3-line mr-2"></i>
                        <span class="font-bold text-gray-600">{{ $balance}}</span>
                    </div>
                    <div class="mt-2 text-sm text-gray-400">@lang('base.wallet_name', ['name' => @trans('base.main')])
                    </div>
                </a>

                <!-- Projects -->
                <a href="#"
                    class="flex p-4 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <i class="ri-gamepad-line mr-2"></i>
                        <span class="font-bold text-gray-600">{{ $model->gameWallet->balance ?? 0 }}</span>
                    </div>

                    <div class="mt-2 text-sm text-gray-400">@lang('base.wallet_name', ['name' => @trans('base.game')])
                    </div>
                </a>

                <!-- Projects -->
                <a href="#"
                    class="flex p-4 flex-col items-center justify-center rounded-md border border-dashed border-gray-200 transition-colors duration-100 ease-in-out hover:border-gray-400/80">
                    <div class="flex flex-row items-center justify-center">
                        <i class="ri-gift-line mr-2"></i>
                        <span class="font-bold text-gray-600">{{ $model->promotionWallet->balance ?? 0 }}</span>
                    </div>

                    <div class="mt-2 text-sm text-gray-400">@lang('base.wallet_name', ['name' =>
                        @trans('base.promotion')])
                    </div>
                </a>
            </div>

            <div class="flex flex-row space-x-3 my-3 justify-start">
                <!-- Follow Button -->
                <a wire:navigate href=""
                    class="flex rounded-md bg-blue-500 py-2 px-4 text-white transition-all duration-150 ease-in-out hover:bg-blue-600">
                    <i class="ri-edit-circle-line mr-2"></i>
                    Edit
                </a>

            </div>
        </div>
    </div>
</div>