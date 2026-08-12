# Eventmie Pro Docs

Documentation website for [Eventmie Pro](https://classiebit.com/eventmie-pro), built with Laravel and [LaRecipe](https://github.com/saleem-hadad/larecipe).

## Requirements

- PHP 8.3+
- Composer

No database, Redis, or Node.js build is required for the docs site.

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan vendor:publish --provider="BinaryTorch\LaRecipe\LaRecipeServiceProvider" --tag=larecipe_assets --force
php artisan serve
```

Visit `/docs` (the root URL redirects there).

## Structure

- `resources/docs/` — Markdown documentation by version
- `config/larecipe.php` — LaRecipe versions, UI, SEO, search
- `resources/views/vendor/larecipe/` — Customized LaRecipe views
- `public/images/` — Documentation screenshots and assets
- `public/css/app_v2.css` — Site-specific styles

## Versions

Configured in `config/larecipe.php`. Default version is `3.0`.
