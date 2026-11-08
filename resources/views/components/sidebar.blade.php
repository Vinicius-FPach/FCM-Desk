<aside id="sidebar" class="fixed top-0 left-0 h-screen w-52 bg-[#0D1210] border-r border-gray-700 flex flex-col z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">

    <div class="h-14 flex items-center justify-between px-4 border-b border-gray-700">
        <a href="{{ route('user.careers.index') }}"
           class="text-xl font-bold">

            <span class="text-white">FCM</span><span class="text-lime-400">DESK</span>
        </a>

         <button
            type="button"
            onclick="closeSidebar()"
            class="lg:hidden text-gray-400 hover:text-white transition-colors" aria-label="Fechar menu">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>
     <div class="px-4 mt-6">

        <h2 class="text-sm font-semibold text-gray-500 mb-3">
            Carreira Atual
        </h2>

        <a href="{{ route('user.careers.index') }}"
           class="flex items-center gap-2 p-2 rounded-xl
                  bg-[#141A17] hover:bg-[#1B241E]
                  transition-colors">
        <div class="w-8 h-9 border border-red-500 rounded-lg flex items-center justify-center text-red-500">
                A
            </div>

            <div class="flex-1 min-w-0">
                <p class="text-xs text-white truncate">
                    Arsenal FC
                </p>
                <p class="text-xs text-gray-500">
                    2026/2027
                </p>
            </div>
            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"/>
            </svg>
        </a>
    </div>

    <nav class="flex flex-col gap-1 px-4 mt-8 text-sm">

        <a href="{{ route('user.dashboard') }}" class="flex items-center justify-between px-4 py-3 rounded-lg bg-[#1A211D] text-white">
            Visão Geral
            <span class="w-2 h-2 rounded-full bg-lime-400"></span>
        </a>
        <a href="{{ route('user.careers.index') }}"
           class="px-4 py-3 rounded-lg text-gray-500
                  hover:bg-[#1A211D] hover:text-white transition-colors">
            Carreiras
        </a>

        <a href="#jogadores" class="px-4 py-3 rounded-lg text-gray-500 hover:bg-[#1A211D] hover:text-white transition-colors">
            Jogadores
        </a>

        <a href="#competicoes" class="px-4 py-3 rounded-lg text-gray-500 hover:bg-[#1A211D] hover:text-white transition-colors">
            Competições
        </a>

        <a href="#transferencias" class="px-4 py-3 rounded-lg text-gray-500
                  hover:bg-[#1A211D] hover:text-white transition-colors">

            Transferências

        </a>

    </nav>


    <div class="mt-auto p-3">
        <div class="border-t border-gray-700 pt-3 flex items-center gap-2">
            <div class="w-8 h-8 rounded-md bg-gray-600 flex items-center justify-center text-xs">
                VF
            </div>

            <div class="flex-1">
                <p class="text-xs text-white">
                    Vinicius Ferreira
                </p>

                <p class="text-xs text-gray-500">
                    Usuário
                </p>

            </div>

            <span class="text-gray-500 text-xs">
                &gt;
            </span>

        </div>

    </div>

</aside>