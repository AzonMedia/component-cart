<?php
declare(strict_types=1);

namespace GuzabaPlatform\Cart;


use GuzabaPlatform\Cart\Interfaces\CartInterface;
use GuzabaPlatform\Catalog\Base\Interfaces\Item;

class Cart implements CartInterface
{

    /**
     * If the item is already added it updates the quantity.
     * If the quantity is set to 0 it removes the item.
     * For negative amounts throws \InvalidArgumentException
     * Returns FALSE only if an Item is provided with quantity 0 which does not exist in the cart.
     * Must also store the time when the item was added.
     * @param Item $Item
     * @param int $quantity
     * @return bool
     */
    public function add(Item $Item, int $quantity): bool
    {
        // TODO: Implement add() method.
    }

    public function has(Item $Item): bool
    {
        // TODO: Implement has() method.
    }

    /**
     * Returns TRUE if the Item was present in the cart, FALSE otherwise.
     * @param Item $Item
     * @return bool
     */
    public function remove(Item $Item): bool
    {
        // TODO: Implement remove() method.
    }

    public function remove_all(): void
    {
        // TODO: Implement remove_all() method.
    }

    public function get_total_cost(): float
    {
        // TODO: Implement get_total_cost() method.
    }

    /**
     * Returns a collection/array of Item
     * @return iterable
     */
    public function get_all_items(): iterable
    {
        // TODO: Implement get_all_items() method.
    }

    /**
     * Returns all the meta data about the items (when these were added to the cart)
     * @return iterable
     */
    public function get_all_items_meta(): iterable
    {
        // TODO: Implement get_all_items_meta() method.
    }
}