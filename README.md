# cosmosdb

This is a wrapper around the rest api to make it simpler to utilize azure cosmosdb from your php services such as Wordpress, Symphony and Laravel.

For more information around the wrapper for Azure Cosmos DB. https://learn.microsoft.com/en-us/rest/api/cosmos-db/

## Installation

Include cosmosdb/cosmosdb in your project, by adding it to your composer.json file.

```json
{
  "require": {
    "cosmosdb/cosmosdb": "1.1.0"
  }
}
```

or by running

```zsh
composer require cosmosdb/cosmosdb
```

at the root of your project.

## Usage

### Select Database

```php

$database = new Database(
    'host',
    'primary_key'
);
$response = $database->get("DBNAME");

```

### Delete Database

```php

$database = new Database(
    'host',
    'primary_key'
);
$response = $database->delete("DBNAME");

```

### List Databases

```php

$database = new Database(
    'host',
    'primary_key'
);
$response = $database->list();

```

### Create a new Database

```php

$database = new Database(
    'host',
    'primary_key'
);
$response = $database->create("DBNAME");

```
