<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 md:gap-0 mb-10 md:mb-0">
    <img src="{{ asset('assets/images/landing/one.png') }}" alt="Search" class="object-cover w-full" />
    <div class="flex flex-col items-center justify-center">
        <div> <img src="{{ asset('assets/images/landing/two.png') }}" alt="Search" class="object-cover w-full h-4/5" />
        </div>
        <div class="flex flex-col items-center text-center px-6 mt-4">
            <div class="text-[16px] font-semibold mb-2 uppercase"> The Skills </div> <span
                class="h-[1px] w-32 mb-7 bg-black" style="font-weight: 300"></span>
            <div class="max-w-md text-[12px] font-light leading-relaxed"> Crystalline structures that provide silk its
                characteristic luster, strength, and resilience, with minor components including waxes, minerals, and
                pigments. </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 items-center  gap-10 md:gap-0 mb-10 md:mb-0">
    <img src="{{ asset('assets/images/landing/four.png') }}" alt="Search"
        class="order-1 md:order-2 object-cover w-full" />
    <div class="flex flex-col items-center justify-center order-2 md:order-1">
        <div> <img src="{{ asset('assets/images/landing/three.png') }}" alt="Search"
                class="object-cover w-full h-4/5" />
        </div>
        <div class="flex flex-col items-center text-center px-6 mt-4">
            <div class="text-[16px] font-semibold mb-2 uppercase"> Wool Stitch </div> <span
                class="h-[1px] w-32 mb-7 bg-black" style="font-weight: 300"></span>
            <div class="max-w-md text-[12px] font-light leading-relaxed"> Creating a soft, matte, 3D look, often
                combined
                with thinner cotton threads for detail, perfect for cozy home decor, nature scenes, or whimsical
                designs. </div>
        </div>
    </div>
</div>



<div class="flex flex-col items-center justify-center bg-background py-20">
    <div> <img src="{{ asset('assets/images/landing/five.png') }}" alt="Search" class="object-cover w-full h-4/5" />
    </div>
    <div class="flex flex-col items-center text-center px-6 mt-4">
        <div class="text-[16px] font-semibold mb-2 uppercase"> LINING </div>
        <span class="h-[1px] w-32 mb-7 bg-secondary" style="font-weight: 300"></span>
        <div class="max-w-md text-[12px] font-light leading-relaxed"> reating a soft, matte, 3D look, often combined
            with thinner cotton threads for detail, perfect for cozy home decor, nature scenes, or whimsical
            designs. </div>
    </div>
</div>



{{-- 
<section class="relative w-full h-[80vh] bg-secondary overflow-hidden">

    <!-- CENTER BACKGROUND IMAGE -->
    <img src="{{ asset('assets/images/landing/seven.png') }}" alt="Center"
        class="absolute inset-0 m-auto max-h-[80vh] w-auto object-contain z-0" />

    <!-- GRID OVER IMAGE -->
    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 h-full">

        <!-- LEFT: TEXT -->
        <div class="flex items-center justify-center h-full w-full ml-10 order-2 md:order-1">
            <div
                class="flex flex-col items-center justify-center
               h-full w-full
               text-center px-6 text-[15px]
               text-white font-light bg-primary/40 p-6">
                <p class="mb-4">
                    The <span class="text-[32px]" style="font-weight: 800">Journey</span> to find the best.
                </p>

                <p class="max-w-md">
                    The passage from a starting point to an end point involved many
                    events, a lot of time, or a considerable amount of effort,
                    leading to personal growth, change, or a significant
                    accomplishment.
                </p>
            </div>
        </div>

        <!-- RIGHT: IMAGE (FOREGROUND) -->
        <div class="flex items-center justify-center order-1 md:order-2">
            <img src="{{ asset('assets/images/landing/nine.png') }}" alt="Search"
                class="max-h-[80vh] w-auto object-contain" />
        </div>

    </div>
</section> --}}


<section class="relative w-full h-[60vh] md:h-[80vh] bg-secondary overflow-hidden">
    <img src="{{ asset('assets/images/landing/six.png') }}" alt="Center"
        class="absolute inset-0 m-auto max-h-full w-auto object-contain z-0" />

    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 h-full">
        <div
            class="flex items-center justify-center h-full w-full
                    order-2 md:order-1
                    ml-0 md:ml-10">

            <div
                class="flex flex-col items-center justify-center
                        h-full w-full
                        text-center px-4 py-6 md:px-6 md:py-10
                        text-[14px] md:text-[15px]
                        text-white font-light bg-primary/40">
                <p class="mb-4">
                    The <span class="text-[24px] md:text-[32px] font-extrabold">Journey</span>
                    to find the best.
                </p>
                <p class="max-w-md">
                    The passage from a starting point to an end point involved many
                    events, a lot of time, or a considerable amount of effort,
                    leading to personal growth, change, or a significant
                    accomplishment.
                </p>
            </div>
        </div>
        <div class="flex items-center justify-center order-1 md:order-2">
            <img src="{{ asset('assets/images/landing/seven.png') }}" alt="Search"
                class="max-h-[35vh] md:max-h-[80vh] w-auto object-contain" />
        </div>

    </div>
</section>


<div class="flex items-center justify-center h-auto  md:h-[80vh] py-12 bg-white overflow-hidden px-6 md:px-12">
    <img src="{{ asset('assets/images/landing/eight.png') }}" alt="Search" class="object-contain md:object-cover w-full h-[90%]" />
</div>
