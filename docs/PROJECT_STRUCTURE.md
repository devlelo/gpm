# Estrutura do repositório Laravel

Este documento descreve a organização física do GPM Conecta. A estrutura interna padrão do Laravel é preservada para manter compatibilidade com Artisan, Composer, Vite e o runtime.

## Raiz

- `app/`: código PHP da aplicação (Controllers, Models, Policies, Services, etc.).
- `bootstrap/`: arranque do Laravel, providers e cache de bootstrap. Não confundir com o CSS/SCSS do framework Bootstrap.
- `config/`: configuração da aplicação.
- `database/`: migrations, factories e seeders MySQL.
- `docs/`: documentação funcional, arquitetura, decisões e progresso.
- `public/`: único diretório público servido pelo servidor web.
- `resources/`: fontes frontend, Blade e referências de templates.
- `routes/`: definição de rotas HTTP e comandos.
- `storage/`: ficheiros gerados/runtime; conteúdo mutável não deve ser versionado.
- `tests/`: testes automatizados.
- `vendor/` e `node_modules/`: dependências instaladas localmente; não versionar.

## Frontend e referências

- `resources/css/`: CSS fonte da aplicação.
- `resources/js/`: JavaScript fonte e bootstrap do frontend.
- `resources/views/`: templates Blade da aplicação.
- `resources/templates/electro-original/`: cópia de referência do Electro, preservada separadamente; não é servida diretamente como aplicação.
- `resources/vendor/bootstrap/scss/`: fontes SCSS Bootstrap de referência, separadas da pasta de arranque Laravel.

## Regras de organização

1. Não mover ou renomear diretórios padrão do Laravel (`app`, `bootstrap/app.php`, `config`, `database`, `public`, `resources`, `routes`, `storage`, `tests`).
2. Controllers HTTP ficam em `app/Http/Controllers`; regras de negócio reutilizáveis devem ficar em Services/Actions após definição do domínio.
3. Models ficam em `app/Models`; migrations em `database/migrations`.
4. Views públicas e administrativas ficam em subpastas próprias de `resources/views`, organizadas por layout e módulo.
5. Assets fonte ficam em `resources`; apenas assets compilados/publicados devem chegar a `public`.
6. Templates de terceiros ficam isolados em `resources/templates/<nome>/`, com licença e créditos preservados.
7. `.env`, logs, caches, sessões, views compiladas e dependências não são ficheiros-fonte e não devem ser commitados.
8. Não criar tabelas ou módulos de domínio antes de documentar entidades, relações e regras no Documento Mestre/Arquitetura.

## Nota de estado

Esta é a convenção de organização, não uma declaração de que todos os módulos de negócio já foram implementados. Consulte `PROJECT_LOG.md` para distinguir decisões, código existente e testes executados.
