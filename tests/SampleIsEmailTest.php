<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

function isValidEmail(string $str): bool
{
	return str_contains($str, '@') && str_contains($str, '.');
}

function isCorrectEmail(string $str): bool
{
	return $str === filter_var($str, FILTER_VALIDATE_EMAIL);
}

final class SampleIsEmailTest extends TestCase
{
	public function testIsValidEmail(): void
	{
		$this->assertTrue(isValidEmail('test@example.com'));
		$this->assertTrue(isValidEmail('john.doe@example.com'));
		$this->assertFalse(isValidEmail('invalid-email'));
		$this->assertFalse(isValidEmail('test@example'));
		$this->assertFalse(isValidEmail('test'));
	}

	public function testIsCorrectEmail(): void
	{
		$this->assertTrue(isCorrectEmail('test@example.com'));
		$this->assertTrue(isCorrectEmail('john.doe@example.com'));
		$this->assertFalse(isCorrectEmail('invalid-email'));
		$this->assertFalse(isCorrectEmail('test@example'));
		$this->assertFalse(isCorrectEmail('test'));
	}
}

