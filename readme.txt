=== WhatJobs Feeder ===
Contributors: seuusuario
Tags: jobs, whatjobs, wp-job-manager, import, automation
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 8.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Plugin para importar vagas automaticamente do WhatJobs API para o WP Job Manager.

== Description ==

O WhatJobs Feeder é um plugin WordPress que permite importar vagas de emprego automaticamente do WhatJobs API diretamente para o seu site usando o WP Job Manager.

**Principais funcionalidades:**

* Importação automática de vagas do WhatJobs API
* Integração nativa com WP Job Manager
* Criação de feeds personalizados com filtros
* Execução automática via WP Cron
* Interface administrativa intuitiva
* Prevenção de duplicatas
* Configurações flexíveis

**Requisitos:**

* WordPress 6.0 ou superior
* PHP 8.0 ou superior
* Plugin WP Job Manager ativo
* Publisher ID do WhatJobs (gratuito)

== Installation ==

1. Faça upload do plugin para a pasta `/wp-content/plugins/whatjobs-feeder/`
2. Ative o plugin através do menu 'Plugins' no WordPress
3. Certifique-se de que o WP Job Manager está instalado e ativo
4. Acesse 'WhatJobs Feeder' > 'Configurações' no menu admin
5. Configure seu Publisher ID do WhatJobs
6. Crie seus primeiros feeds em 'Feeds Automáticos'

== Frequently Asked Questions ==

= Como obter um Publisher ID do WhatJobs? =

1. Acesse https://publisher.whatjobs.com/publisher/register
2. Registre-se gratuitamente
3. Após o login, encontre seu Publisher ID no painel
4. Cole o ID nas configurações do plugin

= As vagas são importadas automaticamente? =

Sim, após criar um feed, ele será executado automaticamente conforme a frequência configurada (1h, 6h, 12h ou 24h).

= Como evitar vagas duplicadas? =

O plugin verifica automaticamente se uma vaga já foi importada usando a URL de candidatura como referência única.

= Posso personalizar as categorias das vagas? =

Sim, ao criar um feed você pode selecionar a categoria e tipo de vaga do WP Job Manager que será atribuída às vagas importadas.

== Screenshots ==

1. Página de configurações do plugin
2. Lista de feeds automáticos
3. Formulário de criação de novo feed
4. Vagas importadas no WP Job Manager

== Changelog ==

= 1.0.0 =
* Versão inicial do plugin
* Importação automática do WhatJobs API
* Integração com WP Job Manager
* Interface administrativa completa
* Sistema de feeds personalizados
* Execução via WP Cron

== Upgrade Notice ==

= 1.0.0 =
Versão inicial do WhatJobs Feeder. Certifique-se de ter o WP Job Manager instalado antes da ativação.