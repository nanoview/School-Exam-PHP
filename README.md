# Ruoka Express (School-Exam-PHP)

A simple PHP + MySQL project for a restaurant reservation demo.

## Setup

1. Create the database and mock data:
   - Import `sql/setup.sql` into your MySQL/MariaDB server.

2. Configure environment variables (recommended):
   - Copy `.env.example` to `.env` and fill values.
   - Or set `DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME` in your web server environment.

3. Configure web server:
   - Serve this folder via Apache/Nginx or PHP’s built-in server.

## Security

- Do NOT commit `.env` files or real credentials.
- `connect_db.php` reads DB credentials from environment variables.

## Development

- Navbar CSS is in `css/header.css` and imported by `css/style.css`.
- Reservation form is in `poyta.php`.
- Listings are in `reservations.php` and `available_reservations.php`.

## Git

This repo includes a `.gitignore` tuned for PHP projects to avoid committing secrets and noise.
