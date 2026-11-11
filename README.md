# GPM Conecta

Plataforma B2B de pedidos de fornecimento empresarial da GPM.

> O GPM Conecta não é um checkout de compra imediata. O cliente submete um pedido; a equipa GPM valida disponibilidade, preço, prazo e condições antes de emitir uma proposta. A encomenda só é confirmada por um operador autorizado.

## Identidade visual

- Branco: `#FFFFFF`
- Azul-marinho: `#0A2945`
- Dourado: `#CE9E53`

## Stack

- Laravel 12 / PHP 8.2+
- MySQL (base de dados principal)
- Blade, HTML, CSS e JavaScript
- Vite para assets frontend

## Estrutura e documentação

- [Documento Mestre](docs/PROJECT_MASTER.md)
- [Arquitetura](docs/ARCHITECTURE.md)
- [Estrutura do projeto](docs/PROJECT_STRUCTURE.md)
- [Repositórios e dependências](docs/REPOSITORIES.md)
- [Controlo de alterações](docs/CHANGE_CONTROL.md)
- [Registo de progresso](docs/PROJECT_LOG.md)
- [Template Electro original](resources/templates/electro-original/)

## Ambiente local

1. Instalar dependências PHP com `composer install`.
2. Copiar `.env.example` para `.env` e configurar MySQL.
3. Gerar chave com `php artisan key:generate`.
4. Executar migrations com `php artisan migrate`.
5. Instalar dependências JS com `npm install`.
6. Executar `npm run dev` durante desenvolvimento ou `npm run build` para compilar.

Não colocar `.env`, credenciais, logs, caches, sessões ou ficheiros privados no Git.

## Estado atual

O repositório contém a base Laravel e documentação de produto/arquitetura. Os módulos comerciais GPM só devem ser considerados implementados quando existirem código, migrations, testes e validação documentados. Consulte `docs/PROJECT_LOG.md`.

## Governação

Alterações de âmbito, arquitetura, identidade visual, schema, dependências ou funcionalidades devem respeitar [docs/CHANGE_CONTROL.md](docs/CHANGE_CONTROL.md).
