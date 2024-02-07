<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

function sum(int $a, int $b): int
{
	return $a + $b;
}

final class SampleSumTest extends TestCase
{
	public function testSum1(): void
	{
		// $this->assertSame({expected}, {calculated});
		$this->assertSame(4, 2 + 2);
	}

	public function testMax(): void
	{
		$list = [1, 2, 3, 4]; // $list = range(1,4);
		$this->assertSame(4, max($list));
	}

	public function testSum2(): void
	{
		$this->assertSame(4, sum(2, 2));
	}

	public static function sumDataProvider(): array
	{
		return [
			[2, 2, 4],
			[1, 2, 3],
			[3, 3, 6],
			[10, 10, 20],
		];
	}

	#[\PHPUnit\Framework\Attributes\DataProvider('sumDataProvider')]
	public function testSum3(int $a, int $b, int $expected): void
	{
		$this->assertSame($expected, sum($a, $b));
	}
}

