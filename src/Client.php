<?php declare(strict_types=1);

namespace JEstesMining\Component\Chia;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Client
{
    //
    protected $_client;
    protected $_options;
    protected $_dsn;

    /**
     */
    public function __construct($dsn, array $options = [])
    {
        $this->_dsn     = $dsn;
        $this->_options = $options;
    }

    protected function getRpcClient()
    {
        if (!$this->_client) {
            $this->_client = HttpClient::create(array_merge([
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'verify_host' => false,
                'verify_peer' => false,
            ], $this->_options));
        }

        return $this->_client;
    }

    /**
     * @todo protected
     */
    public function request(string $url, array $options = []): ResponseInterface
    {
        return $this->getRpcClient()->request('POST', $url, $options);
    }
}
