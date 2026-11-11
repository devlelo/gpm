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


## 2026-11-11 — Autorização e implementação inicial do storefront GPM

**Autorização / decisão**
- Comando explícito do responsável: “sim go”, em resposta à proposta de adaptar o storefront Spree à identidade GPM.
- Âmbito autorizado: criar a primeira camada visual pública em Laravel Blade, inspirada nos padrões de navegação, hero, descoberta de catálogo e lista de pedido do Spree Storefront; aplicar a identidade GPM aprovada.
- Limites: não instalar Spree, Next.js ou backend externo; não alterar base de dados, migrations, autenticação, regras comerciais ou dependências; não inventar produtos, preços, fornecedores ou métricas; preservar a operação B2B por pedido sujeito a validação humana.

**Feito**
- Criada a branch isolada `feat/gpm-spree-storefront` a partir de `main`.
- Inspecionados os ficheiros Laravel existentes, a política de controlo de alterações e os componentes de referência do Spree Storefront.
- Preparada a adaptação Blade com layout público, página inicial e catálogo em estado vazio até existir catálogo real.

**Testado**
- Inspeção estática dos ficheiros existentes e da estrutura Laravel via GitHub.
- Execução local de PHP/Vite ainda não disponível nesta sessão; validação funcional pendente.

**Pendente / bloqueios**
- Confirmar compilação Vite e renderização Blade no ambiente local do responsável.
- Ligar catálogo e lista de pedido aos módulos de domínio quando forem implementados e aprovados.

**Próximo passo**
- Rever a branch, executar `npm run build`, `php artisan route:list` e testes Laravel no ambiente local; só depois preparar integração/merge.


### Implementação inicial concluída nesta branch

**Feito**
- Criado `resources/views/layouts/storefront.blade.php`: layout responsivo, navegação, cabeçalho, rodapé e acessibilidade básica.
- Criado `resources/views/home.blade.php`: homepage institucional com hero, explicação do processo e chamadas para o catálogo.
- Criado `resources/views/catalog.blade.php`: página de catálogo com estado vazio explícito; não foram inventados produtos, preços, stock ou fornecedores.
- Criado `resources/css/gpm-storefront.css`: identidade visual GPM (branco, azul-marinho e dourado), tipografia IBM Plex e regras responsivas/reduced motion.
- Criado `resources/js/gpm-storefront.js`: interação do menu móvel.
- Ligadas as rotas nomeadas `home` e `catalog` em `routes/web.php`; imports adicionados aos pontos de entrada Vite existentes.
- Preservada a licença MIT de referência em `licenses/SPREE-STOREFRONT-MIT.txt` e registado o Spree como referência de UX, não como dependência.
- Atualizados README, PROJECT_MASTER e REPOSITORIES para refletir o âmbito e o estado.

**Testado**
- Confirmada a criação dos ficheiros e commits na branch GitHub.
- Revisão estática das rotas e imports; compilação Vite, renderização Blade, testes PHPUnit e ligação MySQL não foram executados nesta sessão.

**Pendente / bloqueios**
- Executar no ambiente local: `npm run build`, `php artisan route:list`, `php artisan test` e abrir as rotas `/` e `/catalogo` no navegador.
- A página de catálogo permanece intencionalmente sem produtos até existir catálogo real aprovado e ligação aos dados.
- Lista de pedido, autenticação e submissão ainda não foram implementadas; não há checkout nem confirmação automática.
