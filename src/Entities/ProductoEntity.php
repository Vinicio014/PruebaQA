/* deysi */

<?php declare(strict_types=1);

namespace App\Entities;

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $categoryId;
    private int $supplierId;

    public function __construct(int $id, string $name, float $price, int $categoryId, int $supplierId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->categoryId = $categoryId;
        $this->supplierId = $supplierId;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getPrice(): float { return $this->price; }
    public function getCategoryId(): int { return $this->categoryId; }
    public function getSupplierId(): int { return $this->supplierId; }
}