# GPM Conecta — Documento Mestre

- Versão: 1.0
- Estado: planeamento inicial
- Repositório oficial: https://github.com/devlelo/gpm
- Branch: main
- Data: 2026-11-11

## 1. Visão
O GPM Conecta é uma plataforma B2B que liga empresas compradoras a fornecedores e centraliza descoberta de produtos, pedidos de cotação, preparação de propostas, revisão pelo cliente e confirmação de encomendas pela equipa GPM.

Deve servir setores profissionais como construção, hotelaria, obras, escritórios e operações de alimentação profissional, sem ficar limitado a um único tipo de estabelecimento.

### Objetivos
1. Facilitar descoberta de produtos e fornecedores.
2. Permitir pedidos comerciais organizados.
3. Centralizar análise e resposta aos pedidos.
4. Permitir propostas com condições e versões.
5. Separar aceitação comercial da confirmação operacional.
6. Dar à equipa GPM ferramentas de gestão.
7. Dar ao cliente área de acompanhamento e histórico.

### Fora do MVP
Gateway de pagamento, integração automática com fornecedores, logística avançada, SMS, envio automático de e-mail e integrações externas complexas. Avaliar depois do núcleo funcional.

## 2. Perfis
| Perfil | Responsabilidade |
|---|---|
| Visitante | Consultar páginas públicas, categorias e catálogo |
| Cliente empresarial | Gerir perfil, criar pedidos, consultar propostas e encomendas |
| Operador GPM | Analisar pedidos, consultar fornecedores, preparar propostas e gerir encomendas |
| Administrador | Gerir utilizadores, permissões, catálogo e configurações |

Portal de fornecedor com login fica para decisão posterior. No MVP, a equipa GPM poderá intermediar consultas e registar respostas.

## 3. Fluxo comercial completo

### 3.1 Descoberta e registo
1. Visitante consulta categorias e produtos.
2. Para submeter pedido, cria conta empresarial.
3. Preenche dados da empresa e contacto responsável.
4. Sistema valida os campos obrigatórios e cria perfil do cliente.

### 3.2 Pedido de cotação
1. Cliente seleciona produtos e quantidades ou descreve necessidade.
2. Confirma os dados e submete pedido.
3. Sistema regista identificador, data, cliente e linhas.
4. Pedido fica disponível para triagem GPM.

O pedido não é encomenda confirmada nem venda concluída.

### 3.3 Análise e fornecedores
1. Equipa GPM revê produtos, quantidades e requisitos.
2. Quando necessário, consulta um ou mais fornecedores.
3. Regista preços, disponibilidade comunicada, prazos e condições.
4. Solicita esclarecimentos se faltarem dados.

Não inventar disponibilidade, preços ou prazos. Informação não confirmada deve ser identificada como pendente ou estimativa.

### 3.4 Proposta
1. Equipa prepara proposta com linhas, quantidades, preços, totais, validade e condições.
2. Envia para análise do cliente.
3. Alterações relevantes geram nova versão rastreável; não apagar versões anteriores.

### 3.5 Decisão do cliente
Cliente pode aceitar, pedir alterações/esclarecimentos ou rejeitar. A aceitação regista a decisão do cliente, mas não confirma automaticamente a encomenda.

### 3.6 Confirmação
1. Equipa GPM autorizada verifica aceitação, condições, quantidades e dados operacionais.
2. Resolve pendências.
3. Confirma formalmente a encomenda.
4. Sistema cria encomenda associada ao pedido e à versão da proposta.
5. Cliente acompanha a encomenda.

### 3.7 Acompanhamento
Cliente consulta estados, datas, documentos e histórico. A equipa atualiza estados com base em informação confirmada.

## 4. Estados de negócio

### Pedido de cotação
- rascunho
- submetido
- em análise
- aguarda informação
- em consulta a fornecedores
- proposta preparada
- encerrado
- cancelado

### Proposta
- rascunho
- enviada
- em análise pelo cliente
- alteração solicitada
- aceite pelo cliente
- rejeitada
- expirada
- substituída por nova versão

### Encomenda
- pendente de confirmação
- confirmada
- em preparação
- parcialmente processada (se aplicável)
- concluída
- cancelada

**Invariante:** pedido submetido ou proposta aceite nunca se transforma automaticamente em encomenda confirmada. A confirmação é ação explícita e auditável da equipa autorizada.

## 5. Módulos

### MVP
1. Site público e catálogo.
2. Categorias e produtos.
3. Registo, autenticação e perfil empresarial.
4. Carrinho/lista de produtos para pedido.
5. Submissão e gestão de pedidos de cotação.
6. Área de trabalho da equipa GPM.
7. Consulta e registo de fornecedores.
8. Preparação e envio de propostas.
9. Histórico e versões de propostas.
10. Aceitação, pedido de alteração ou rejeição.
11. Confirmação e acompanhamento de encomendas.
12. Histórico do cliente e documentos básicos.

### Pós-MVP
- Área de fornecedor com acesso próprio.
- Mensagens internas e anexos.
- Repetição de pedidos.
- PDFs com identidade visual.
- Notificações por e-mail/SMS.
- Pagamentos, logística e APIs de fornecedores.
- Relatórios avançados.

## 6. Arquitetura e tecnologia
- Laravel 12 como backend.
- PHP 8.2 como versão local de partida.
- MySQL como base de dados principal.
- Blade para páginas.
- HTML, CSS e JavaScript para interface.
- Validação no servidor.
- Autorização por perfil e propriedade dos registos.
- Testes automatizados para regras comerciais.

Dompdf é uma opção para PDFs; instalar apenas quando os primeiros documentos estiverem definidos e a compatibilidade for verificada.

### Protótipo
HTML/CSS/JS estático separado para revisão visual e possível publicação na Vercel. Não tratar Vercel como backend Laravel/MySQL.

### Produção
Alojamento deverá suportar PHP/Laravel, MySQL, armazenamento persistente, HTTPS, backups e tarefas agendadas quando necessárias. Fornecedor ainda não escolhido.

## 7. Direção visual inicial
Referência aprovada: **Neo-Industrial Field Manual**.
- Branco: #FFFFFF
- Azul-marinho: #0A2945
- Dourado: #CE9E53

Transmitir organização, confiança comercial e clareza. Não copiar modelos genéricos nem misturar estilos sem decisão explícita. Interface responsiva e consistente.

## 8. Estrutura técnica prevista
Seguir convenções Laravel:
- app/Models — entidades e regras de domínio.
- app/Http/Controllers — controladores.
- app/Http/Requests — validação.
- app/Policies — autorização.
- database/migrations — evolução da BD.
- database/seeders — dados de desenvolvimento.
- resources/views — Blade.
- resources/css e resources/js — assets.
- routes/web.php — rotas.
- tests/Feature e tests/Unit — testes.
- docs — documentação.

Não criar estrutura paralela que contrarie as convenções do framework.

## 9. Segurança e integridade
- Nunca guardar credenciais reais no Git.
- Manter .env fora do controlo de versão.
- Validar dados no servidor.
- Aplicar CSRF nas operações web com sessão.
- Usar hashing seguro de palavras-passe via Laravel.
- Restringir clientes aos próprios registos.
- Aplicar autorização nos endpoints, não apenas esconder botões.
- Registar autor/data em alterações críticas.
- Validar uploads por tipo, tamanho e localização.
- Recalcular totais no servidor.
- Não expor dados comerciais de outros clientes.

## 10. Plano e critérios de conclusão
| Fase | Entrega | Critério | Estado |
|---|---|---|---|
| 0 | Documentação | Fluxo, âmbito, arquitetura e regras registados | Em curso |
| 1 | Base Laravel | Laravel inicia, MySQL ligado e migrations executadas | Por iniciar |
| 2 | Protótipo visual | Páginas revistas e aprovadas | Por iniciar |
| 3 | Autenticação | Registo, login, logout e permissões testados | Por iniciar |
| 4 | Catálogo | Categorias e produtos geridos corretamente | Por iniciar |
| 5 | Pedidos | Cliente cria e equipa gere pedidos com estados testados | Por iniciar |
| 6 | Fornecedores/propostas | Consultas, propostas e versões rastreáveis | Por iniciar |
| 7 | Encomendas | Aceitação separada da confirmação; fluxo testado | Por iniciar |
| 8 | Área cliente/documentos | Histórico e acompanhamento validados | Por iniciar |
| 9 | Segurança/QA | Testes de autorização, validação e regressão aprovados | Por iniciar |
| 10 | Produção | Hosting, backups, HTTPS e configuração verificados | Por iniciar |

Só concluir fase após validar critérios e registar resultados em PROJECT_LOG.md.

## 11. Decisões pendentes
- Campos do perfil empresarial.
- Login de fornecedores no MVP ou gestão interna.
- Regras de validade, impostos, descontos e transporte.
- Numeração de pedidos, propostas e encomendas.
- Estados operacionais finais.
- Formato dos PDFs.
- Alojamento e backups.
- Retenção de documentos e dados.

## 12. Manutenção
Quando uma decisão mudar: atualizar esta referência, registar motivo/data no PROJECT_LOG.md e ajustar arquitetura/plano. Preservar histórico de decisões.