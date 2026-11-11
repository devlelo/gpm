# GPM Conecta — Repositórios, Dependências e Integrações

## 1. Repositório oficial

| Item | Valor |
|---|---|
| Projeto | GPM Conecta |
| Repositório | https://github.com/devlelo/gpm |
| Branch principal | main |
| Responsabilidade | Aplicação Laravel, protótipo aprovado e documentação |

Este repositório é a fonte oficial do projeto. Outros repositórios podem ser usados apenas como referência, protótipo ou dependência aprovada e devem ser registados aqui.

## 2. Base tecnológica

| Tecnologia | Finalidade | Estado |
|---|---|---|
| Laravel 12 | Backend e aplicação | Instalado localmente segundo confirmação do responsável; código-base enviado ao repositório e sujeito a validação contínua |
| PHP 8.2+ | Runtime | PHP 8.2.12 reportado no ambiente local |
| MySQL | Base de dados principal | Escolhido; ligação e migrations ainda carecem de confirmação documentada |
| Blade | Templates | Disponível no Laravel |
| HTML/CSS/JavaScript | Interface | Planeado |
| Dompdf | PDFs | Candidato; não instalado/aprovado |
| Filament / Breeze | Administração/autenticação | Não selecionados |

## 3. Referência visual e licença\n\n| Recurso | Utilização | Estado |\n|---|---|---|\n| [Spree Storefront](https://github.com/spree/storefront) | Referência de UX para estrutura de storefront, descoberta de catálogo, navegação e portal B2B | Padrões adaptados para Blade; não instalado como dependência nem usado como backend |\n\nA implementação GPM mantém Laravel/Blade/MySQL e o fluxo comercial próprio. O aviso de licença MIT consultado foi preservado em `licenses/SPREE-STOREFRONT-MIT.txt`. A adaptação atual não importa o runtime Next.js/React nem o checkout do Spree.\n\n## 4. Curadoria de plataformas e pacotes

Aimeos, Lunar e Bagisto foram mencionados como candidatos de avaliação. **Nenhum está aprovado ou instalado.** Antes de qualquer adoção, comparar versão compatível com Laravel 12, licença, dependências, arquitetura, segurança, testes, extensão do fluxo de pedidos e custo de manutenção. A decisão exige autorização e registo.

Não incorporar código de terceiros sem verificar origem, licença e compatibilidade. Não substituir o núcleo comercial da GPM por um pacote de loja sem demonstrar que respeita a validação humana e a separação entre pedido, proposta e encomenda.

## 5. Integrações previstas — não aprovadas

| Área | Candidatos / objetivo | Estado |
|---|---|---|
| Pagamentos Angola | AppyPay, G-Pay Go, Gateway oficial Multicaixa e alternativas a pesquisar | Avaliação futura; nenhum selecionado |
| Fornecedores | APIs de fornecedores e marketplaces | Futuro; operação manual inicial |
| Logística | Transportadoras e parceiros | Futuro |
| Comunicação | SMS, e-mail e notificações | Futuro |

A seleção exige análise de documentação técnica, contrato, taxas, requisitos de adesão, segurança, suporte, ambiente de testes e condições de liquidação. Não guardar credenciais em código ou no Git.

## 6. Protótipo e alojamento

- Protótipo visual estático HTML/CSS/JS pode ser publicado na Vercel para revisão.
- Vercel não deve ser tratado como alojamento do backend Laravel/MySQL deste projeto.
- Produção exige PHP/Laravel, MySQL, HTTPS, armazenamento persistente, backups e tarefas agendadas conforme necessidade.
- Alojamento ainda não selecionado.

## 7. Registo de adoção

Para cada pacote, repositório ou serviço aprovado, registar:
- Nome, URL e responsável.
- Finalidade e módulos usados.
- Versão fixada.
- Licença e obrigações.
- Compatibilidade e dependências.
- Data e evidência da avaliação.
- Riscos e plano de atualização.
- Autorização do responsável pelo projeto.

