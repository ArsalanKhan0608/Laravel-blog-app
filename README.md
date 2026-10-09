# Laravel blog app

A Laravel 11 blog with registration/login, paginated posts, author-only post editing/deletion, and profile management.

## Local setup

The committed Composer lockfile supports **PHP 8.2 or 8.3**; some locked packages reject PHP 8.4. Install Composer 2, Node.js 18 or newer, npm, and the PHP extensions required by Composer, including PDO SQLite for the default database.

From the repository root:

```sh
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm ci
npm run build
php artisan serve
```

Open the local URL printed by Artisan (normally `http://127.0.0.1:8000`). Register an account to create posts. The authenticated navigation links to the profile form, where you can change your name/email/password or delete your account with password confirmation.

The default `.env.example` uses SQLite plus database-backed sessions/cache, so migrations are required before the first page load. To use another database, edit your local `.env` and run migrations there. Keep `.env` and credentials out of Git.

For frontend development, run `npm run dev` in another terminal instead of using the built assets. Both component pages (dashboard/profile) and the blog's section-based views use the shared app layout.

## Verification

```sh
npm run build
php artisan test
```

Tests use an in-memory SQLite database, enforced in `phpunit.xml`, so `RefreshDatabase` operates on the test database. They cover authentication, profile routes and content, guest access, and dashboard rendering. Build frontend assets first; the views reference the Vite manifest.

The dependency lockfiles are preserved. This repair does not upgrade the existing dependency stack; dependency security updates require a separate compatibility review.
