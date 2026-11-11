<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0A2945">
    <meta name="description" content="GPM Conecta — pedidos empresariais de fornecimento, negociação e acompanhamento comercial.">
    <title>@yield('title', 'GPM Conecta — Fornecimento empresarial')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="gpm-site">
    <a class="skip-link" href="#conteudo">Saltar para o conteúdo</a>

    <div class="utility-bar">
        <div class="site-container utility-bar__inner">
            <span>GPM CONECTA <span class="utility-separator">/</span> FORNECIMENTO EMPRESARIAL</span>
            <span class="utility-bar__note">PEDIDOS · CONSULTA · ACOMPANHAMENTO</span>
        </div>
    </div>

    <header class="site-header">
        <div class="site-container site-header__inner">
            <a class="brand" href="{{ route('home') }}" aria-label="GPM Conecta — página inicial">
                <span class="brand__mark" aria-hidden="true">G</span>
                <span class="brand__wordmark">GPM<span> CONECTA</span></span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Abrir navegação">
                <span></span><span></span>
            </button>

            <nav class="primary-nav" id="primary-navigation" aria-label="Navegação principal">
                <a href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Início</a>
                <a href="{{ route('catalog') }}" @if(request()->routeIs('catalog')) aria-current="page" @endif>Catálogo</a>
                <a href="{{ route('home') }}#processo">Como funciona</a>
                <a class="nav-cta" href="{{ route('catalog') }}">Explorar fornecimento <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="site-container">
            <div class="footer-main">
                <a class="brand brand--footer" href="{{ route('home') }}" aria-label="GPM Conecta — início">
                    <span class="brand__mark" aria-hidden="true">G</span>
                    <span class="brand__wordmark">GPM<span> CONECTA</span></span>
                </a>
                <p>Fornecimento empresarial com análise, negociação e acompanhamento pela equipa GPM.</p>
                <a class="footer-link" href="{{ route('catalog') }}">Explorar catálogo <span aria-hidden="true">↗</span></a>
            </div>
            <div class="footer-bottom">
                <span>© {{ date('Y') }} GPM Conecta</span>
                <span>PLATAFORMA DE PEDIDOS EMPRESARIAIS</span>
            </div>
        </div>
    </footer>
</body>
</html>
