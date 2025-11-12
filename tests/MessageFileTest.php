<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class MessageFileTest extends TestCase
{
    public function test_bundled_messages_file_is_valid_json(): void
    {
        $this->assertTrue(json_validate(file_get_contents(__DIR__.'/../messages.json')));
    }
}
