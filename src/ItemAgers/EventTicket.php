<?php

namespace App\ItemAgers;

use App\Item;

/*
 * Event Tickets increase in Quality as the event approaches
 * Quality increases by 2 when there are 10 days or less and by 3 when there are 5 days or less but
 * Quality drops to 0 after the event
 */
class EventTicket implements ItemAger
{
    public function ageByOneDay(Item $item): void
    {
        if ($item->sellIn > 10) {
            $item->quality = min(50, $item->quality + 1);
        } elseif ($item->sellIn > 5) {
            $item->quality = min(50, $item->quality + 2);
        } elseif ($item->sellIn > 0) {
            $item->quality = min(50, $item->quality + 3);
        } else {
            $item->quality = 0;
        }

        $item->sellIn -= 1;
    }
}
