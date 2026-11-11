@extends('layouts.storefront')

@section('title', 'Catálogo — GPM Conecta')

@section('content')
<section class="page-hero">
    <div class="site-container">
        <div class="breadcrumb"><a href="{{ route('home') }}">Início</a> / Catálogo</div>
        <div class="page-hero__row">
            <h1>Catálogo de <em>produtos</em></h1>
            <p>Consulte as opções de fornecimento para a sua empresa. Os preços e a disponibilidade são confirmados pela equipa GPM após o envio do pedido.</p>
        </div>
        <div class="catalog-toolbar"><span>CATÁLOGO GPM CONECTA</span><span>INFORMAÇÃO SUJEITA A VALIDAÇÃO</span></div>
    </div>
</section>
<section class="catalog-empty">
    <div class="site-container">
        <div class="catalog-empty__panel">
            <div class="catalog-empty__icon" aria-hidden="true">▦</div>
            <h2>Estamos a preparar o catálogo</h2>
            <p>As categorias e referências serão apresentadas aqui assim que forem validadas pela GPM. Enquanto isso, pode indicar à equipa os produtos de que a sua empresa precisa.</p>
            <a class="button button--navy" href="{{ route('home') }}#processo">Ver como funciona <span aria-hidden="true">→</span></a>
        </div>
    </div>
</section>
@endsection
