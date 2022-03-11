<?php

namespace App\ItemAgers;

use App\Item;

/*
 * Legendary Items never have to be sold and don't decrease in Quality
 */
class LegendaryItem implements ItemAger
{
    public function ageByOneDay(Item $item): void
    {
    }
}
