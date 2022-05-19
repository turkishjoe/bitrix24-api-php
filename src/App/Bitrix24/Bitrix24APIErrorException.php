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

class Bitrix24APIErrorException extends Bitrix24APIException
{
    protected $error;
    protected $description;

    /**
     * @param string $message
     * @param $error
     * @param $description
     */
    public function __construct(string $message = '', $error = '', $description = '')
    {
        parent::__construct($message);

        $this->error = $error;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}
