<?php
/**
 * Tests for FlashLoan
 */

use PHPUnit\Framework\TestCase;
use Flashloan\Flashloan;

class FlashloanTest extends TestCase {
    private Flashloan $instance;

    protected function setUp(): void {
        $this->instance = new Flashloan(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Flashloan::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
