<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Item;

class SulfurusStrategyInterface implements ItemStrategyInterface
{
    public function update(Item $item): void
    {
        $item->quality = 80;
    }
}