<?php

namespace App\Strategy;

class ItemStrategyContext
{
    private const AGED_BRIE = 'Aged Brie';
    private const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';
    private const SULFURUS = 'Sulfuras, Hand of Ragnaros';

    private $strategies = [
        self::AGED_BRIE => AgedBrieStrategyInterface::class,
        self::BACKSTAGE => BackstageStrategyInterface::class,
        self::SULFURUS => SulfurusStrategyInterface::class,
    ];

    public function getStrategy(string $name): ItemStrategyInterface
    {
        if (array_key_exists($name, $this->strategies)) {
            return new $this->strategies[$name]();
        }

        return new StandardItemStrategyInterface();
    }
}