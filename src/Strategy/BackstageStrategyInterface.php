<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Item;

class BackstageStrategyInterface implements ItemStrategyInterface
{
    public function update(Item $item): void
    {
        $item->quality += 1;

        if ($item->sell_in <= 5) {
            $item->quality += 1;
        }

        if ($item->sell_in <= 10) {
            $item->quality += 1;
        }

        if ($item->quality > 50) {
            $item->quality = 50;
        }

        $item->sell_in -= 1;

        if ($item->sell_in <= 0) {
            $item->quality = 0;
        }
    }
}
