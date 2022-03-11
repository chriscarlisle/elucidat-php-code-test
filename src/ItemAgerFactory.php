<?php

namespace App;

use App\ItemAgers\EventTicket;
use App\ItemAgers\ItemAger;
use App\ItemAgers\LegendaryItem;
use App\ItemAgers\MaturedItem;
use App\ItemAgers\NormalItem;

class ItemAgerFactory
{
    public static function fromItemName(string $itemName): ItemAger
    {
        switch ($itemName) {
            case 'Aged Brie':
                return new MaturedItem();
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new EventTicket();
            case 'Sulfuras, Hand of Ragnaros':
                return new LegendaryItem();
            default:
                return new NormalItem();
        }
    }
}
