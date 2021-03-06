<?php
/**
 * FittingsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * FittingsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FittingsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingId
     *
     * Delete fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteCharactersCharacterIdFittingsFittingId($character_id, $fitting_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        $this->deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo($character_id, $fitting_id, $datasource, $token, $user_agent, $x_user_agent);
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo
     *
     * Delete fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCharactersCharacterIdFittingsFittingIdWithHttpInfo($character_id, $fitting_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '';
        $request = $this->deleteCharactersCharacterIdFittingsFittingIdRequest($character_id, $fitting_id, $datasource, $token, $user_agent, $x_user_agent);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingIdAsync
     *
     * Delete fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCharactersCharacterIdFittingsFittingIdAsync($character_id, $fitting_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        return $this->deleteCharactersCharacterIdFittingsFittingIdAsyncWithHttpInfo($character_id, $fitting_id, $datasource, $token, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation deleteCharactersCharacterIdFittingsFittingIdAsyncWithHttpInfo
     *
     * Delete fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCharactersCharacterIdFittingsFittingIdAsyncWithHttpInfo($character_id, $fitting_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '';
        $request = $this->deleteCharactersCharacterIdFittingsFittingIdRequest($character_id, $fitting_id, $datasource, $token, $user_agent, $x_user_agent);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'deleteCharactersCharacterIdFittingsFittingId'
     *
     * @param int $character_id An EVE character ID (required)
     * @param int $fitting_id ID for a fitting of this character (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteCharactersCharacterIdFittingsFittingIdRequest($character_id, $fitting_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling deleteCharactersCharacterIdFittingsFittingId');
        }
        // verify the required parameter 'fitting_id' is set
        if ($fitting_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fitting_id when calling deleteCharactersCharacterIdFittingsFittingId');
        }

        $resourcePath = '/v1/characters/{character_id}/fittings/{fitting_id}/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace('{' . 'character_id' . '}', ObjectSerializer::toPathValue($character_id), $resourcePath);
        }
        // path params
        if ($fitting_id !== null) {
            $resourcePath = str_replace('{' . 'fitting_id' . '}', ObjectSerializer::toPathValue($fitting_id), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'DELETE',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCharactersCharacterIdFittings
     *
     * Get fittings
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]
     */
    public function getCharactersCharacterIdFittings($character_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdFittingsWithHttpInfo
     *
     * Get fittings
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]';
        $request = $this->getCharactersCharacterIdFittingsRequest($character_id, $datasource, $token, $user_agent, $x_user_agent);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCharactersCharacterIdFittingsAsync
     *
     * Get fittings
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdFittingsAsync($character_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        return $this->getCharactersCharacterIdFittingsAsyncWithHttpInfo($character_id, $datasource, $token, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation getCharactersCharacterIdFittingsAsyncWithHttpInfo
     *
     * Get fittings
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCharactersCharacterIdFittingsAsyncWithHttpInfo($character_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\GetCharactersCharacterIdFittings200Ok[]';
        $request = $this->getCharactersCharacterIdFittingsRequest($character_id, $datasource, $token, $user_agent, $x_user_agent);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'getCharactersCharacterIdFittings'
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCharactersCharacterIdFittingsRequest($character_id, $datasource = 'tranquility', $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdFittings');
        }

        $resourcePath = '/v1/characters/{character_id}/fittings/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace('{' . 'character_id' . '}', ObjectSerializer::toPathValue($character_id), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postCharactersCharacterIdFittings
     *
     * Create fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated
     */
    public function postCharactersCharacterIdFittings($character_id, $datasource = 'tranquility', $fitting = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->postCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource, $fitting, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation postCharactersCharacterIdFittingsWithHttpInfo
     *
     * Create fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCharactersCharacterIdFittingsWithHttpInfo($character_id, $datasource = 'tranquility', $fitting = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated';
        $request = $this->postCharactersCharacterIdFittingsRequest($character_id, $datasource, $fitting, $token, $user_agent, $x_user_agent);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postCharactersCharacterIdFittingsAsync
     *
     * Create fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCharactersCharacterIdFittingsAsync($character_id, $datasource = 'tranquility', $fitting = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        return $this->postCharactersCharacterIdFittingsAsyncWithHttpInfo($character_id, $datasource, $fitting, $token, $user_agent, $x_user_agent)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation postCharactersCharacterIdFittingsAsyncWithHttpInfo
     *
     * Create fitting
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCharactersCharacterIdFittingsAsyncWithHttpInfo($character_id, $datasource = 'tranquility', $fitting = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        $returnType = '\Swagger\Client\Model\PostCharactersCharacterIdFittingsCreated';
        $request = $this->postCharactersCharacterIdFittingsRequest($character_id, $datasource, $fitting, $token, $user_agent, $x_user_agent);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'postCharactersCharacterIdFittings'
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param \Swagger\Client\Model\PostCharactersCharacterIdFittingsFitting $fitting Details about the new fitting (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postCharactersCharacterIdFittingsRequest($character_id, $datasource = 'tranquility', $fitting = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling postCharactersCharacterIdFittings');
        }

        $resourcePath = '/v1/characters/{character_id}/fittings/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = ObjectSerializer::toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = ObjectSerializer::toHeaderValue($x_user_agent);
        }

        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace('{' . 'character_id' . '}', ObjectSerializer::toPathValue($character_id), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($fitting)) {
            $_tempBody = $fitting;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );
    }

}
