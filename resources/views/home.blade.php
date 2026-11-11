@extends('layouts.storefront')

@section('title', 'GPM Conecta — Fornecimento empresarial')

@section('content')
<section class="hero">
    <div class="site-container hero__layout">
        <div class="hero__copy">
            <p class="eyebrow"><span class="eyebrow__dot"></span> PLATAFORMA DE FORNECIMENTO B2B</p>
            <h1>O fornecimento da sua empresa, <em>mais simples.</em></h1>
            <p class="hero__lead">Encontre o que a sua operação precisa, organize os artigos e envie um pedido à GPM. A nossa equipa consulta fornecedores e apresenta uma proposta com condições validadas.</p>
            <div class="hero__actions">
                <a class="button button--navy" href="{{ route('catalog') }}">Explorar catálogo <span aria-hidden="true">→</span></a>
                <a class="button button--outline" href="#processo">Como funciona</a>
            </div>
        </div>
        <div class="hero-visual" aria-label="GPM Conecta — fornecimento empresarial">
            <div class="hero-visual__shape"><div class="hero-visual__mark">G</div><span class="hero-visual__accent"></span></div>
            <div class="hero-visual__caption"><span>GPM Conecta</span><span>Fornecimento B2B</span></div>
        </div>
    </div>
</section>

<section class="benefits">
    <div class="site-container benefits__grid">
        <div class="benefit"><span class="benefit__icon" aria-hidden="true">⌕</span><div><strong>Catálogo centralizado</strong><span>Consulte as opções de fornecimento</span></div></div>
        <div class="benefit"><span class="benefit__icon" aria-hidden="true">✓</span><div><strong>Condições confirmadas</strong><span>Preços e disponibilidade validados</span></div></div>
        <div class="benefit"><span class="benefit__icon" aria-hidden="true">↗</span><div><strong>Acompanhamento GPM</strong><span>Uma equipa ao longo do processo</span></div></div>
    </div>
</section>

<section class="section-pad">
    <div class="site-container">
        <div class="section-heading">
            <div><p class="eyebrow">TUDO MAIS ORGANIZADO</p><h2>Uma forma simples de pedir</h2></div>
            <p>Consulte o catálogo, reúna os produtos de que precisa e envie o pedido. A equipa GPM acompanha cada etapa.</p>
        </div>
        <a class="category-placeholder" href="{{ route('catalog') }}">
            <span><strong>Comece pelo catálogo GPM</strong>As categorias e referências serão apresentadas nesta área à medida que forem validadas pela equipa.</span>
        </a>
    </div>
</section>

<section class="section-pad" id="processo" style="background:var(--gpm-soft)">
    <div class="site-container">
        <div class="section-heading">
            <div><p class="eyebrow">DO PEDIDO À ENTREGA</p><h2>Como funciona</h2></div>
            <p>A disponibilidade, os preços e os prazos são confirmados pela equipa GPM antes de qualquer encomenda.</p>
        </div>
        <div class="process-grid">
            <article class="process-card"><span class="process-card__number">01</span><h3>Escolha os produtos</h3><p>Explore o catálogo e organize os artigos e quantidades de que a sua empresa necessita.</p></article>
            <article class="process-card"><span class="process-card__number">02</span><h3>A GPM consulta</h3><p>A equipa verifica fornecedores, disponibilidade, preços, prazos e condições comerciais.</p></article>
            <article class="process-card"><span class="process-card__number">03</span><h3>Receba a proposta</h3><p>Analise a proposta, solicite ajustes se necessário e acompanhe a confirmação da encomenda.</p></article>
        </div>
    </div>
</section>

<section class="assurance-band">
    <div class="site-container assurance-band__inner">
        <div><h2>Mais clareza em cada pedido de fornecimento.</h2><p>A GPM acompanha a consulta e valida as condições antes da confirmação da encomenda.</p></div>
        <span class="assurance-band__tag">GPM CONECTA · B2B</span>
    </div>
</section>

<section class="closing-cta">
    <div class="site-container closing-cta__inner">
        <h2>Vamos tratar das necessidades da sua empresa?</h2>
        <a class="button button--navy" href="{{ route('catalog') }}">Ver catálogo <span aria-hidden="true">→</span></a>
    </div>
</section>
@endsection
