{{-- Header for landing page --}}
{{-- Container --}}
<div class="flex items-center justify-between w-full mx-[116.1px]">
    {{-- Content 1 --}}
    <div class="flex items-center justify-between gap-[44.1px]">
        {{-- Icon --}}
        <a href="/">
            <div class="flex items-center justify-between gap-[13.5px] cursor-pointer">
                <img class="h-[31.5px]" src="{{ asset('images/here-up.png') }}" alt="Icon">
                <h1 class="text-[20.7px] font-extrabold text-[#87CEEB]">HERE UP</h1>
            </div>
        </a>
        {{-- Navigation --}}
        <nav class="flex items-center justify-between gap-5 text-[14.4px]">
            {{-- Hero -> Features --}}
            <a class="text-[#91959C] hover:text-[#87CEEB] transition-colors" href="#features">Features</a>
            {{-- Hero -> About --}}
            <a class="text-[#91959C] hover:text-[#87CEEB] transition-colors" href="#about">About</a>
            <!-- Hero -> Contact -->
            <a class="text-[#91959C] hover:text-[#87CEEB] transition-colors" href="#contact">Contact</a>
        </nav>
    </div>
    {{-- Content 2 --}}
    <div class="flex items-center justify-between gap-2.25">
        {{-- Landing Page -> Sign In Page --}}
        <a href="{{ route('auth.sign-in') }}">
            <button class='bg-white border border-[#DEDFE3] text-sm py-[6.75px] px-[13.5px] rounded-lg hover:shadow-sm cursor-pointer'>
            SIGN IN
            </button>
        </a>
        {{-- Landing Page -> Sign Up Page --}}
        <a href="{{ route('auth.sign-up') }}" target="_self">
            <button  class='bg-[#87CEEB] text-white text-sm py-[6.75px] px-[13.5px] rounded-lg hover:shadow-sm cursor-pointer'>
            SIGN UP NOW
            </button>
        </a>
    </div>
</div>