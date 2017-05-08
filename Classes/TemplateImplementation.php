<?php
declare(strict_types=1);

namespace Ttree\FusionString;

use Neos\Fusion\FusionObjects\AbstractFusionObject;

class TemplateImplementation extends AbstractFusionObject
{
    public function getSource(): string
    {
        return $this->fusionValue('source') ?: '';
    }

    public function getValues(): array
    {
        $values = [];
        $rawValues = $this->fusionValue('values') ?: [];
        \array_walk($rawValues, function ($value, $key) use (&$values) {
            $key = '{' . $key . '}';
            $values[$key] = (string)$value;
        });
        return $values;
    }

    public function evaluate(): string
    {
        $values = $this->getValues();
        return \str_replace(\array_keys($values), \array_values($values), $this->getSource());
    }
}
