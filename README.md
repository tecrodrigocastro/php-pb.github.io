# PHP-PB - Comunidade PHP da Paraíba

Site oficial da comunidade PHP da Paraíba, refatorado com TALL Stack.

## Stack

- **Laravel** - Framework PHP
- **Livewire** - Componentes reativos
- **Tailwind CSS** - Estilização
- **Alpine.js** - Interatividade (incluso no Livewire)
- **MySQL** - Banco de dados

## Estrutura

```
php-pb.github.io/
├── site_novo/       # Projeto Laravel (TALL Stack)
├── site_antigo/     # Site Jekyll original (backup)
└── README.md
```

## Instalação

### Com Docker (Recomendado)

```bash
# Subir os containers
docker-compose up -d

# Instalar dependências PHP
docker-compose exec app composer install

# Instalar dependências Node
docker-compose exec app npm install

# Gerar key da aplicação
docker-compose exec app php artisan key:generate

# Rodar migrations
docker-compose exec app php artisan migrate

# Build dos assets
docker-compose exec app npm run build
```

Acesse: http://localhost:8080

### Sem Docker

```bash
cd site_novo

# Instalar dependências
composer install
npm install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Banco de dados (SQLite para desenvolvimento)
touch database/database.sqlite
php artisan migrate

# Iniciar servidor
php artisan serve
npm run dev
```

Acesse: http://localhost:8000

## Comandos Docker

```bash
# Subir containers
docker-compose up -d

# Parar containers
docker-compose down

# Ver logs
docker-compose logs -f app

# Acessar container
docker-compose exec app bash

# Rodar Artisan
docker-compose exec app php artisan <comando>

# Rodar NPM
docker-compose exec app npm run <comando>
```

## Desenvolvimento

```bash
# Criar componente Livewire
php artisan make:livewire NomeComponente

# Criar Model com Migration
php artisan make:model NomeModel -m

# Rodar testes
php artisan test

# Build para produção
npm run build
```

## Links

- [Site](https://php-pb.net)
- [GitHub](https://github.com/php-pb)

## Licença

MIT
