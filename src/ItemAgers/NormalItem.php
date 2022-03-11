<?php

namespace App\ItemAgers;

use App\Item;

/*
 * Once the sell by date has passed, Quality degrades twice as fast
 * The Quality of an item is never negative
 */
class NormalItem implements ItemAger
{
    public function ageByOneDay(Item $item): void
    {
        if ($item->sellIn > 0) {
            $item->quality = max(0, $item->quality - 1);
        } else {
            $item->quality = max(0, $item->quality - 2);
        }

        $item->sellIn -= 1;
    }
}
