# SymfonyStarterKit
A simple StarterKit to help you getting starded blazzing fast on a new Symfony project.

## Features
- Basic HomePage
- Login/SignUp/ResetPassword pages already fonctionnal
- Simple Dashboard
- AssetMapper integration with Tailwind
- Tests
- Phpstan already set up at the max level
- CI
- SQLite

## Requirements

The same as the one mentions here: https://symfony.com/doc/current/setup.html#technical-requirements

## How to install it locally ?

1. use this repo as a template for your repo (click the green button above)
2. git clone your new repo locally
3. at the root of your project run: `composer install`
4. install the db run: `bin/console doctrine:database:create`
5. run the migration: `bin/console doctrine:migrations:migrate`
6. build your assets: `bin/console tailwind:build`

And Voilà ✨ you are ready to go! Enjoy
