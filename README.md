# GPM Conecta

Plataforma empresarial de pedidos de fornecimento, negociação e acompanhamento comercial, operada pela GPM.

> **A GPM Conecta não é uma loja de pagamento imediato.** O cliente submete uma intenção de fornecimento; a equipa GPM analisa disponibilidade, fornecedores, preços, prazos e condições; só depois de validação comercial humana a encomenda pode ser formalmente confirmada.

## Identidade visual oficial

| Cor | Código | Aplicação |
|---|---|---|
| Branco | `#FFFFFF` | Base, fundos e espaço de respiração |
| Azul-marinho | `#0A2945` | Estrutura, navegação, títulos e elementos principais |
| Dourado / castanho claro | `#CE9E53` | Destaques, indicadores e chamadas à ação |

Direção visual: **04. Neo-Industrial Field Manual**, adaptada à identidade cromática oficial da GPM. Não introduzir outras cores dominantes sem autorização.

## Fluxo comercial resumido

1. Visitante explora o catálogo.
2. Cliente empresarial regista-se e informa os dados da empresa, incluindo NIF.
3. Cliente seleciona produtos e quantidades e submete um pedido.
4. GPM recebe uma referência e analisa o pedido.
5. Equipa consulta fornecedores manualmente ou, futuramente, por integrações autorizadas.
6. GPM prepara uma proposta comercial versionada.
7. Cliente aceita, rejeita ou solicita alterações.
8. Um funcionário GPM autorizado confirma formalmente a encomenda.
9. Cliente acompanha o processo e consulta os documentos.

**Pedido enviado ≠ proposta aceite ≠ encomenda confirmada.** Estas etapas têm registos e estados distintos.

## Tecnologia e evolução

- Laravel 12 / PHP 8.2+
- MySQL como base de dados principal
- Blade, HTML, CSS e JavaScript
- Arquitetura preparada para APIs, webhooks e adaptadores externos, sem dependência inicial de um gateway ou fornecedor específico
- Operação manual como fallback obrigatório quando uma integração estiver indisponível

Integrações de pagamentos, fornecedores, logística e notificações serão avaliadas e ativadas por fases. Nenhum gateway ou plataforma de e-commerce está aprovado apenas por ter sido mencionado como candidato.

## Documentação

- [Documento Mestre](docs/PROJECT_MASTER.md)
- [Arquitetura](docs/ARCHITECTURE.md)
- [Registo de Progresso](docs/PROJECT_LOG.md)
- [Repositórios e Dependências](docs/REPOSITORIES.md)
- [Controlo de Alterações e Autorizações](docs/CHANGE_CONTROL.md)

## Regra obrigatória de governação

Nenhuma alteração de âmbito, identidade visual, arquitetura, tecnologia, dependências, regras comerciais, estrutura de dados ou ficheiros aprovados pode ser executada silenciosamente. A alteração deve estar documentada e autorizada por comando explícito do responsável pelo projeto; quando a autorização ou intenção não for inequívoca, deve ser solicitada antes de agir. Consultar [CHANGE_CONTROL.md](docs/CHANGE_CONTROL.md).

## Estado

A documentação de visão e arquitetura está registada. A primeira camada pública do storefront em Laravel Blade foi criada na branch `feat/gpm-spree-storefront`, com página inicial e catálogo em estado vazio até à entrada de dados reais. A instalação local Laravel 12.72.0 foi reportada pelo responsável. A ligação MySQL, migrations, catálogo dinâmico, autenticação, pedidos, testes locais e publicação continuam sujeitos a validação.

Repositório oficial: https://github.com/devlelo/gpm
