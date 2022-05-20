<?php

/**
 * Обработчик исключений в классе Bitrix24API
 *
 * @author    andrey-tech
 * @copyright 2019-2021 andrey-tech
 * @see       https://github.com/andrey-tech/bitrix24-api-php
 * @license   MIT
 *
 * @version 1.0.1
 *
 * v1.0.0 (13.10.2019) Начальный релиз
 * v1.0.1 (03.02.2021) Рефакторинг
 */

declare(strict_types=1);

namespace App\Bitrix24;

use Exception;

class Bitrix24APIHttpException extends Bitrix24APIException
{
    const NOT_FOUND = 404;
    const HAS_NO_ACCESS = 401;

    protected $httpCode;

    /**
     * @param string $message
     * @param $httpCode
     */
    public function __construct(string $message = '', $httpCode = 400)
    {
        parent::__construct($message);

        $this->httpCode = $httpCode;
    }

    /**
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    public function isRowExists(){
        return $this->httpCode != self::HAS_NO_ACCESS
            && $this->httpCode != self::NOT_FOUND;
    }
}
