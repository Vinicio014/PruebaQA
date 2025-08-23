<?php
declare(strict_types=1);

namespace App\Interfaces;

interface SupplierInterface
{
    public function getId(): int;
    public function getName(): string;
    public function getContactEmail(): string;

    public function setId(int $id): void;
    public function setName(string $name): void;
    public function setContactEmail(string $contactEmail): void;
}
