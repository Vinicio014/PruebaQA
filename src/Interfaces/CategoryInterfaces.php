<?php
declare(strict_types=1);

namespace App\Interfaces;

interface CategoryInterface
{
    public function getId(): int;
    public function getName(): string;
}