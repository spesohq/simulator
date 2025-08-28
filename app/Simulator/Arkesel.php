<?php

namespace App\Simulator;

class Arkesel implements Aggregator
{
    public static function formRequest(
        $sessionId,
        $phoneNumber,
        $network,
        $input,
        $sequence
    ) {
        $msisdn = ltrim($phoneNumber, '+');
        if (strpos($msisdn, '233') !== 0) {
            if (isset($msisdn[0]) && $msisdn[0] === '0') {
                $msisdn = '233' . substr($msisdn, 1);
            }
        }

        return [
            'sessionID'     => $sessionId,
            'userID'        => 1,
            'newSession'    => $sequence === 1,
            'msisdn'        => $msisdn,
            'userData'      => str_replace('#', '', $input),
            'network'       => strtoupper($network),
        ];
    }

    public static function intepretResponse($response)
    {
        return [
            'message' => $response['message'] ?? '',
            'action'  => !empty($response['continueSession']) ? 'input' : 'prompt',
        ];
    }
}
