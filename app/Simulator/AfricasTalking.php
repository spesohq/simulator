<?php

namespace App\Simulator;

use Illuminate\Support\Str;

class AfricasTalking implements Aggregator
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
        $phoneE164 = '+' . $msisdn;
        $text = $sequence === 1 ? '' : str_replace('#', '', (string) $input);
        $networkCode = $network ? strtoupper($network) : null;

        return [
            'sessionId'   => $sessionId,
            'serviceCode' => '*721#',
            'phoneNumber' => $phoneE164,
            'text'        => $text,
            'networkCode' => $networkCode,
        ];
    }

    public static function intepretResponse($response)
    {
        $body = is_object($response) && method_exists($response, 'getContent')
            ? $response->getContent()
            : (string) $response;
        $trimmed = trim($body);
        $prefix = strtoupper(substr($trimmed, 0, 3));
        $message = $trimmed;
        $action  = 'prompt';

        if ($prefix === 'CON') {
            $message = ltrim(substr($trimmed, 3));
            $action  = 'input';
        } elseif ($prefix === 'END') {
            $message = ltrim(substr($trimmed, 3));
            $action  = 'prompt';
        }

        return [
            'message' => rtrim($message, "\r\n\t "),
            'action'  => $action,
        ];
    }
}
