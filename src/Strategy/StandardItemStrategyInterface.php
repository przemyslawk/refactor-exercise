<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Item;

class StandardItemStrategyInterface implements ItemStrategyInterface
{
    public function update(Item $item): void
    {
        $item->sell_in -= 1;
        $item->quality -= 1;
        if ($item->sell_in < 0) {
            $item->quality -= 1;
        }

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }
}