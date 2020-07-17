<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController
{

    public function __construct()
    {

    }

    public function index(Request $request)
    {

        $action = $request->action;
        $method = $request->type;
        $data = [];

        if (!empty($request->data)) {
            $data['query'] = $request->data;
        }

        if (!empty($request->token)) {
            $data['headers'] = [
                'Authorization' => "Bearer {$request->token}",
                'Accept'        => 'application/json',
            ];
        }

        try {

            $client = new \GuzzleHttp\Client();
            $response = $client->request( $method, "https://dev.cargo.direct/api/$action/",$data);

            $body = json_decode ($response->getBody());

            return response([
                'statusCode' => $response->getStatusCode(),
                'body' => $body,
                'content' => !empty($body->data) ? $body->data : [],
            ], $body->code);

        } catch (\Exception $ex) {

            return response(['error' => $ex->getMessage()], 500);

        }
    }

}
