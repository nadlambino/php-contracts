<?php

declare(strict_types=1);

namespace Inspira\Contracts;

use Throwable;

interface ExceptionWithSuggestions extends Throwable
{
	public function getSuggestions(): array;
}
