<?php

namespace Example;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    #[Test]
    public function example(): void
    {
        $this->assertSame(3, 1+2);
    }
}