@extends('layouts.public')

@section('content')
    <div class="mt-8">
        <p class="text-lg font-light text-gray-200">
            Gerenciador de carreiras de jogos de futebol
        </p>
    </div>
    <div class="mb-32">
        <a href="#sobre"
           class="group flex flex-col items-center gap-2">
            <span class="text-lg text-white">
                Conheça o
                <span class="font-bold text-white">FCM</span><span class="font-bold text-lime-400">DESK</span>
            </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white transition-transform duration-300 group-hover:translate-y-2 group-hover:text-lime-400">
                  <path d="M12 5v14"/>
                  <path d="m19 12-7 7-7-7"/>
           </svg>
        </a>
      </div>
@endsection