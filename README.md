# GPM Conecta

Plataforma B2B para aproximar empresas compradoras e fornecedores, organizar pedidos de cotação e acompanhar propostas e encomendas.

**Estado:** documentação inicial; aplicação Laravel ainda não instalada nem validada neste repositório.

## Objetivo
Permitir que empresas encontrem produtos e fornecedores, enviem pedidos comerciais e acompanhem o processo até à confirmação final pela equipa GPM. O público inclui construção, hotelaria, obras, escritórios e operações profissionais — não apenas restaurantes ou cantinas.

## Fluxo principal
1. Visitante consulta categorias e produtos.
2. Empresa cria conta e completa os dados comerciais.
3. Cliente seleciona produtos e envia pedido de cotação.
4. Equipa GPM e/ou fornecedores analisam e preparam proposta.
5. Cliente aceita, rejeita ou pede alterações.
6. Equipa GPM verifica condições e confirma formalmente a encomenda.
7. Cliente acompanha o estado e consulta o histórico.

**Regra essencial:** pedido de cotação, aceitação de proposta e encomenda confirmada são etapas distintas.

## Stack planeada
- Laravel 12 e PHP 8.2+
- MySQL
- Blade, HTML, CSS e JavaScript
- Autenticação e autorização por perfis
- Dompdf para PDF, após avaliação
- Protótipo visual estático separado, com possível publicação na Vercel

A Vercel será usada para o protótipo estático, não como alojamento do backend Laravel com MySQL.

## Documentação
- [Documento mestre](docs/PROJECT_MASTER.md)
- [Arquitetura e fluxo](docs/ARCHITECTURE.md)
- [Registo de progresso](docs/PROJECT_LOG.md)
- [Repositórios e dependências](docs/REPOSITORIES.md)

## Princípios
- Inspecionar antes de alterar.
- Não substituir ficheiros sem autorização e comparação.
- Avaliar dependências antes de instalar.
- Não marcar etapas concluídas sem testes.
- Manter credenciais e ficheiros .env fora do Git.
- Construir primeiro uma base funcional simples.

## Próxima etapa
Criar Laravel 12 localmente, configurar MySQL com a base gpm-conecta, executar migrations e validar a instalação.