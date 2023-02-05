<?php

declare(strict_types=1);

namespace Strictus\Types;

use Strictus\Interfaces\StrictusTypeInterface;
use Strictus\Traits\StrictusTyping;

final class StrictusObject implements StrictusTypeInterface
{
    use StrictusTyping;

    private string $instanceType = 'object';

    private string $errorMessage = 'Expected Object';

    /**
     * @param  object|null  $value
     * @param  bool  $nullable
     */
    public function __construct(private ?object $value, private bool $nullable)
    {
        if ($this->nullable) {
            $this->errorMessage .= ' Or Null';
        }
    }
}
