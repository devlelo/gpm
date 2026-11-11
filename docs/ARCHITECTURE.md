# GPM Conecta — Arquitetura e Fluxo Funcional

- Versão: 2.0
- Estado: arquitetura conceptual; ainda não implementada
- Referência: [PROJECT_MASTER.md](PROJECT_MASTER.md)
- Controlo de alterações: [CHANGE_CONTROL.md](CHANGE_CONTROL.md)

## 1. Princípio arquitetural

O GPM Conecta é uma plataforma de pedidos empresariais com validação comercial humana. Não é checkout de compra imediata. O núcleo de domínio deve permanecer independente de gateways, fornecedores, marketplaces e transportadoras externas.

A implementação inicial funciona manualmente. Integrações são adicionadas por adaptadores, após aprovação e testes, sem alterar o significado dos estados comerciais.

## 2. Camadas

**Apresentação**
- Website institucional e catálogo público.
- Portal autenticado do cliente empresarial.
- Painel interno da equipa GPM.
- Futuro portal de fornecedor, sujeito a autorização.

**Aplicação / domínio**
- Autenticação e autorização.
- Empresas e utilizadores.
- Catálogo.
- Pedidos e linhas.
- Consultas a fornecedores.
- Propostas e versões.
- Decisões do cliente.
- Encomendas confirmadas.
- Conversas, documentos e auditoria.

**Integrações**
- Contratos e adaptadores de pagamento.
- Conectores de fornecedores/marketplaces.
- Conectores logísticos.
- Canais de comunicação/notificações.
- Webhooks e tarefas assíncronas quando necessários.

**Persistência**
- MySQL.
- Migrations versionadas.
- Registos de auditoria e eventos de integração.
- Armazenamento seguro de documentos.

## 3. Entidades conceptuais

| Entidade | Responsabilidade |
|---|---|
| User | Credenciais e identidade de acesso |
| Company | Dados da empresa cliente |
| CompanyUser | Associação e papel de utilizadores numa empresa, se houver múltiplos utilizadores |
| Category | Organização do catálogo |
| Product | Produto e informação de catálogo |
| Supplier | Dados de fornecedores |
| QuoteRequest | Pedido submetido pelo cliente |
| QuoteRequestItem | Produto, quantidade e observações solicitadas |
| SupplierInquiry | Consulta enviada/registada para fornecedor |
| SupplierInquiryItem | Linhas consultadas, quando necessário |
| SupplierResponse | Disponibilidade comunicada, preço, prazo e condições |
| Proposal | Proposta comercial ligada ao pedido |
| ProposalVersion | Versão imutável de uma proposta |
| ProposalItem | Linhas, quantidades e valores de uma versão |
| ProposalDecision | Aceitação, rejeição ou pedido de alteração do cliente |
| Order | Encomenda formalmente confirmada pela GPM |
| OrderItem | Fotografia das linhas confirmadas |
| Conversation / Message | Conversa e mensagens associadas a pedido/proposta |
| Document | Orçamento, proforma ou documento associado |
| IntegrationEvent | Eventos externos, estado, idempotência e tentativas |
| ActivityLog | Ações relevantes, autor, data e alterações |

O modelo físico, cardinalidades, constraints e políticas de retenção devem ser definidos antes das migrations de domínio.

## 4. Relações principais

- Uma empresa pode ter vários utilizadores, sujeitos a permissões.
- Uma empresa pode criar vários pedidos.
- Um pedido contém uma ou mais linhas.
- Um pedido pode originar várias consultas a fornecedores.
- Uma consulta pode receber respostas e condições registadas.
- Um pedido pode originar várias propostas ou versões.
- Uma versão contém linhas e condições congeladas.
- A decisão do cliente aponta para a versão exata analisada.
- Uma encomenda confirmada aponta para pedido e versão aceite.
- Conversas e documentos ficam associados ao processo correto.
- Cliente só consulta registos da própria empresa.

## 5. Estados e transições

### Pedido
`draft → submitted → under_review`
Possíveis transições: `awaiting_customer_info`, `supplier_consultation`, `proposal_prepared`, `closed`, `cancelled`.

### Consulta a fornecedor
`draft → sent_manually / sent_via_api → awaiting_response → response_received`
Estados auxiliares: `no_response`, `cancelled`. A consulta via API é futura; a consulta manual é o ponto de partida.

### Proposta
`draft → sent → under_customer_review`
Decisões: `accepted_by_customer`, `change_requested`, `rejected`, `expired`, `superseded`. Alteração relevante cria nova versão; nunca sobrescrever silenciosamente a versão enviada.

### Encomenda
Criada apenas por ação interna autorizada:
`pending_confirmation → confirmed → in_preparation → dispatched → delivered → completed`
Cancelamento segue regras e permissões específicas.

**Regra inegociável:** pedido enviado, resposta de fornecedor ou aceitação do cliente não cria encomenda confirmada automaticamente. A confirmação é ação explícita da GPM, com autor e data.

## 6. Regras de integridade

1. Pedido de cotação não é venda nem reserva de stock.
2. Preço/disponibilidade do catálogo não são garantia de fornecimento.
3. Proposta enviada não é encomenda.
4. Aceitação do cliente não é confirmação operacional.
5. Apenas utilizador interno autorizado confirma encomenda.
6. Encomenda preserva preços, quantidades, impostos, custos e condições confirmados.
7. Versões e decisões permanecem consultáveis.
8. Totais são calculados no servidor.
9. Disponibilidade/prazos não confirmados são marcados como pendentes ou estimados.
10. Ações críticas guardam autor, data/hora e motivo quando aplicável.
11. Cancelamentos não apagam histórico comercial.

## 7. Controlo de acesso

- Visitante: recursos públicos.
- Cliente empresarial: apenas registos e documentos da própria empresa.
- Operador GPM: operações atribuídas pelas permissões.
- Administrador: gestão global.
- Fornecedor (futuro): somente consultas e dados explicitamente atribuídos.

Autorização é aplicada no servidor por Policies/Gates ou mecanismo equivalente. Ocultar elementos na interface não é controlo de segurança.

## 8. Integrações externas

Cada integração deve implementar um contrato interno definido pela GPM, para que o domínio não dependa do SDK ou API de uma empresa específica.

Requisitos mínimos:
- Credenciais e segredos apenas no servidor.
- Configuração por ambiente.
- Autenticação/validação de webhooks conforme o fornecedor.
- Idempotência para impedir processamento duplicado.
- Registo de payload relevante com cuidado para não guardar segredos/dados excessivos.
- Estados de tentativa, sucesso, falha e repetição.
- Timeouts e tratamento de indisponibilidade.
- Fallback para operação manual.
- Nenhum evento externo confirma uma encomenda sem as regras e autorizações internas.

Integrações previstas, ainda não aprovadas: gateways angolanos, APIs de fornecedores/marketplaces, logística, SMS/e-mail.

## 9. Navegação prevista

### Público
Início, Catálogo, Áreas/Categorias, Detalhe do produto, Sobre/Contacto, Entrar/Criar conta.

### Cliente
Painel, Perfil da empresa, Catálogo, Novo pedido, Meus pedidos, Detalhe e conversa, Propostas/versões, Encomendas, Documentos e Histórico.

### Equipa GPM
Painel operacional, Pedidos recebidos, Análise, Consultas a fornecedores, Respostas, Propostas, Decisões, Confirmação, Encomendas, Clientes, Fornecedores, Produtos/Categorias, Utilizadores e permissões.

## 10. Sequência de implementação

1. Validar Laravel, MySQL e migrations base.
2. Aprovar protótipo visual.
3. Definir Company, User, papéis e permissões.
4. Implementar autenticação e perfil empresarial.
5. Implementar catálogo e seleção.
6. Implementar pedidos e análise interna.
7. Implementar consultas e respostas de fornecedores.
8. Implementar propostas, versões e decisões.
9. Implementar confirmação e acompanhamento de encomendas.
10. Implementar conversas, documentos e auditoria.
11. Só depois avaliar integrações externas aprovadas.

## 11. Testes críticos

- Cliente não consulta pedido de outra empresa.
- Visitante não executa operações autenticadas.
- Cliente não confirma a própria encomenda.
- Aceitar proposta não cria encomenda confirmada automaticamente.
- Nova versão não apaga versão anterior.
- Alterar valores no navegador não manipula totais persistidos.
- Pedido cancelado não avança sem reabertura autorizada.
- Encomenda guarda a versão de proposta confirmada.
- Webhook duplicado não duplica operação.
- Falha de integração não bloqueia a operação manual.
- Credenciais externas nunca aparecem em respostas, logs públicos ou repositório.
