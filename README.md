Chia RPC Client
===============

This library allows you to communicate with a Chia RPC server.

# Installation

`composer require jestesmining/chia-client-php:0.1.x-dev`


# Usage

```php
use JEstesMining\Component\Chia;

$chia = new Chia\FullNode('https://127.0.0.1:8555', [
    'local_cert' => '/path/to/.chia/mainnet/config/ssl/full_node/private_full_node.crt',
    'local_pk'   => '/path/to/.chia/mainnet/config/ssl/full_node/private_full_node.key',
]);

// @var array $state
$state = $chia->getBlockchainState();
```
