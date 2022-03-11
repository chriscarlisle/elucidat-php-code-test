<?php

namespace App;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    public function nextDay(): void
    {
        foreach ($this->items as $item) {
            $itemAger = ItemAgerFactory::fromItemName($item->name);
            $itemAger->ageByOneDay($item);
        }
    }
}
