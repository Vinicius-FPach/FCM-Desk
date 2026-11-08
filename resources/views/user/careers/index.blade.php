@extends('layouts.user')

@section('title', 'Carreiras')

@section('content')

<section>
    <div class="mb-6">
        <h1 class="text-2xl font-bold">
            Minhas carreiras
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Gerencie suas carreiras e acompanhe suas temporadas.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    @forelse ($careers as $career)
            <a href="{{ route('user.careers.detail', ['id' => $career['id']]) }}" class="bg-[#121816] rounded-xl p-5 border border-transparenthover:border-lime-400 transition-colors">
                <div class="flex items-center justify-between">
                    <h2>
                        {{ $career['name'] }}
                    </h2>

                    <span class="text-lime-400">
                        &rarr;
                    </span>
                </div>
                <p class="text-xs text-gray-500 mt-2">
                    Visualizar carreira
                </p>
            </a>
        @empty
        <div class="col-span-full bg-[#121816] rounded-xl p-8 text-center">
            <p class="text-gray-400">Sem carreiras</p>
        </div>
    @endforelse
    </div>
</section>
@endsection