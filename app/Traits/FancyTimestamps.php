<?php


namespace App\Traits;


use Carbon\Carbon;
use JetBrains\PhpStorm\Pure;

trait FancyTimestamps
{
    public function fancyFormat(): string
    {
        return 'd.m.Y (H:i:s)';
    }

    #[Pure]
    public function creation(): string
    {
        $createdAtColumn = $this->getCreatedAtColumn();
        return match ($this->$createdAtColumn === null) {
            true => 'Н/д',
            false => Carbon::make(var: $this->$createdAtColumn)
                ->format(format: $this->fancyFormat())
        };
    }

    #[Pure]
    public function updated(): string
    {
        $updatedAtColumn = $this->getUpdatedAtColumn();
        return match ($this->$updatedAtColumn === null) {
            true => 'Н/д',
            false => Carbon::make(var: $this->$updatedAtColumn)
                ->format(format: $this->fancyFormat())
        };
    }
}
