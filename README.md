# Medlemsservice sandbox

## Installation
```
git clone git@github.com:spejder/ms-sandbox.git
cd ms-sandbox
composer install
cp src/example.settings.php src/settings.php
# Set your username/password in src/settings.php
php src/authenticate
```

Last step should print out your `uid`.

## Usage
This sandbox works usind the [Odoo Web Service Api](https://www.odoo.com/documentation/11.0/webservices/odoo.html). Look there for inspiration.  
In generel the program uses _a lot_ of arrays.
