# SQLite Functions

This is a little PHP package that adds common SQL functions to SQLite. Useful when you're using MySQL or Postgres as your main database connection, but you want to use SQLite for testing, and keep getting those annoying "No such function" errors for stuff like `DATE_FORMAT`.

It still needs a lot of work, so all PRs are welcome.

# Installation

```bash
composer require --dev appel/sqlite-functions
```

If you're using Laravel, the service provider and function macros will be registered automatically for you.
