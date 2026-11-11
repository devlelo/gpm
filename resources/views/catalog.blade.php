@extends('layouts.storefront')

@section('title', 'Catálogo — GPM Conecta')

@section('content')
<section class="page-hero page-hero--catalog">
    <div class="site-container">
        <p class="eyebrow eyebrow--navy"><span class="eyebrow__line"></span> GPM CONECTA / CATÁLOGO</p>
        <div class="page-hero__row">
            <h1>Encontre o que<br>a sua operação <em>precisa.</em></h1>
            <p>Explore o catálogo de fornecimento empresarial. Selecione os artigos e quantidades para preparar um pedido sujeito à validação da equipa GPM.</p>
        </div>
        <div class="catalog-toolbar">
            <span>CATÁLOGO DE FORNECIMENTO</span>
            <span>CONSULTA SUJEITA A DISPONIBILIDADE</span>
        </div>
    </div>
</section>

<section class="catalog-empty section-pad">
    <div class="site-container">
        <div class="catalog-empty__panel">
            <div class="catalog-empty__index">CATÁLOGO / 000</div>
            <div class="catalog-empty__symbol" aria-hidden="true"><span></span><span></span><span></span></div>
            <p class="eyebrow eyebrow--navy"><span class="eyebrow__line"></span> PREPARAÇÃO DO CATÁLOGO</p>
            <h2>Estamos a organizar<br><em>o catálogo de produtos.</em></h2>
            <p>As referências serão apresentadas aqui assim que o catálogo validado pela GPM estiver disponível. Entretanto, pode contactar a equipa para apresentar a necessidade da sua empresa.</p>
            <a class="button button--navy" href="{{ route('home') }}#processo">Ver como funciona <span aria-hidden="true">↗</span></a>
            <div class="catalog-empty__foot"><span>GPM CONECTA</span><span>SEM PREÇOS OU STOCK NÃO CONFIRMADOS</span></div>
        </div>
    </div>
</section>
@endsection
