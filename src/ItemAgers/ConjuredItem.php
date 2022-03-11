<?php

namespace App\ItemAgers;

use App\Item;

/*
 * Conjured Items degrade in Quality twice as fast as normal items
 */
class ConjuredItem implements ItemAger
{
    public function ageByOneDay(Item $item): void
    {
        if ($item->sellIn > 0) {
            $item->quality = max(0, $item->quality - 2);
        } else {
            $item->quality = max(0, $item->quality - 4);
        }

        $item->sellIn -= 1;
    }
}
