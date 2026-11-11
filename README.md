# GPM Conecta

Plataforma B2B de pedidos de fornecimento empresarial, negociação e acompanhamento comercial, operada pela GPM.

> **A GPM Conecta não é uma loja de pagamento imediato.** O cliente submete uma intenção de fornecimento; a equipa GPM analisa disponibilidade, fornecedores, preços, prazos e condições; só depois de validação comercial humana a encomenda pode ser formalmente confirmada.

## Identidade visual oficial

| Cor | Código | Aplicação |
|---|---|---|
| Branco | `#FFFFFF` | Base dominante, fundos e espaço de respiração |
| Azul-marinho | `#0A2945` | Navegação, títulos, botões principais e elementos de confiança |
| Dourado / castanho claro | `#CE9E53` | Pequenos acentos, indicadores e destaques pontuais |

Direção visual atual: **marketplace B2B convencional, simples e neutro**. Usar branco como base dominante, superfícies cinza muito claras, cartões discretos, bordas suaves, tipografia legível e navegação familiar. O azul-marinho estrutura a interface; o dourado é apenas um acento. Evitar composições experimentais, fundos escuros extensos, grafismos técnicos excessivos, brilhos e animações decorativas.

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

A camada pública inicial do storefront Laravel Blade está na branch `feat/gpm-spree-storefront`, com homepage e catálogo em estado vazio até à entrada de dados reais. O design foi revisto para uma direção de marketplace B2B convencional, clara e neutra. A compilação Vite, renderização Blade, ligação MySQL, migrations, catálogo dinâmico, autenticação, pedidos, testes locais e publicação continuam sujeitos a validação.

Repositório oficial: https://github.com/devlelo/gpm
