@extends('layouts.storefront')

@section('title', 'GPM Conecta — Fornecimento empresarial')

@section('content')
<section class="hero">
    <div class="hero-grid" aria-hidden="true"></div>
    <div class="site-container hero__layout">
        <div class="hero__copy">
            <p class="eyebrow"><span class="eyebrow__line"></span> PLATAFORMA DE FORNECIMENTO B2B</p>
            <h1>O próximo fornecimento da sua empresa <em>começa aqui.</em></h1>
            <p class="hero__lead">Encontre o que a sua operação precisa. Envie o seu pedido. A equipa GPM trata da consulta, validação e proposta comercial.</p>
            <div class="hero__actions">
                <a class="button button--gold" href="{{ route('catalog') }}">Explorar catálogo <span aria-hidden="true">↗</span></a>
                <a class="text-link text-link--light" href="#processo">Conhecer o processo <span aria-hidden="true">↓</span></a>
            </div>
            <div class="hero__footnote"><span class="status-dot"></span> PEDIDOS ANALISADOS PELA EQUIPA GPM</div>
        </div>

        <div class="hero-visual" aria-label="Composição gráfica técnica GPM Conecta">
            <div class="hero-visual__top"><span>GPM / CONECTA</span><span>SUPPLY SYSTEM · 01</span></div>
            <div class="hero-visual__core">
                <div class="orbit orbit--outer"></div>
                <div class="orbit orbit--inner"></div>
                <div class="core-mark">G<span>+</span></div>
                <span class="visual-coordinate visual-coordinate--one">PROCUREMENT<br>NETWORK</span>
                <span class="visual-coordinate visual-coordinate--two">REQUEST<br>MANAGEMENT</span>
                <span class="visual-cross visual-cross--one">+</span>
                <span class="visual-cross visual-cross--two">+</span>
            </div>
            <div class="hero-visual__bottom"><span>REQUEST / REVIEW / DELIVER</span><span>GPM–AO</span></div>
            <div class="hero-visual__index">01—03</div>
        </div>
    </div>
    <div class="hero-bottom-rule"><span></span></div>
</section>

<section class="intro-strip">
    <div class="site-container intro-strip__inner">
        <span class="section-index">01 / A PLATAFORMA</span>
        <p>Uma forma mais clara de organizar necessidades de fornecimento, consultar condições e acompanhar cada etapa com a GPM.</p>
        <span class="intro-strip__tag">B2B · ANGOLA</span>
    </div>
</section>

<section class="process-section section-pad" id="processo">
    <div class="site-container">
        <div class="section-heading">
            <div>
                <p class="eyebrow eyebrow--navy"><span class="eyebrow__line"></span> UM PROCESSO TRANSPARENTE</p>
                <h2>Do pedido à entrega.<br><em>Com acompanhamento.</em></h2>
            </div>
            <p class="section-heading__aside">Não é uma compra automática. Cada pedido é analisado pela equipa GPM antes da apresentação das condições finais.</p>
        </div>

        <div class="process-grid">
            <article class="process-item">
                <span class="process-item__number">01</span>
                <div class="process-item__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M8 11h32v26H8zM15 18h18M15 25h12M15 32h7"/></svg></div>
                <h3>Explore e selecione</h3>
                <p>Consulte as opções de fornecimento e organize os produtos e quantidades de que a sua empresa necessita.</p>
                <span class="process-item__meta">CATÁLOGO / SELEÇÃO</span>
            </article>
            <article class="process-item">
                <span class="process-item__number">02</span>
                <div class="process-item__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="21" cy="21" r="12"/><path d="m30 30 9 9M16 21h10M21 16v10"/></svg></div>
                <h3>A GPM valida</h3>
                <p>A equipa consulta fornecedores e confirma disponibilidade, preços, prazos e condições comerciais.</p>
                <span class="process-item__meta">ANÁLISE / CONSULTA</span>
            </article>
            <article class="process-item">
                <span class="process-item__number">03</span>
                <div class="process-item__icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M10 8h20l8 8v24H10zM30 8v9h8M16 25h16M16 32h12"/></svg></div>
                <h3>Receba a proposta</h3>
                <p>Analise a proposta comercial, solicite ajustes se necessário e acompanhe a confirmação da encomenda.</p>
                <span class="process-item__meta">PROPOSTA / ACOMPANHAMENTO</span>
            </article>
        </div>
    </div>
</section>

<section class="assurance-band">
    <div class="site-container assurance-band__inner">
        <div class="assurance-band__label"><span class="section-index section-index--light">02 / COMPROMISSO</span><span class="assurance-mark">GPM—C</span></div>
        <div class="assurance-band__content">
            <p class="eyebrow eyebrow--light"><span class="eyebrow__line"></span> FORNECIMENTO COM RESPONSABILIDADE</p>
            <h2>Condições confirmadas.<br><em>Decisões acompanhadas.</em></h2>
            <p>A disponibilidade e o preço final são validados antes da confirmação. A sua empresa acompanha o processo com informação clara em cada etapa.</p>
            <a class="button button--outline-light" href="{{ route('catalog') }}">Começar pelo catálogo <span aria-hidden="true">↗</span></a>
        </div>
        <div class="assurance-band__stamp" aria-hidden="true"><span>GPM</span><small>CONNECTION<br>IN MOTION</small></div>
    </div>
</section>

<section class="closing-cta">
    <div class="site-container closing-cta__inner">
        <span class="section-index">03 / PRÓXIMO PASSO</span>
        <h2>O que a sua empresa<br>precisa de <em>encontrar?</em></h2>
        <a class="button button--navy" href="{{ route('catalog') }}">Consultar catálogo <span aria-hidden="true">↗</span></a>
    </div>
</section>
@endsection
