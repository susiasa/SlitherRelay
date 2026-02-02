<?php
/**
 * Tests for SlitherRelay
 */

use PHPUnit\Framework\TestCase;
use Slitherrelay\Slitherrelay;

class SlitherrelayTest extends TestCase {
    private Slitherrelay $instance;

    protected function setUp(): void {
        $this->instance = new Slitherrelay(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Slitherrelay::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
