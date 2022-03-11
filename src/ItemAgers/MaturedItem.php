<?php

namespace App\ItemAgers;

use App\Item;

/*
 * Matured Items increase in Quality the older they get
 * The Quality of an item is never more than 50
 */
class MaturedItem implements ItemAger
{
    public function ageByOneDay(Item $item): void
    {
        if ($item->sellIn > 0) {
            $item->quality = min(50, $item->quality + 1);
        } else {
            $item->quality = min(50, $item->quality + 2);
        }

        $item->sellIn -= 1;
    }
}
