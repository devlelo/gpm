# GPM Conecta — Arquitetura e Fluxo Funcional

- Versão: 1.0
- Estado: arquitetura conceptual; ainda não implementada
- Referência: [PROJECT_MASTER.md](PROJECT_MASTER.md)

## 1. Camadas
**Interface:** site público/catálogo, área autenticada do cliente, painel interno GPM e futuro portal de fornecedor (sujeito a aprovação).

**Aplicação:** rotas web e controladores Laravel, Form Requests, Policies/Gates, Models e serviços de domínio. Eventos e notificações só depois de o fluxo estar definido.

**Persistência:** MySQL. Alterações de estrutura através de migrations versionadas. Relações e restrições devem proteger a integridade comercial.

## 2. Entidades conceptuais
| Entidade | Responsabilidade |
|---|---|
| User | Credenciais e identidade de acesso |
| Company | Dados da empresa cliente |
| Category | Organização do catálogo |
| Product | Produto e informação comercial |
| Supplier | Dados de fornecedores |
| QuoteRequest | Pedido de cotação do cliente |
| QuoteRequestItem | Produtos, quantidades e observações |
| SupplierInquiry | Consulta enviada a fornecedor |
| SupplierResponse | Resposta e condições comunicadas |
| Proposal | Proposta comercial associada ao pedido |
| ProposalVersion | Revisões rastreáveis da proposta |
| ProposalItem | Linhas e valores de uma versão |
| ProposalDecision | Aceitação, rejeição ou pedido de alteração |
| Order | Encomenda formalmente confirmada |
| OrderItem | Linhas da encomenda |
| ActivityLog | Registo de ações relevantes |

Nomes, cardinalidades, exclusões e soft deletes serão definidos antes das migrations.

## 3. Relações principais
- Uma empresa pode ter vários utilizadores autorizados.
- Uma empresa pode criar vários pedidos.
- Um pedido contém uma ou mais linhas.
- Um pedido pode originar consultas a fornecedores.
- Um pedido pode originar várias versões de proposta.
- Cada versão contém as suas linhas e condições.
- A decisão do cliente refere-se à versão analisada.
- A encomenda confirmada aponta para o pedido e versão da proposta que lhe deu origem.
- Cliente só consulta registos da sua empresa, salvo permissões internas expressas.

## 4. Estados e transições

### Pedido
draft → submitted → under_review → supplier_consultation → proposal_prepared

Desvios possíveis: awaiting_customer_info, closed, cancelled.

### Proposta
draft → sent → under_customer_review

Decisões:
- accepted_by_customer
- change_requested → criar nova versão e reenviar
- rejected
- expired

Proposta enviada não deve ser silenciosamente editada. Alteração relevante cria revisão identificável e preserva a anterior.

### Encomenda
Criada/confirmada apenas por ação autorizada:
pending_confirmation → confirmed → processing → completed

Cancelamento sujeito a regras e permissões.

## 5. Regras de integridade
1. Pedido de cotação não é venda.
2. Proposta enviada não é encomenda.
3. Aceitação do cliente não é confirmação operacional.
4. Apenas utilizador interno autorizado confirma encomenda.
5. Encomenda preserva preços, quantidades e condições confirmados.
6. Histórico de versões e decisões permanece consultável.
7. Totais são recalculados no servidor.
8. Disponibilidade e prazos não confirmados são identificados como pendentes/estimados.
9. Ações críticas guardam autor e data.
10. Cancelamentos não apagam histórico comercial.

## 6. Controlo de acesso
- Visitante: recursos públicos.
- Cliente empresarial: operações da própria empresa.
- Operador GPM: gestão operacional conforme permissões.
- Administrador: gestão global e acessos.
- Fornecedor (futuro): apenas consultas/respostas atribuídas.

Autorização no servidor; ocultar botões não é segurança.

## 7. Navegação prevista

### Público
Início, Catálogo, Categorias, Detalhe do produto, Sobre/Contacto, Entrar/Criar conta.

### Cliente
Visão geral, Perfil da empresa, Catálogo, Novo pedido, Meus pedidos, Propostas, Encomendas, Histórico/Documentos.

### Equipa GPM
Painel operacional, Pedidos recebidos, Pedidos em análise, Consultas a fornecedores, Propostas, Encomendas, Clientes, Fornecedores, Produtos/Categorias, Utilizadores/Permissões.

## 8. Sequência de implementação
1. Criar Laravel e validar ambiente.
2. Configurar MySQL e migrations base.
3. Definir utilizadores, empresas e permissões.
4. Implementar autenticação e perfil empresarial.
5. Implementar catálogo.
6. Implementar pedido e linhas.
7. Implementar gestão interna e consultas.
8. Implementar propostas e versões.
9. Implementar decisão do cliente.
10. Implementar confirmação/acompanhamento.
11. Implementar histórico, documentos e testes.

## 9. Testes críticos
- Cliente não consulta pedido de outra empresa.
- Visitante não executa operações autenticadas.
- Cliente não confirma a própria encomenda.
- Aceitar proposta não cria encomenda confirmada automaticamente.
- Nova versão não apaga anterior.
- Alterar valores no navegador não manipula totais persistidos.
- Pedido cancelado não avança sem reabertura autorizada.
- Encomenda guarda a versão de proposta confirmada.