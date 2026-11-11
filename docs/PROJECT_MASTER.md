# GPM Conecta — Documento Mestre

- Versão: 2.0
- Estado: especificação funcional e visual aprovada; implementação em validação
- Repositório oficial: https://github.com/devlelo/gpm
- Branch principal: main
- Atualizado: 2026-11-11

## 1. Visão e posicionamento

GPM Conecta é uma plataforma B2B de pedidos de fornecimento empresarial. Liga empresas compradoras à operação de fornecimento da GPM e, progressivamente, a fornecedores e parceiros externos.

**Não é uma loja de pagamento imediato nem um marketplace de stock garantido.** O catálogo permite descobrir e selecionar produtos, mas a disponibilidade, preço final, prazo e condições precisam de validação comercial. O cliente apresenta uma intenção de compra; a GPM analisa e negocia; a encomenda só fica confirmada após ação humana autorizada.

Setores possíveis: construção, hotelaria, obras, escritórios, operações de alimentação profissional e outras necessidades empresariais.

### Objetivos
1. Apresentar a GPM e o seu catálogo.
2. Permitir que empresas submetam pedidos com produtos e quantidades.
3. Centralizar análise interna e consultas a fornecedores.
4. Criar propostas comerciais com versões e validade.
5. Registar a decisão do cliente separadamente da confirmação GPM.
6. Gerir encomendas confirmadas e acompanhamento.
7. Preparar a plataforma para integrações externas através de API, sem depender delas para o funcionamento inicial.

## 2. Identidade visual oficial

Direção: **04. Neo-Industrial Field Manual**, adaptada à identidade real da GPM Conecta.

| Cor | Código | Uso |
|---|---|---|
| Branco | `#FFFFFF` | Cor base, fundos e espaço de respiração |
| Azul-marinho | `#0A2945` | Cor dominante de estrutura, navegação, títulos e elementos principais |
| Dourado / castanho claro | `#CE9E53` | Destaques, indicadores e chamadas à ação |

Regras:
- Branco deve assegurar clareza e espaço visual.
- Azul-marinho é a cor estrutural dominante.
- Dourado é usado como acento, não como fundo dominante generalizado.
- Não introduzir outras cores dominantes que descaracterizem a marca.
- Cores funcionais pontuais para estados (por exemplo, erro ou sucesso) só podem ser usadas com moderação e sem substituir a paleta da marca.
- Não misturar estilos visuais incompatíveis nem redesenhar componentes aprovados sem autorização.

## 3. Perfis e permissões

| Perfil | Responsabilidade |
|---|---|
| Visitante | Consultar páginas públicas, categorias e produtos |
| Cliente empresarial | Gerir perfil, criar pedidos, consultar propostas e acompanhar encomendas da sua empresa |
| Operador GPM | Analisar pedidos, consultar fornecedores, preparar propostas e atualizar processos conforme permissões |
| Administrador | Gerir utilizadores, permissões, catálogo e configurações |
| Fornecedor externo | Futuro acesso restrito, apenas se aprovado; no início a GPM pode intermediar consultas |

O registo empresarial deverá recolher dados de identificação e contacto, incluindo NIF. Os campos exatos, validações e documentos obrigatórios carecem de decisão funcional antes de implementação.

## 4. Fluxo comercial oficial

### 4.1 Exploração livre
Qualquer visitante pode conhecer a GPM, navegar nas áreas de fornecimento, categorias e produtos.

### 4.2 Seleção
O visitante seleciona produtos, quantidades e observações e organiza um carrinho/lista de pedido. A seleção não reserva stock nem garante preço ou disponibilidade.

### 4.3 Registo e autenticação
Para submeter o pedido, o utilizador deve autenticar-se e completar o perfil empresarial, incluindo NIF e contactos necessários.

### 4.4 Submissão do pedido
O sistema cria referência única, regista cliente, linhas, quantidades, observações, data e histórico. O estado inicial é **Pedido enviado / A aguardar análise**. O envio não constitui aceitação nem compra concluída.

### 4.5 Análise humana pela GPM
Um funcionário analisa cada linha e pode:
- Consultar um ou vários fornecedores.
- Registar disponibilidade comunicada, preço de aquisição, prazo e condições.
- Pedir esclarecimentos ao cliente.
- Propor quantidade diferente ou produto equivalente.
- Registar custos adicionais e condições comerciais.

Dados não confirmados devem ser marcados como pendentes ou estimados, nunca apresentados como factos confirmados.

### 4.6 Conversa
A comunicação deve ficar associada ao pedido ou à proposta, com autor, data e histórico. O chat interno faz parte da visão funcional; a tecnologia e o momento de implementação serão definidos no plano.

### 4.7 Proposta comercial
A GPM prepara uma proposta com produtos/serviços, quantidades, preços, subtotais, custos aplicáveis, validade, prazo e condições. Cada revisão relevante gera nova versão; versões anteriores não são apagadas nem alteradas silenciosamente.

### 4.8 Decisão do cliente
O cliente pode aceitar a versão apresentada, rejeitar ou pedir alteração/esclarecimento. A aceitação é registada com utilizador, data e versão. **Aceitação do cliente não confirma automaticamente a encomenda.**

### 4.9 Confirmação comercial GPM
Um funcionário autorizado verifica condições, disponibilidade, quantidades, dados e pendências. Só então executa a ação explícita de confirmação. O sistema cria a encomenda confirmada ligada ao pedido e à versão aceite.

### 4.10 Preparação, envio e entrega
A equipa atualiza o acompanhamento com base em informação confirmada. Cliente consulta estados, documentos e histórico.

## 5. Estados de negócio

### Pedido
- draft
- submitted
- under_review
- awaiting_customer_info
- supplier_consultation
- proposal_prepared
- closed
- cancelled

### Consulta a fornecedor
- draft
- sent_manually
- sent_via_api (futuro)
- awaiting_response
- response_received
- no_response
- cancelled

### Proposta
- draft
- sent
- under_customer_review
- change_requested
- accepted_by_customer
- rejected
- expired
- superseded

### Encomenda
- pending_confirmation
- confirmed
- in_preparation
- dispatched
- delivered
- completed
- cancelled

**Invariante comercial:** pedido submetido, consulta respondida ou proposta aceite nunca se transforma automaticamente em encomenda confirmada. A confirmação é ação explícita, autorizada e auditável da GPM.

Cada mudança de estado relevante deve registar autor, data/hora, estado anterior, estado novo e motivo quando aplicável.

## 6. Painéis

### Portal do cliente
- Visão geral.
- Perfil e dados da empresa.
- Catálogo e novo pedido.
- Meus pedidos e respetivos estados.
- Propostas e respetivas versões.
- Conversas associadas a processos.
- Documentos comerciais.
- Encomendas confirmadas e acompanhamento.
- Histórico e possibilidade futura de repetir pedido.

O cliente só pode consultar registos da própria empresa e documentos a que tem acesso.

### Painel da equipa GPM
- Pedidos novos e fila de análise.
- Detalhe de pedido e linhas.
- Consultas e respostas de fornecedores.
- Registo de preços, disponibilidade, prazos e condições.
- Conversas e esclarecimentos.
- Criação e revisão de propostas.
- Registo da decisão do cliente.
- Confirmação de encomendas por utilizadores autorizados.
- Preparação, expedição, entrega e histórico.
- Gestão de clientes, catálogo, fornecedores e permissões.

## 7. Arquitetura e integrações

### Núcleo independente
O núcleo Laravel deve gerir clientes, catálogo, pedidos, consultas, propostas, decisões, encomendas, conversas, documentos e auditoria. Regras comerciais não podem ficar dependentes de um gateway ou fornecedor específico.

### Camada de integração futura
Preparar contratos/adaptadores para:
- Pagamentos e reconciliação.
- APIs de fornecedores e marketplaces.
- Logística e transportadoras.
- E-mail, SMS e notificações.
- Sistemas externos autorizados.

Integrações devem usar credenciais protegidas no servidor, validação de assinatura/autenticidade quando suportada, idempotência, registo de eventos, tratamento de falhas e possibilidade de repetição segura. Webhooks não podem alterar diretamente dados comerciais sem validação e regras de domínio.

### Fases
1. **Inicial:** operação manual pela equipa GPM; pedidos, consultas registadas, negociação, propostas, confirmação e acompanhamento.
2. **Evolução:** avaliar gateway angolano e automatizar pagamentos após validação comercial e requisitos contratuais.
3. **Expansão:** conectores de fornecedores, marketplaces, logística e automações.

A aplicação deve continuar operacional manualmente quando uma API externa estiver indisponível. Nenhum gateway, fornecedor, framework de e-commerce ou integração está aprovado sem decisão registada.

## 8. Tecnologia e estrutura

- Laravel 12.
- PHP 8.2+.
- MySQL como base de dados principal.
- Blade para templates.
- HTML, CSS e JavaScript para interface.
- Migrations versionadas.
- Validação no servidor, Policies/Gates e testes automatizados.
- Protótipo estático HTML/CSS/JS separado para aprovação visual; Vercel pode alojar esse protótipo, não o backend Laravel/MySQL.

Seguir convenções Laravel: Models, Controllers, Form Requests, Policies, Services/Actions quando justificados, migrations, seeders, Blade e testes. Evitar módulos ou abstrações excessivas antes de existir necessidade comprovada.

## 9. Integridade, segurança e documentos

- Nunca publicar `.env`, chaves, passwords, tokens ou credenciais.
- Recalcular totais e validar preços no servidor.
- Preservar fotografia histórica de preços, quantidades, impostos, transporte e condições da proposta/encomenda.
- Cada proposta deve ter versão, validade e responsável.
- Cada encomenda confirmada deve apontar para pedido e versão de proposta.
- Aplicar autorização no servidor; esconder botões não é segurança.
- Clientes só consultam dados da própria empresa.
- Operadores só executam ações permitidas pelo seu papel.
- Webhooks futuros devem ser autenticados, idempotentes e auditados.
- Uploads devem validar tipo, tamanho e armazenamento.
- Cancelamentos e alterações críticas preservam histórico.

## 10. Plano de execução e estado

| Fase | Entrega | Critério de conclusão | Estado |
|---|---|---|---|
| 0 | Documentação e regras | Documentos revistos e registados no GitHub | Concluída |
| 1 | Base Laravel e MySQL | Instalação, ligação MySQL e migrations testadas | Em validação local |
| 2 | Storefront público inicial | Home e catálogo Blade criados na branch `feat/gpm-spree-storefront`; validação local e aprovação visual pendentes | Em validação |
| 3 | Autenticação e empresas | Registo, login, perfis e permissões testados | Por iniciar |
| 4 | Catálogo e seleção | Categorias, produtos, quantidades e lista de pedido testados | Por iniciar |
| 5 | Pedidos e análise | Submissão, fila interna, histórico e estados testados | Por iniciar |
| 6 | Fornecedores e propostas | Consultas, respostas, versões e decisões testadas | Por iniciar |
| 7 | Confirmação e acompanhamento | Apenas GPM autorizado confirma; estados e auditoria testados | Por iniciar |
| 8 | Conversas e documentos | Acesso, histórico e PDFs validados | Por iniciar |
| 9 | APIs e integrações | Contratos, segurança, idempotência e fallback testados | Futuro |
| 10 | Produção | Hosting, HTTPS, backups, monitorização e segurança verificados | Por iniciar |

Uma fase só pode ser marcada como concluída após evidência de teste e atualização do PROJECT_LOG.md.

## 11. Decisões pendentes

- Campos finais e documentos do perfil empresarial.
- Regras fiscais, impostos, descontos, transporte e margens.
- Numeração e validade de pedidos/propostas/encomendas.
- Política de confirmação, cancelamento e expiração.
- Solução técnica de chat e documentos.
- Gateway angolano, contratos e taxas.
- APIs e fornecedores autorizados.
- Alojamento, backups e retenção de dados.
- Adoção ou não de Aimeos, Lunar, Bagisto ou outro pacote.

## 12. Governação e alterações

A documentação e a cláusula de controlo em [CHANGE_CONTROL.md](CHANGE_CONTROL.md) são obrigatórias. Nenhuma decisão aprovada pode ser alterada sem documentação e autorização explícita do responsável pelo projeto. Se houver dúvida, conflito ou necessidade de alteração, parar e pedir autorização antes de executar.



## 12. Direção visual atualizada — 2026-11-11

Esta decisão substitui a direção visual Neo-Industrial Field Manual anteriormente registada na secção 2. A direção visual aprovada passa a ser **marketplace B2B convencional, simples, branco e neutro**, com uso pontual das cores oficiais.

- Branco `#FFFFFF`: base dominante e superfícies principais.
- Azul-marinho `#0A2945`: navegação, títulos, botões primários e elementos de confiança.
- Dourado `#CE9E53`: acentos pequenos, etiquetas e indicadores pontuais.
- Cinzas muito claros: superfícies secundárias, separadores e bordas discretas.
- Estrutura familiar: cabeçalho simples, navegação clara, descoberta do catálogo, cartões e filtros quando houver dados reais.
- Tipografia legível, cantos discretos e sombras suaves.
- Evitar fundos escuros extensos, grafismos técnicos decorativos, efeitos glow e animações sem função.

A experiência deve parecer imediatamente familiar a quem já utiliza marketplaces, mas respeitar o modelo comercial GPM: o pedido é uma solicitação sujeita a consulta e validação humana, não uma compra com stock ou preço garantido.
