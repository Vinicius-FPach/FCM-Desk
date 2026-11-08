<header class="h-14 border-b border-gray-700 bg-[#0B0F0D] flex items-center justify-between px-4 lg:px-6">
   <div class="flex items-center gap-3 min-w-0">
        <button
            type="button"
            onclick="openSidebar()"
            class="lg:hidden text-gray-400 hover:text-white
                   transition-colors"
            aria-label="Abrir menu">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>

            </svg>

        </button>

        <div class="text-xs text-gray-500">
            <span>FCM-DESK</span>
            <span class="mx-1">/</span>
            <span>
                {{ $slot }}
            </span>
        </div>
    </div>

    <a href="#criar-carreira"
       class="cursor-pointer inline-flex items-center gap-2 bg-lime-300 text-black px-3 sm:px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold hover:bg-lime-400 transition-colors whitespace-nowrap">
        <span class="text-lg leading-none">+</span>
        
        <span class="hidden sm:inline">Nova carreira</span>
        <span class="sm:hidden">Nova</span>
    </a>
</header>