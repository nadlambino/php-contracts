<?php

declare(strict_types=1);

namespace Inspira\Contracts;

interface Renderable
{
	public function render(): string;
}
