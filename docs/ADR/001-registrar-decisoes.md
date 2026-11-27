# ADR-001 - Architecture Decision Record - Módulo 01

## Ferramentas Utilizadas
### - NGINX
    Está sendo utilizado para que as requisições sejam encaminhadas para a aplicação. O motivo de ter sido escolhido, é por sua alta performance e também por conseguir lidar com uma grande quantidade de tráfego simultâneo. Outra alternativa que considero um pouco menos robusta é o Apache, os dois não são exatamente iguais mas resolvem problemas semelhantes.

### - Docker
    Está sendo utilizado para que seja criado um ambiente isolado para a aplicação. O motivo de ter sido escolhido, é por conta de seus containers, fazendo com que independente da máquina na qual será hospedada a aplicação, será garantido que tudo ficará da mesma forma que foi planejado. Assim, evitando a frase "Na minha máquina funciona". Outra alternativa seria o Podman, mas o Docker oferece mais recursos documentados e é mais fácil para resolver problemas mais comuns, pois possui mais conteúdo disponibilizado na internet.

### - PHP-FPM
    Está sendo utilizado para o desenvolvimento da aplicação. O motivo de ter sido escolhido, é por conta da forma como essa versão consegue lidar com os processos paralelamente, podendo deixar disponível muitos workers para atender as requisições ad aplicação simultaneamente. Outra alternativa seria o PHP "comum", mas seria necessário achar outra solução para lidar com as requisições sendo processadas ao mesmo tempo.

### - PHP-UNIT
    Está sendo utilizado para que sejam criados testes automatizado, assim validando as funcionalidades da aplicação. O motivo de ter sido escolhido, é por seu padrão já utilizado no mercado e segundo pesquisas que realizei outros frameworks para testes em PHP utilizam o motor do PHPUnit por baixo dos panos, então acredito que seja uma escolha mais direta utilizar o PHPUnit diretamente. Outras alternativas seriam o Pest ou PHPSpec, mas pelo motivo que citei anteriormente, acho que o PHPUnit seria a escolha mais correta.

## Funcionalidades
- Roteamento de rotas
- Testes automatizados