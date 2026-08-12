<?php
/**
 * Tests for CrewExecutor
 */

use PHPUnit\Framework\TestCase;
use Crewexecutor\Crewexecutor;

class CrewexecutorTest extends TestCase {
    private Crewexecutor $instance;

    protected function setUp(): void {
        $this->instance = new Crewexecutor(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewexecutor::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
