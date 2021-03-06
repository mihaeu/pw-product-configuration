<?php declare(strict_types = 1);

namespace Mihaeu\ProductConfigurator;

class Option
{
    /**
     * @var Money
     */
    private $price;

    /**
     * @var  OptionName
     */
    private $name;

    /**
     * @var OptionCollection
     */
    private $incompatibleOptions;

    /**
     * @param OptionName $name
     * @param Money $price
     */
    public function __construct(OptionName $name, Money $price, OptionCollection $incompatibleOptions = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->incompatibleOptions = $incompatibleOptions ?? new OptionCollection();
    }

    /**
     * @return Money
     */
    public function price() :Money
    {
        return $this->price;
    }

    public function name() : string
    {
        return $this->name->__toString();
    }

    public function __toString() : string
    {
        return $this->price->__toString();
    }

    public function isCompatibleWith(OptionCollection $options) : bool
    {
        if (0 === count($options) || 0 === count($this->incompatibleOptions)) {
            return true;
        }

        /** @var Option $option */
        foreach ($options as $option) {
            /** @var Option $incompatibleOption */
            foreach ($this->incompatibleOptions as $incompatibleOption) {
                if ($option->name() === $incompatibleOption->name()) {
                    return false;
                }
            }
        }
        return true;
    }
}
