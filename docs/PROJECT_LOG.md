# GPM Conecta — Registo de Progresso

Registar apenas o que foi feito, observado ou testado. Não marcar trabalho concluído com base em intenção ou código não executado. Toda alteração relevante deve respeitar [CHANGE_CONTROL.md](CHANGE_CONTROL.md).

## 2026-11-11 — Reorganização da especificação e decisões aprovadas

### Decisões aprovadas pelo responsável
- Identidade cromática oficial: branco `#FFFFFF`, azul-marinho `#0A2945`, dourado/castanho claro `#CE9E53`.
- Direção visual: **04. Neo-Industrial Field Manual**, adaptada à identidade da GPM.
- Produto definido como plataforma B2B de pedidos de fornecimento com validação comercial humana; não é checkout de pagamento imediato.
- Visitante pode explorar o catálogo; autenticação e perfil empresarial com NIF são exigidos para submeter pedido.
- Fluxo comercial separado: pedido → análise GPM → consulta a fornecedores → proposta versionada → decisão do cliente → confirmação explícita por funcionário GPM autorizado → acompanhamento.
- Arquitetura preparada para futuras APIs de pagamentos, fornecedores/marketplaces, logística e notificações.
- Operação manual deve continuar disponível quando integrações falharem.
- Alterações futuras ao âmbito, design, arquitetura, tecnologia, dependências e regras exigem documentação e autorização explícita do responsável; em caso de dúvida, pedir autorização antes de agir.

### Documentação atualizada no repositório oficial
- [x] README.md — apresentação GPM, identidade e regra de governação.
- [x] docs/PROJECT_MASTER.md — especificação funcional, fluxo, estados, painéis, arquitetura e fases.
- [x] docs/ARCHITECTURE.md — entidades, camadas, integrações e regras de integridade.
- [x] docs/REPOSITORIES.md — tecnologias e candidatos registados sem aprovação prematura.
- [x] docs/CHANGE_CONTROL.md — criado como política obrigatória de alterações.
- [x] docs/PROJECT_LOG.md — histórico atualizado.

### Ambiente local reportado pelo responsável
- Laravel Framework 12.72.0 confirmado pelo comando `php artisan --version`.
- Composer concluiu a instalação após um problema de permissão ao descarregar um pacote.
- APP_KEY foi gerada e o servidor Laravel iniciou.
- Foi observado um aviso sobre `PHP_CLI_SERVER_WORKERS`; não impediu a inicialização.
- A ligação MySQL e o resultado de `php artisan migrate:status` ainda não foram confirmados neste registo.

### Estado do código
- O repositório contém a base Laravel 12 e ficheiros padrão consultados.
- A rota `routes/web.php` foi observada como rota inicial padrão do Laravel durante a inspeção.
- Nenhum módulo comercial GPM foi considerado implementado ou testado nesta atualização.
- Nenhum pacote Aimeos, Lunar, Bagisto, gateway ou integração foi aprovado/instalado por esta atualização.
- Protótipo Vercel referido noutro contexto/repositório não foi considerado parte deste repositório oficial sem verificação e autorização específica.

### Próximas ações
1. Confirmar `Test-Path .gitignore`, `Test-Path .env.example` e proteger `.env`.
2. Confirmar ligação MySQL e migrations com `php artisan migrate:status`.
3. Atualizar este log com os resultados reais.
4. Preparar protótipo visual separado, respeitando paleta e direção aprovada, e solicitar aprovação antes da integração.
5. Implementar módulos apenas após aprovação do respetivo plano e critérios de teste.

## Modelo para novas entradas

### AAAA-MM-DD — Título

**Autorização / decisão**
- Comando ou decisão aprovada:

**Feito**
- ...

**Testado**
- Comando/ação:
- Resultado/evidência:

**Pendente / bloqueios**
- ...

**Próximo passo**
- ...


## 2026-11-11 — Organização da estrutura Laravel e documentação

### Feito no repositório
- Criada a branch `chore/organize-laravel-project`, derivada da branch de organização do Electro.
- Substituído o README de template por uma apresentação do GPM Conecta e instruções de ambiente Laravel.
- Criado `docs/PROJECT_STRUCTURE.md` com a função de cada diretório e regras para manter a estrutura Laravel.
- Criado `.gitignore` para proteger ambiente, dependências, logs, caches, sessões e views compiladas.
- Movidos os ficheiros SCSS Bootstrap que estavam soltos na raiz para `resources/vendor/bootstrap/scss/`, sem alterar o conteúdo.
- Removidos do controlo de versão 40 views Blade compiladas e o ficheiro de log Laravel que estavam em `storage/`.
- Mantidos os diretórios e ficheiros padrão do Laravel, incluindo `artisan`, `bootstrap/app.php`, `routes/`, `config/`, `database/`, `app/`, `public/`, `resources/` e `tests/`.
- Mantida a referência Electro em `resources/templates/electro-original/`.

### Verificação Git realizada
- Confirmada a existência de 64 entradas sob `resources/vendor/bootstrap/scss/` (59 ficheiros SCSS e diretórios associados).
- Confirmada a ausência de SCSS no antigo caminho `bootstrap/scss/`.
- Confirmada a remoção dos ficheiros gerados de `storage/framework/views/` e `storage/logs/laravel.log`.
- Confirmada a preservação dos ficheiros centrais Laravel listados acima.

### Não executado / não confirmado
- Não foram executados `composer install`, `php artisan`, migrations MySQL, testes PHPUnit ou build Vite.
- Não foi validada a ligação MySQL nem a configuração local `.env`.
- Esta organização não implementa módulos comerciais, autenticação empresarial, catálogo, pedidos, propostas ou anúncios.
- A branch não foi integrada em `main`.

