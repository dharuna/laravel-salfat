<?php

namespace Dharuna\LaravelSalfat;

class ApiService
{
    protected $base_url;
    protected $auth_token;

    public function __construct()
    {
        $this->base_url = config('laravel-salfat.base_url');
        $this->auth_token = config('laravel-salfat.auth_token');
    }

    public function getSalfatData($endpoint)
    {
        $url = $this->base_url . '/' . $endpoint;
        // ... (the rest of your GET request logic)
        return $response;
    }

    public function postPayload($endpoint, array $payload)
    {
        $url = $this->base_url . '/' . $endpoint;
        // ... (the rest of your POST request logic)
        return $response;
    }
}
