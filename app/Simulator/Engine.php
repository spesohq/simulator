<?php

namespace App\Simulator;

use App\Simulator\NoAggregator;
use App\Simulator\UnknownMethod;
use Illuminate\Support\Facades\Http;
use Exception;

class Engine
{
    public static function run(
        $sessionId,
        $url,
        $method,
        $network,
        $phoneNumber,
        $aggregatorName,
        $input,
        $sequence
    ) {
        $response = null;
        $aggregator = static::getAggregator($aggregatorName);

        if ($aggregator === null) {
            throw NoAggregator::create();
        }

        if ($method == 'get') {
            $response = Http::get(
                $url,
                $aggregator::formRequest(
                    $sessionId,
                    $phoneNumber,
                    $network,
                    $input,
                    $sequence
                )
            );
        }

        if ($method == 'post') {
            $response = Http::post(
                $url,
                $aggregator::formRequest(
                    $sessionId,
                    $phoneNumber,
                    $network,
                    $input,
                    $sequence
                )
            );

        }

        if ($response === null) {
            throw UnknownMethod::create();
        }

        $parsed = $response;

        if (is_array($response)) {
            $parsed = $response->json();
        }

        return $aggregator::intepretResponse($response->json());
    }

    protected static function getAggregator($aggregatorName)
    {
        if ($aggregatorName === 'korba') {
            return Korba::class;
        }

        if ($aggregatorName === 'nsano') {
            return Nsano::class;
        }

        if ($aggregatorName === 'nalo') {
            return Nalo::class;
        }

        if ($aggregatorName === 'arkesel') {
            return Arkesel::class;
        }

        if ($aggregatorName === 'africastalking') {
            return AfricasTalking::class;
        }

        return null;
    }
}
