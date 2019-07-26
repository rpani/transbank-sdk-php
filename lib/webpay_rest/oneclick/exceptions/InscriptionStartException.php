<?php
namespace Transbank\Webpay\Oneclick\Exceptions;
use Transbank\Webpay\WebpayPlus\Exceptions\WebpayException;

class InscriptionStartException extends WebpayException
{
    public function __construct($message = self::DEFAULT_MESSAGE, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
