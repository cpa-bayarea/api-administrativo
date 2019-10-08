# API Bay Admnistrativo

[![GitHub Issues Abertas](https://img.shields.io/github/issues/cpa-bayarea/api-administrativo.svg?maxAge=2592000)]() 
[![GitHub Issues Fechas](https://img.shields.io/github/issues-closed-raw/cpa-bayarea/api-administrativo.svg?maxAge=2592000)]()
<a href="https://app.zenhub.com/workspace/o/cpa-bayarea/api-administrativo/boards" target="_blank">
    <img src="https://img.shields.io/badge/Managed_with-ZenHub-5e60ba.svg" alt="zenhub">
</a>

O API Bay Administrativo é um projeto com finalidade de facilitar o controle de presença dos
membros, administração de projetos e relatórios semestrais para comprovação de horas extracurriculares.


## Docker
Utilizamos o Docker como plataforma de desenvolvimento com o intuito de garantir o mesmo ambiente de desenvolvimento 
independentemente do Sistema Operacional(SO) utilizado.

Para criar um ambiente para trabalhar com a API basta executar o comando abaixo:
```
  docker-compose -f docker-compose.dev.yml up -d
```

Para visualizar detalhes do container
```
  docker-compose ps
```

## Tecnologias
* [PHP](http://php.net/)
* [Lumen 5.8](https://lumen.laravel.com/docs) 
* [Docker](https://www.docker.com)
* [MySQL](https://www.mysql.com)

## Contribuidores
Todas as pessoas que colaboraram com o desenvimento do projeto API Bay estão centralizadas em um único local todos os que participaram com o desenvolvimento do projeto.
  
Clique [aqui](docs/AUTHORS.md) para visualizar.

## Como Contribuir ?
Por favor leia o ``` [CONTRIBUTING.md](docs/CONTRIBUTING.md) ``` para detalhes de como contribuir com o projeto.
