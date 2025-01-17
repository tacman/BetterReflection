<?php

declare(strict_types=1);

namespace Roave\BetterReflection\SourceLocator\Located;

/**
 * @internal
 */
class AliasLocatedSource extends LocatedSource
{
    public function __construct(string $source, string $name, ?string $filename, private string $aliasName)
    {
        parent::__construct($source, $name, $filename);
    }

    public function getAliasName(): ?string
    {
        return $this->aliasName;
    }
}
