<?php

namespace App\Data;

use Livewire\Wireable;
use Spatie\LaravelData\Attributes\Computed;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

class UserData extends Data implements Wireable
{
    use WireableData;
    
    #[Computed]
    public string $name;

    public function __construct(
        public string $firstName,
        public string $lastName,
    ) {
        $this->name = "{$this->firstName} {$this->lastName}";
    }
}