<div class="bg-background sticky top-0 z-50">

    <!-- HEADER -->
    <header class="w-full border-b border-gray-200">
        <div class="mx-auto px-14">
            <div class="flex items-center justify-between py-3">
                <div class="text-[12px]" style="font-weight: 200">
                    Location <span class="underline">(India / EN / ₹)</span>
                </div>
                <div class="text-[12px]" style="font-weight: 200">
                    Contact Us
                </div>
            </div>
            <div class="flex items-center justify-between h-20 pb-4">

                <!-- LEFT SECTION -->
                <div class="flex items-center gap-20">
                    <!-- Menu -->
                    <div class="flex items-center gap-2 cursor-pointer">
                        <img src="{{ asset('assets/icons/hamburger.png') }}" alt="Menu" class="w-[36px] h-[21px]" />
                        <span class="hidden sm:block text-[13px]" style="font-weight: 300">Menu</span>
                    </div>

                    <!-- Search -->
                    <div class="flex items-center gap-3 cursor-pointer">
                        <!-- Search Icon -->
                        <img src="{{ asset('assets/icons/search.png') }}" alt="Search" class="w-[15px] h-[15px]" />

                        <!-- Text + underline -->
                        <div class="flex flex-col">
                            <span class="text-[13px] text-black leading-none px-2" style="font-weight: 300">
                                Search
                            </span>
                            <span class="h-[0.5px] w-36 bg-black mt-1" style="font-weight: 300"></span>
                        </div>
                    </div>

                </div>

                <!-- CENTER LOGO -->
                <div class="absolute left-1/2 -translate-x-1/2">
                    <div class="w-24 h-16 sm:w-28 sm:h-20 bg-purple-600 flex items-center justify-center">
                        <span class="text-white font-semibold text-sm sm:text-base">
                            LOGO 1
                        </span>
                    </div>
                </div>

                <!-- RIGHT SECTION -->
                <div class="flex items-center gap-4">

                    <img src="{{ asset('assets/icons/user.png') }}" alt="Menu" class="w-[20px] h-[22px]" />

                    <img src="{{ asset('assets/icons/cart.png') }}" alt="Menu" class="w-[25px] h-[22px]" />
                </div>

            </div>
        </div>
    </header>
</div>
