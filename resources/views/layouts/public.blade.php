<!DOCTYPE html>
<html>
    
@include('shared.head')

    <body class="bg-[#0B0F0D] text-white min-h-screen flex flex-col">
        <header class="w-full flex items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="text-xl font-bold">
            <span class="text-white">FCM</span><span class="text-lime-400">DESK</span>
            </a>
            <nav class="flex items-center gap-6">
                <a href="#sobre"
                class="text-sm font-medium text-white hover:text-lime-400 transition-colors">
                    Sobre
                </a>

                <a href="{{ route('user.careers.index') }}"
                class="bg-white text-black px-4 py-2 rounded-md text-sm font-semibold hover:bg-lime-400 transition-colors">
                    Entrar/Login
                </a>
            </nav>
        </header>
        <div class="flex-1 flex flex-col items-center justify-between text-center px-5">
        @yield('content')
        </div>
    </body>
</html>
