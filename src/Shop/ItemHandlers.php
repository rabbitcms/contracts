<?php
declare(strict_types=1);
namespace RabbitCMS\Contracts\Shop;

/**
 * Interface ItemHandlers.
 * @package RabbitCMS\Shop
 */
interface ItemHandlers
{
    /**
     * Call on order paid.
     *
     * @param int $count
     *
     * @return void
     */
    public function itemPaid(int $count = 1);

    /**
     * Call on order paid revert.
     *
     * @param int $count
     *
     * @return void
     */
    public function itemUnpaid(int $count = 1);
}
