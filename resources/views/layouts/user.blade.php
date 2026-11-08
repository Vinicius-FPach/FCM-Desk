<!DOCTYPE html>
<html>
    
@include('shared.head')

    <body class="bg-[#0B0F0D] text-white min-h-screen">
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/70 z-40 hidden lg:hidden" onclick="closeSidebar()"></div>

        <div class="flex min-h-screen">
            <x-sidebar />
            <div class="flex-1 min-w-0 flex flex-col lg:ml-52">
                <x-header>
                @yield('title')
                </x-header>
                <main class="flex-1 w-full min-w-0 px-4 py-6 lg:px-6">
                    <x-flash />

                    @yield('content')
                </main>
            </div>
        </div>

        <script>
        function openSidebar() {
            document.getElementById('sidebar').classList.remove('-translate-x-full');
            document.getElementById('sidebar-overlay').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
            document.getElementById('sidebar-overlay').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });
    </script>

    </body>
</html>
