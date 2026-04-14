# 🎮 Game Ranking API - Microserviço

Este é um microserviço desenvolvido em **Laravel 11** para gerenciamento e exposição de rankings de jogos. A API fornece dados sobre os jogos mais jogados, rankings gerais por período e rankings específicos por plataforma.

## 🚀 Funcionalidades
- **Ranking Geral:** Consulta de top 10 (semanal, mensal e anual).
- **Mais Jogados:** Listagem baseada no volume de jogadores ativos.
- **Filtro por Plataforma:** Rankings específicos para Steam, PlayStation, Xbox e Nintendo.
- **Documentação Automática:** Interface interativa via Scribe.

## 🛠️ Pré-requisitos
- PHP >= 8.2
- Composer
- Extensão SQLite habilitada no PHP

## 📥 Instalação e Configuração

1. **Instalar dependências:**
   ```bash
   composer install
Configurar Ambiente:
Certifique-se de que o arquivo .env existe e está configurado para SQLite:

Snippet de código
DB_CONNECTION=sqlite
Preparar o Banco de Dados:
Crie o arquivo do banco e popule com dados fictícios:

Bash
php artisan migrate --seed
Gerar a Documentação:

Bash
php artisan scribe:generate
🖥️ Como Usar
Para subir o servidor local:

Bash
php artisan serve
API: http://localhost:8000/api/v1/...

Documentação Interativa: http://localhost:8000/docs

🛠️ Tecnologias
Framework: Laravel 11

Banco de Dados: SQLite

Documentação: Scribe (OpenAPI/Swagger)