# Connect Holland Timechimp Bundle

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/ConnectHolland/timechimp-bundle/build-status/master)

Timechimp bundle for Symfony 4 projects

## Installation
```bash
composer require connectholland/timechimp-bundle
```

## Environment

Set the environment variables to be able to connect to the Timchimp API.

```dotenv
TIMECHIMP_ACCESS_TOKEN=the-api-key
```

## Usage
Autowire the client, e.g.:

```php
<?php

declare(strict_types=1);

namespace App;

use ConnectHolland\TimechimpBundle\Api\Client\Client;

class SomeService
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    
    public function someMethod()
    {
        $this->client->getTimeByDateRange((new \DateTime('yesterday'))->format('Y-m-d'), (new \DateTime('now'))->format('Y-m-d'));
    }
}
```

