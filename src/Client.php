<?php

namespace OpenAI;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class OpenAI {

  /**
   * @var string $key
   */
   protected $key;

   /**
    * @var string $engine
    */
   protected $engine;

  /**
   * Constructs the OpenAI class.
   */
   public function __construct($key, $engine = NULL) {
     $this->key = $key;
     $engine = $engine;
   }

  /**
   * Returns available Engines.
   */
  public function engines() {
    $request = new Request('GET', "{$baseUrl}/engines", ['Authorization' => "Bearer {$key}"]);
    $response = $client->send($request);
    return json_decode($response->getBody()->getContents());
  }


}
