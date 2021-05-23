<?php declare(strict_types=1);

namespace JEstesMining\Component\Chia;

/**
 */
class FullNode extends Client
{
    public function getBlockchainState(): array
    {
        return $this->request($this->_dsn.'/get_blockchain_state', [
            'json' => [],
        ])->toArray();
    }

    public function getBlock(string $hash): array
    {
        return $this->request($this->_dsn.'/get_block', [
            'json' => [
                'header_hash' => $hash,
            ],
        ])->toArray();
    }
}
