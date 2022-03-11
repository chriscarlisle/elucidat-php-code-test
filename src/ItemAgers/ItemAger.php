<?php

namespace App\ItemAgers;

use App\Item;

interface ItemAger
{
    public function ageByOneDay(Item $item): void;
}
