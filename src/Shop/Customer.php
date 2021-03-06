<?php
declare(strict_types=1);
namespace RabbitCMS\Contracts\Shop;

/**
 * Interface CustomerContract.
 * @package RabbitCMS\Shop
 */
interface Customer
{
    /**
     * Get customer name.
     *
     * @return string
     */
    public function getCustomerName(): string;

    /**
     * Get customer phone.
     *
     * @return string
     */
    public function getCustomerPhone(): string;

    /**
     * Get customer email.
     *
     * @return string
     */
    public function getCustomerEmail(): string;

    /**
     * Get customer address.
     *
     * @return string
     */
    public function getCustomerAddress(): string;

    /**
     * Additional customer options.
     *
     * @return array
     */
    public function getCustomerOptions(): array;
}
