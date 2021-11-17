<?php

namespace App;

use App\Strategy\ItemStrategyContext;

final class GildedRose
{
    public function updateQuality($item)
    {
        $itemStrategyContext = new ItemStrategyContext();
        $itemStrategy = $itemStrategyContext->getStrategy($item->name);
        $itemStrategy->update($item);
    }
}
