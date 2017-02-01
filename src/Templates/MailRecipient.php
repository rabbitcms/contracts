<?php
declare(strict_types = 1);
namespace RabbitCMS\Contracts\Templates;

/**
 * Interface MailRecipient
 *
 * @package RabbitCMS\Contracts\Templates
 */
interface MailRecipient
{
    /**
     * Get recipient email.
     *
     * @return string
     */
    public function getRecipientEmail(): string;

    /**
     * Get recipient name.
     *
     * @return string
     */
    public function getRecipientName(): string;
}