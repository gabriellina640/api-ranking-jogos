# 🎮 Microsserviço de Rankings de Jogos (Game Ranking API)

![Laravel](https://img.shields.io/badge/Laravel-11-red)
![PHP](https://img.shields.io/badge/PHP-8.2-blue)
![SQLite](https://img.shields.io/badge/SQLite-Database-green)

---

# 📌 Sobre o Projeto

Este microsserviço faz parte do ecossistema **GameVerse**.
Ele é responsável por processar, armazenar e disponibilizar estatísticas de engajamento, permitindo que a plataforma exiba rankings dinâmicos e tendências globais.

---

# 👥 Integrantes

* Kaiky Andrade de Oliveira
* Gabriel Henrique Lina Batista Pereira Nunes

---

# 📝 Descrição do Serviço

O serviço centraliza métricas de performance dos jogos, como:

* pontuação
* tempo de jogo
* quantidade de jogadores ativos
* evolução de desempenho

Ele resolve o problema de sobrecarga do sistema principal ao isolar o processamento de grandes volumes de dados estatísticos em um microsserviço dedicado, garantindo que as tabelas de classificação sejam atualizadas e entregues rapidamente aos usuários finais.

---

# 🎯 Responsabilidades do Microsserviço

O serviço possui as seguintes responsabilidades:

* Fornecer rankings de desempenho semanal, mensal e anual
* Listar os jogos mais populares
* Exibir histórico de evolução de pontuação
* Segmentar rankings por plataforma
* Disponibilizar dados estatísticos para outros microsserviços

---

# 🛠️ Tecnologias Utilizadas

* PHP 8.2
* Laravel 11
* SQLite
* Composer
* Laravel Scribe (Documentação OpenAPI)

---

# 📂 Estrutura do Repositório

Este repositório não está organizado como monorepo. Ele contém apenas o microsserviço backend da API de rankings de jogos.

| Serviço | Pasta | Descrição |
| ------- | ----- | --------- |
| API de Rankings de Jogos | `/` | Backend Laravel responsável pelas rotas, autenticação JWT, rankings e documentação Scribe |

Principais pastas do serviço:

| Pasta | Finalidade |
| ----- | ---------- |
| `app/Http/Controllers` | Controllers da API |
| `app/Http/Middleware` | Middlewares, incluindo autenticação JWT |
| `app/Models` | Models Eloquent |
| `routes` | Definição das rotas web e API |
| `database/migrations` | Estrutura das tabelas |
| `database/seeders` | Dados iniciais para testes e demonstração |
| `resources/views/scribe` | Documentação HTML gerada pelo Scribe |
| `public/vendor/scribe` | Arquivos públicos da documentação |

---

# ✅ Requisitos Necessários

Antes de executar o projeto, é necessário possuir instalado:

* PHP >= 8.2
* Composer
* Git
* SQLite

---

# ⚙️ Variáveis de Ambiente

O projeto utiliza variáveis configuradas no arquivo `.env`.

Exemplo:

| Variável      | Descrição                |
| ------------- | ------------------------ |
| APP_NAME      | Nome da aplicação        |
| APP_ENV       | Ambiente da aplicação    |
| APP_KEY       | Chave do Laravel         |
| APP_DEBUG     | Modo de depuração        |
| DB_CONNECTION | Banco de dados utilizado |

---

# 📥 Instalação do Projeto

## 1. Clone o repositório

```bash
git clone https://github.com/gabriellina640/api-ranking-jogos.git
```

## 2. Acesse a pasta do projeto

```bash
cd api-ranking-jogos
```

## 3. Instale as dependências

```bash
composer install
```

---

# ⚙️ Configuração do .env

Crie uma cópia do arquivo de ambiente:

```bash
cp .env.example .env
```

Configure o banco SQLite no arquivo `.env`:

```env
DB_CONNECTION=sqlite
```

---

# 🗄️ Preparação do Banco de Dados

Execute as migrations e seeders:

```bash
php artisan migrate:fresh --seed
```

---

# 📚 Gerar Documentação da API

Execute o comando:

```bash
php artisan scribe:generate
```

---

# 🚀 Executando o Projeto

Inicie o servidor Laravel:

```bash
php artisan serve
```

A aplicação ficará disponível em:

```bash
http://localhost:8000
```

---

# 📖 Documentação Interativa da API

Após iniciar o projeto, acesse:

```bash
http://localhost:8000/docs
```

A documentação gerada pelo Scribe permite:

* visualizar endpoints
* testar requisições
* consultar parâmetros
* visualizar respostas JSON

---

# 🧪 Como Testar o Projeto

Você pode testar a API utilizando:

* Scribe
* Postman
* Insomnia
* Thunder Client

Exemplo:

```http
GET http://localhost:8000/api/v1/rankings/weekly
```

---

# 📑 Rotas da API

| Método | Endpoint                              | Descrição                                |
| ------ | ------------------------------------- | ---------------------------------------- |
| GET    | /api/v1/rankings/weekly               | Lista o Top 10 jogos da última semana    |
| GET    | /api/v1/rankings/monthly              | Lista o Top 10 jogos do último mês       |
| GET    | /api/v1/rankings/yearly               | Lista o Top 10 jogos do último ano       |
| GET    | /api/v1/rankings/history/{id}         | Busca a evolução de pontuação de um jogo |
| GET    | /api/v1/games/most-played             | Lista os jogos mais jogados              |
| GET    | /api/v1/rankings/platforms/{platform} | Lista rankings por plataforma            |

---

# 📥 Exemplo de Requisição

## Buscar ranking semanal

```http
GET /api/v1/rankings/weekly HTTP/1.1
Host: localhost:8000
Accept: application/json
```

---

# 📤 Exemplo de Resposta JSON

```json
[
  {
    "id": 1,
    "name": "Elden Ring",
    "platform": "Steam",
    "active_players": 1500000,
    "weekly_points": 850,
    "monthly_points": 7000,
    "yearly_points": 85000,
    "created_at": "2026-05-04T22:00:00.000000Z",
    "updated_at": "2026-05-04T22:00:00.000000Z"
  }
]
```

---

# 🔗 Integrações com Outros Microsserviços

## Quais dados recebe

O microsserviço recebe:

* IDs de jogos
* parâmetros de filtro
* plataformas
* períodos de ranking

---

## Quais dados retorna

O serviço retorna:

* rankings
* estatísticas
* histórico de pontuação
* quantidade de jogadores ativos

Todos os dados são retornados em formato JSON.

---

## Quais serviços consome

O microsserviço consome:

* Microsserviço de Telemetria
* Microsserviço de Catálogo de Jogos

---

## Quais serviços utilizam esta API

Os serviços que utilizam esta API são:

* Front-end GameVerse
* Microsserviço de Loja
* Sistema de Recomendações

---

# 🔄 Fluxo Principal do Serviço

1. O usuário acessa a plataforma GameVerse
2. O Front-end solicita os rankings
3. O microsserviço consulta o banco SQLite
4. Os dados são processados e ordenados
5. O JSON é retornado ao Front-end
6. Os rankings são exibidos ao usuário

---

# ⚠️ Possíveis Erros e Retornos Esperados

| Código | Erro                   | Descrição                 |
| ------ | ---------------------- | ------------------------- |
| 400    | Dados inválidos        | Parâmetros incorretos     |
| 404    | Jogo inexistente       | Jogo não encontrado       |
| 404    | Plataforma inexistente | Plataforma não encontrada |
| 500    | Erro interno           | Falha no servidor         |
| 503    | Serviço indisponível   | Banco indisponível        |

---

# 📤 Exemplo de Erro JSON

```json
{
  "success": false,
  "message": "Jogo não encontrado"
}
```

---

# 📁 Estrutura do Projeto

```bash
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

# 📦 Arquivos Obrigatórios da Entrega

Este repositório contém:

* README.md
* .env.example
* Código-fonte completo

⚠️ A pasta `vendor/` não deve ser enviada para o GitHub.

---

# 📌 Participação no Ecossistema GameVerse

Este microsserviço é responsável por fornecer estatísticas e rankings em tempo real dentro do GameVerse.

Ele participa diretamente:

* das vitrines de jogos populares
* das recomendações de destaque
* dos rankings competitivos
* das estatísticas globais da plataforma

Seu objetivo é garantir alta performance na consulta de dados estatísticos.

---

# 📬 Contato

Projeto acadêmico desenvolvido para a disciplina de Microsserviços — GameVerse.
