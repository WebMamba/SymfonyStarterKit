# SymfonyStarterKit
A simple StarterKit to help you getting starded blazzing fast on a new Symfony project.

<img width="1439" alt="Capture d’écran 2023-11-29 à 15 56 37" src="https://github.com/WebMamba/SymfonyStarterKit/assets/32077734/21229afc-bef3-4e4b-bf16-51926a23f293">

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

<img width="1213" alt="Capture d’écran 2023-11-29 à 15 56 51" src="https://github.com/WebMamba/SymfonyStarterKit/assets/32077734/5db79ada-1c39-4d2e-8f1d-2caa5b26d2e0">
