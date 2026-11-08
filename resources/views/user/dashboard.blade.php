@extends('layouts.user')

@section('title', 'Visão geral')

@section('content')

<section class="mb-6">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
        <div>
            <p class="text-xs font-medium text-lime-400 mb-2">
                TEMPORADA 2026/27
            </p>

            <h1 class="text-3xl font-bold text-white">
                Olá, {{ $userName ?? 'Vinicius' }}.
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Acompanhe a evolução da sua carreira e continue fazendo história.
            </p>
        </div>

        <div class="flex bg-[#141A17] rounded-lg p-1 w-fit">
            <button class="bg-gray-600 px-3 py-1 rounded-md text-xs">
                Temporada
            </button>

            <button class="px-3 py-1 text-xs text-gray-400 hover:text-white">
                Tudo
            </button>
        </div>
    </div>
</section>


<section class="grid grid-cols-2 xl:grid-cols-4 gap-3 mb-4">

    @php
        $stats = [
            [
                'title' => 'VITÓRIAS',
                'value' => 28,
                'description' => '78% DE APROVEITAMENTO'
            ],
            [
                'title' => 'EMPATES',
                'value' => 3,
                'description' => '17% DAS PARTIDAS'
            ],
            [
                'title' => 'DERROTAS',
                'value' => 2,
                'description' => '5% DAS PARTIDAS'
            ],
            [
                'title' => 'TÍTULOS',
                'value' => 2,
                'description' => 'Nesta Temporada'
            ]
        ];
    @endphp
    @foreach ($stats as $stat)
        <div class="bg-[#121816] rounded-xl p-4">

            <p class="text-xs text-gray-500">
                {{ $stat['title'] }}
            </p>

            <p class="text-3xl font-bold text-white mt-2">
                {{ $stat['value'] }}
            </p>

            <p class="text-[10px] text-gray-500 mt-1">
                {{ $stat['description'] }}
            </p>
        </div>
    @endforeach

</section>


<section class="grid grid-cols-1 xl:grid-cols-5 gap-4 mb-4">

    <div class="xl:col-span-3 bg-[#121816] rounded-xl p-4">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-sm font-semibold">
                Desempenho da Temporada
            </h2>

            <div class="flex gap-3 text-[10px] text-gray-400">
                <span class="flex items-center gap-1">
                    <span class="w-2 h-2 bg-lime-400 rounded-full"></span>
                    Vitórias
                </span>

                <span class="flex items-center gap-1">
                    <span class="w-2 h-2 bg-gray-500 rounded-full"></span>
                    Derrotas
                </span>
            </div>
        </div>

        @php
            $performance = [
                ['month' => 'JUL', 'wins' => 4, 'losses' => 0],
                ['month' => 'AGO', 'wins' => 6, 'losses' => 1],
                ['month' => 'SET', 'wins' => 5, 'losses' => 1],
                ['month' => 'OUT', 'wins' => 8, 'losses' => 2],
                ['month' => 'NOV', 'wins' => 6, 'losses' => 1],
                ['month' => 'DEZ', 'wins' => 9, 'losses' => 2],
                ['month' => 'JAN', 'wins' => 7, 'losses' => 1],
                ['month' => 'FEV', 'wins' => 10, 'losses' => 2],
                ['month' => 'MAR', 'wins' => 8, 'losses' => 1],
                ['month' => 'ABR', 'wins' => 9, 'losses' => 2],
                ['month' => 'MAI', 'wins' => 6, 'losses' => 1],
                ['month' => 'JUN', 'wins' => 8, 'losses' => 2],
            ];
        @endphp

        <div class="h-48 flex items-end justify-between gap-2 border-b border-gray-700 pb-2">
            @foreach ($performance as $month)
                <div class="flex-1 flex flex-col items-center gap-2">
                    <div class="h-36 w-full flex items-end justify-center gap-1">
                        <div class="w-2 bg-lime-400 rounded-t"
                             style="height: {{ $month['wins'] * 10 }}%">
                        </div>

                        <div class="w-2 bg-gray-600 rounded-t"
                             style="height: {{ $month['losses'] * 10 }}%">
                        </div>
                    </div>

                    <span class="text-[9px] text-gray-500">
                        {{ $month['month'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>


    <div class="xl:col-span-2 bg-[#121816] rounded-xl p-4">
        <div class="flex items-start justify-between">
            <div>
                <h2 class="text-sm font-semibold">
                    Próximo jogo
                </h2>

                <p class="text-xs text-gray-500 mt-1">
                    Premier League - Rodada 28
                </p>
            </div>

            <span class="bg-gray-600 text-xs px-3 py-2 rounded">
                22 MAI
            </span>
        </div>

        <div class="flex items-center justify-around mt-8">
            <div class="text-center">
                <div class="w-14 h-14 rounded-2xl border border-red-500 flex items-center justify-center text-red-500 text-2xl mx-auto mb-2">
                    A
                </div>

                <p class="text-sm font-semibold">
                    Arsenal
                </p>

                <p class="text-xs text-gray-500">
                    Casa
                </p>
            </div>

            <span class="text-sm font-semibold">
                VS
            </span>

            <div class="text-center">
                <div class="w-14 h-14 rounded-2xl border border-blue-400 flex items-center justify-center text-blue-400 text-2xl mx-auto mb-2">
                    T
                </div>

                <p class="text-sm font-semibold">
                    Tottenham
                </p>

                <p class="text-xs text-gray-500">
                    Fora
                </p>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-6 pt-3 flex justify-between text-xs text-gray-500">
            <span>
                <strong class="text-white">1º</strong> Arsenal - 86 pts
            </span>

            <span>
                <strong class="text-white">5º</strong> Tottenham - 64 pts
            </span>
        </div>
    </div>
</section>


<section class="grid grid-cols-1 xl:grid-cols-5 gap-4">
    <div class="xl:col-span-3 bg-[#121816] rounded-xl p-4">
        <div class="flex items-center justify-between mb-1">
            <h2 class="text-sm font-semibold">
                Partidas recentes
            </h2>

            <a href="#historico" class="text-xs font-semibold text-lime-400 hover:text-lime-300">
                Ver histórico &gt;
            </a>
        </div>

        <p class="text-xs text-gray-500 mb-4">
            Últimos resultados da temporada
        </p>

        @php
            $matches = [
                ['date' => '18 MAI', 'team' => 'Manchester City', 'competition' => 'Premier League', 'result' => 'V', 'score' => '2 - 1'],
                ['date' => '14 MAI', 'team' => 'Chelsea', 'competition' => 'Premier League', 'result' => 'E', 'score' => '1 - 1'],
                ['date' => '10 MAI', 'team' => 'Real Madrid', 'competition' => 'Champions League', 'result' => 'V', 'score' => '2 - 1'],
                ['date' => '06 MAI', 'team' => 'Liverpool', 'competition' => 'Premier League', 'result' => 'D', 'score' => '0 - 3'],
            ];
        @endphp

        <div class="divide-y divide-gray-700">
            @foreach ($matches as $match)
                <div class="flex items-center gap-3 py-2">
                    <span class="text-[10px] text-gray-500 w-12">
                        {{ $match['date'] }}
                    </span>

                    <div class="w-7 h-7 rounded-md bg-gray-600 flex items-center justify-center text-xs
                                {{ $match['result'] === 'V' ? 'text-lime-400' : '' }}
                                {{ $match['result'] === 'D' ? 'text-red-400' : '' }}">
                        {{ $match['result'] }}
                    </div>

                    <div class="flex-1">
                        <p class="text-xs font-semibold">
                            {{ $match['team'] }}
                        </p>

                        <p class="text-[10px] text-gray-500">
                            {{ $match['competition'] }}
                        </p>
                    </div>

                    <span class="text-xs">
                        {{ $match['score'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>

    <div class="xl:col-span-2 bg-[#121816] rounded-xl p-4">
        <div class="flex items-center justify-between mb-1">
            <h2 class="text-sm font-semibold">
                Destaques do elenco
            </h2>

            <a href="#elenco" class="text-xs font-semibold text-lime-400 hover:text-lime-300">
                Elenco &gt;
            </a>
        </div>
        <p class="text-xs text-gray-500 mb-4">
            Líderes da Temporada
        </p>
        <div class="border border-gray-700 rounded-lg p-3 flex items-center gap-3 mb-2">
            <span class="text-xs text-gray-500">
                01
            </span>

            <div class="w-8 h-8 rounded-md bg-gray-600 flex items-center justify-center text-lime-400 text-xs">
                BS
            </div>

            <div class="flex-1">
                <p class="text-xs font-semibold text-lime-400">
                    Artilheiro
                </p>

                <p class="text-xs font-semibold">
                    Bukayo Saka
                </p>

                <p class="text-[10px] text-gray-500">
                    PD - 90 ovr
                </p>

            </div>

            <span class="text-sm font-bold text-lime-400">
                32
            </span>

        </div>

        <div class="border border-gray-700 rounded-lg p-3 flex items-center gap-3">

            <span class="text-xs text-gray-500">
                02
            </span>

            <div class="w-8 h-8 rounded-md bg-gray-600 flex items-center justify-center text-purple-400 text-xs">
                GM
            </div>

            <div class="flex-1">
                <p class="text-xs font-semibold text-lime-400">
                    Maior Assistente
                </p>

                <p class="text-xs font-semibold">
                    Gabriel Martinelli
                </p>

                <p class="text-[10px] text-gray-500">
                    PE - 87 ovr
                </p>
            </div>

            <span class="text-sm font-bold text-purple-400">
                16
            </span>
        </div>
    </div>
</section>

@endsection