{{-- <div class="w-full">
    <img src="{{ asset('assets/images/Rectangle325.png') }}" alt="Search" class="object-cover w-full" />
</div> --}}

{{-- <div class="w-full">
    <video class="w-full object-contain" autoplay muted loop playsinline>
        <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div> --}}


<div class="relative w-full md:h-screen overflow-hidden">

    <!-- VIDEO -->
    <video class="w-full h-full object-contain md:object-cover" autoplay muted loop playsinline>
        <source src="{{ asset('assets/videos/hero.mp4') }}" type="video/mp4">
    </video>

    <!-- OVERLAY DIV -->
    <div class="absolute w-full bg-black/30 bottom-0 py-2">
        <!-- Content inside overlay -->
        <div class="text-white flex items-center justify-start pl-5 md:pl-10 space-x-2 md:space-x-5">
            <img src="{{ asset('assets/icons/pause.png') }}" alt="Search" class="object-cover" />

            <img src="{{ asset('assets/icons/sound.png') }}" alt="Search" class="object-cover" />
        </div>
    </div>

</div>
