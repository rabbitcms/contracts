<?php
declare(strict_types=1);
namespace RabbitCMS\Contracts\Shop;

/**
 * Interface SellerContract.
 *
 * @package RabbitCMS\Shop
 */
interface Seller
{
    /**
     * Get seller name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get seller enabled.
     *
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * Set seller enabled.
     *
     * @param bool $value
     * @return mixed
     */
    public function setEnabled(bool $value = true);
}
