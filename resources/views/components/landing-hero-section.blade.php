{{-- Content 1 --}}
<div class="flex-col">
    <h1 class="text-[#87CEEB] font-extrabold text-[43.2px]"> 
        Dimensional <br> Attendance <br> Solutions
    </h1>
    <p class="ml-1 mt-[26.1px] text-[16.2px] text-[#91959C] font-light">
        A web-based attendance solution for modern <br>
        workplaces. Track, manage, and report attendance <br>
        seamlessly from any device with internet access.
    </p>
    <div class="flex items-center gap-3">
        <a href="#about">
            <button class="mt-[38.7px] w-[196.2px] h-8.75 bg-[#87CEEB] shadow-sm hover:shadow-md cursor-pointer rounded-lg text-white px-2.5">
                Learn More
            </button>
        </a>
        <!-- Get Started Button -->
        <a href="{{ route('auth.sign-up') }}" target="_self">
            <button class="mt-[38.7px] w-49.75 h-8.75 border border-[#87CEEB] hover:shadow-md cursor-pointer rounded-lg px-[10px] flex items-center justify-center bg-gradient-to-br from-[#87CEEB]/10 to-[#6BB6D6]/5 border border-[#87CEEB]/20 text-[#87CEEB]">
                Get Started <i data-lucide="chevrons-right" style="stroke-width: 1.5;"></i>
            </button>
        </a>
    </div>
</div>
{{-- Content 2 --}}
<img class="rounded-xl shadow-lg" src="{{ asset('images/landing1.png') }}" alt="Hero Section Image">