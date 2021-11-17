<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Item;

interface ItemStrategyInterface
{
    public function update(Item $item): void;
}
