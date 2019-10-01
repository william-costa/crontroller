# crontroller
Gerenciador centralizado de cronjobs em PHP e Shell

________________

## Em desenvolvimento

### Configuração

Inicialize do composer para baixar as dependências
```Shell
 composer install
```

Para executar o Crontroller manualmente basta executar o comando abaixo:

```Shell
 php app/Jobs/crontroller.php
```
Configure o comando acima para rodar a cada 1 minuto em seu crontab.

________________

#### Fluxo de execução a ser desenvolvido


1 - Quando não existem alterações nos jobs:
*Doer -> Analyzer -> Sender*

2 - Quando existem alterações nos jobs (jobs novos, alterações em jobs existentes ou jobs excluídos):
*Doer -> Analyzer -> Parser -> Indexer*


________________

## A ser desenvolvido:

### Features:
- O sistema deve possuir um arquivo de configuração que será usado para definir onde está o arquivo crons.cron, onde é o caminho base (`{{DIR}}`) para que os cronjobs possam ser configurados dinamicamente e usuário e senha de acesso ao painel no navegador.
- O sistema deve ter um arquivo crons.cron que será usado como base para configuração dos cronjobs gerenciados pelo crontroller, seguindo o padrão do crontab do linux (a ideia é que o usuário possa copiar os comandos do crontab atual e colar no gerenciador e esse já funcionar)
- O sistema deve ter um arquivo central que será executado a cada minuto (único cronjob configurado diretamente no crontab do linux)
- O sistema deve possuir meios de identificar cronjobs (IDs) para que possam ser validados os processos iniciados, finalizados e interrompidos
- O sistema deve fazer o parse o arquivo de crons apenas uma vez, para evitar reprocessamento de informações iguais. O parse só poderá ser refeito se o arquivo base crons.cron for alterado
- O parse do arquivo de crons deverá gerar um novo arquivo serializado pronto para ser usado para execuções, diminuindo a responsabilidade de execução para apenas ler o arquivo e executar comandos
- PHP não deverá executar diretamente um comando de cron, o PHP executará um arquivo shell que encapsulará o comando e identificará o ID de cada processo e também gravará os logs e status do processo
- Por padrão, não permitir que um cronjob concorra com ele mesmo (não executar duas vezes o mesmo comando)
- Padrão para aplicação de parâmetros nos cronjobs para definir se pode haver concorrencia (um mesmo cronjob ser executado enquanto outro processo dele mesmo ainda não foi finalizado), timeout, quantas vezes o sistema pode ignorar a sua execução (caso já tenha um processo dele mesmo rodando)
- Interface CLI para analisar os logs de execução (quando um cronjob foi executado pela ultima vez, status atual, se foi interrompido, etc), listagem dos crons com status de ativo ou inválido e subir um servidor de teste de crons (worker para rodar testes locais de cronjobs)
- O sistema deverá oferecer um acesso via navegador (html) para exibir os gráficos e informações sobre cronjobs configurados, status, ultima execução, etc (como na interface CLI). Esse acesso deve ser restringido por senha (pode ser basic auth e a senha configurada no arquivo de configurações descrito no primeiro item)

### Essencial
- Criar branches para desenvolvimento
