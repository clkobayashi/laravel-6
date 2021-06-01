@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Exibindo os produtos</h1>

    <a href="{{ route('products.create') }}">Cadastrar</a>

    <hr>

    @component('admin.components.cards')
        @slot('titulo')
            <h1>Título do card</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    @if ($teste === '123')
        É igual
    @elseif ($teste == 123)
        É igual 123
    @else
        É diferente
    @endif


    @unless ($teste === '123')
        qwerewrqwe
    @else
        gsadgasdgd
    @endunless


    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset


    @empty($teste3)
        <p>Vazio...</p>
    @else
        <p>Não está vazio</p>
    @endempty

    @auth
        <p>Autenticado</p>    
    @else
        <p>Não autenticado</p>
    @endauth

    @guest
        <p>Não autenticado</p>
    @endguest

    @switch($teste)
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3  
            @break
        @default
            Default - {{ $teste }}
            
    @endswitch

@endsection

@push('style')
    <style>
        .last {background: #CCC;}
    </style>
@endpush

@push('script')
    <script>
         document.body.style.background = '#efefef'
    </script>
@endpush
