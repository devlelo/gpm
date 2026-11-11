# GPM Conecta — Política Obrigatória de Controlo de Alterações

- Versão: 1.0
- Estado: aprovada pelo responsável do projeto
- Aplicação: todos os colaboradores, agentes de IA, programadores e contribuidores
- Repositório: https://github.com/devlelo/gpm
- Data de aprovação: 2026-11-11

## 1. Regra principal

**Nenhuma alteração relevante ao GPM Conecta pode ser executada por iniciativa própria, sem estar documentada e sem autorização explícita do responsável pelo projeto.**

Quando uma alteração não estiver claramente autorizada, quem estiver a desenvolver deve parar, explicar a necessidade e pedir autorização antes de modificar código, documentação, interface, arquitetura ou configuração.

Esta regra é obrigatória para pessoas e ferramentas automatizadas/assistentes de IA.

## 2. O que exige autorização prévia

É obrigatório documentar e obter autorização antes de:
- Alterar, remover ou acrescentar funcionalidades ou módulos ao âmbito aprovado.
- Alterar o fluxo comercial, estados, regras de confirmação ou permissões.
- Alterar as cores oficiais, tipografia, direção visual, layout aprovado ou identidade da marca.
- Trocar Laravel, PHP, MySQL, estrutura de aplicação ou estratégia de alojamento.
- Adotar, remover ou atualizar dependências de forma que altere compatibilidade, comportamento ou arquitetura.
- Adotar Aimeos, Lunar, Bagisto, Filament, gateways, APIs, serviços externos ou código de terceiros.
- Alterar schema da base de dados, migrations, relações, constraints ou dados persistidos.
- Alterar contratos de API, webhooks, integrações, autenticação ou segurança.
- Apagar, renomear, mover ou substituir ficheiros existentes.
- Refatorar ou redesenhar partes já aprovadas, mesmo que a alteração pareça uma melhoria.
- Alterar decisões já registadas neste documento, no Documento Mestre ou na Arquitetura.

## 3. Como uma alteração pode ser autorizada

Uma alteração só pode avançar por uma destas vias:

1. **Comando explícito do responsável:** o responsável descreve diretamente a alteração pretendida. O pedido deve ser suficientemente claro para identificar o que pode mudar.
2. **Autorização após pedido:** o responsável é informado sobre a alteração proposta, motivo, impacto e ficheiros/módulos afetados, e dá autorização explícita.
3. **Alteração previamente documentada e aprovada:** a alteração já consta de uma decisão aprovada e do plano de execução.

Se o pedido for ambíguo, contraditório com uma decisão anterior ou tiver impacto não mencionado, deve ser solicitada clarificação. Silêncio, conveniência técnica ou uma sugestão anterior não equivalem a autorização.

## 4. Documentação obrigatória antes da execução

Antes de executar uma alteração relevante:
1. Registar a proposta em `PROJECT_LOG.md` ou criar uma decisão específica.
2. Descrever motivo, objetivo, âmbito, ficheiros/módulos afetados, riscos e impacto em compatibilidade.
3. Identificar se altera design, fluxo, arquitetura, base de dados, segurança ou dependências.
4. Obter autorização explícita do responsável.
5. Só então implementar.

Para alterações de pequena manutenção já autorizadas, registar a execução no `PROJECT_LOG.md` com ficheiros, motivo e testes.

## 5. Documentação obrigatória depois da execução

Depois de autorizada e implementada:
- Atualizar `PROJECT_MASTER.md` se alterar âmbito, requisitos ou decisões.
- Atualizar `ARCHITECTURE.md` se alterar arquitetura, entidades, integrações ou regras.
- Atualizar `REPOSITORIES.md` se adicionar/remover dependências, repositórios ou serviços.
- Atualizar `PROJECT_LOG.md` com autorização, alterações, testes, resultado e pendências.
- Atualizar esta política apenas mediante autorização explícita.

Nunca marcar uma tarefa como concluída sem executar os testes aplicáveis e registar evidência. Se não foi possível testar, declarar claramente **implementado, não testado** ou **pendente de validação**.

## 6. Proteção de trabalho existente

- Não sobrescrever ficheiros existentes sem os ler e compreender.
- Não remover código funcional para simplificar uma implementação.
- Não substituir uma implementação aprovada por uma alternativa sem autorização.
- Preservar histórico Git e usar commits claros.
- Não publicar segredos, `.env`, tokens, passwords ou credenciais.
- Não executar comandos destrutivos em bases de dados ou ficheiros sem autorização explícita e confirmação do impacto.
- Em caso de conflito, parar e apresentar opções ao responsável.

## 7. Hierarquia das decisões

Em caso de conflito, seguir esta ordem:
1. Instrução explícita mais recente do responsável pelo projeto.
2. Alterações formalmente autorizadas e registadas.
3. Este documento e os documentos de especificação aprovados.
4. Código existente e convenções técnicas do projeto.

Uma instrução técnica genérica, preferência do programador ou recomendação de ferramenta não revoga uma decisão aprovada.

## 8. Confirmação obrigatória antes de agir

Sempre que houver dúvida sobre autorização, a pergunta deve ser direta: **"Esta alteração modifica [itens afetados]. Autorizas que eu avance e atualize a documentação?"**

Até receber resposta afirmativa, não executar a alteração.

---

**Esta política é vinculativa para todo o desenvolvimento futuro do GPM Conecta.**
