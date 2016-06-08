<?php

namespace LaravelSmpp;

/**
 * SMPP service interface.
 *
 * @package LaravelSmpp
 */
interface SmppServiceInterface
{
    /**
     * Send a single SMS.
     *
     * @param int $phone
     * @param string $message
     *
     * @return string
     * @throws \SmppException
     */
    public function sendOne($phone, $message);

    /**
     * Send multiple SMSes.
     *
     * @param array $phones
     * @param string $message
     *
     * @return void
     * @throws \SmppException
     */
    public function sendBulk(array $phones, $message);
}