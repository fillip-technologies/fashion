<div class="bg-white">
    <div id="searchOverlay" class="fixed inset-0 z-[1000] bg-white hidden">
        <header class="relative border-b border-black/10 bg-background">
            <div class="mx-auto px-6 sm:px-14 h-24 flex items-center">


                <div class="absolute top-3 left-6 sm:left-14 text-[12px] font-light opacity-70">
                    Location <span class="underline">(India / EN / ₹)</span>
                </div>


                <div class="mx-auto">
                    <div class="w-24 h-24 bg-purple-600 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">LOGO 1</span>
                    </div>
                </div>

                <div class="absolute top-3 right-6 sm:right-14 flex items-center gap-6">
                    <span class="text-[12px] font-light opacity-70">
                        Contact Us
                    </span>
                </div>

                <div class="absolute bottom-3 right-6 sm:right-14 flex items-center gap-6">
                    <button onclick="closeSearch()" class="text-2xl font-light">
                        ×
                    </button>
                </div>

            </div>
        </header>

        <div class="px-6 sm:px-14 pt-10">
            <div class="flex items-center gap-4 text-sm">
                <svg class="w-4 h-4 opacity-60" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" placeholder="" class="flex-1 bg-transparent outline-none text-sm" />
                <button onclick="clearSearch()" class="text-xs opacity-60 hover:opacity-100">
                    Clear
                </button>
            </div>
            <div class="h-px bg-black/30 mt-2"></div>
        </div>

        <div class="mt-16 px-6 sm:px-14">
            <div class="relative w-full h-[100vh] overflow-hidden">


                <img src="{{ asset('assets/images/menu/one.png') }}" alt="Search Visual"
                    class="w-full h-full object-contain" />


                {{-- <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div> --}}


                <div class="absolute top-5 left-1/2 -translate-x-1/2 text-center text-white">
                    <p class="text-[18px] tracking-wide uppercase opacity-80 mb-6">
                        Suggestions
                    </p>
                    <div class="flex gap-12 text-[14px]">
                        <a href="#" class="hover:underline underline-offset-4">FW 2026</a>
                        <a href="#" class="hover:underline underline-offset-4">Pashmina Jackets</a>
                        <a href="#" class="hover:underline underline-offset-4">Belts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openSearch() {
            document.getElementById("searchOverlay").classList.remove("hidden");
        }

        function closeSearch() {
            document.getElementById("searchOverlay").classList.add("hidden");
        }

        function clearSearch() {
            document.querySelector("#searchOverlay input").value = "";
        }
    </script>

</div>
