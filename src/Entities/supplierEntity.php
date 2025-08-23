<?php
declare(strict_types=1);

namespace App\Entities;

class Supplier
{
    private int $id;
    private string $name;
    private string $contactEmail;

    public function __construct(int $id, string $name, string $contactEmail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->contactEmail = $contactEmail;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getContactEmail(): string { return $this->contactEmail; }

    public function setId(int $id): void { $this->id = $id; }
    public function setName(string $name): void { $this->name = $name;
    public function setContactEmail(string $contactEmail): void { $this->contactEmail = $contactEmail; }
}