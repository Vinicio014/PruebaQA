/* deysi */
<?php
declare(strict_types=1);

namespace App\Interfaces;

interface ProductInterface
{
    public function getId(): int;
    public function getName(): string;
    public function getPrice(): float;
    public function getCategoryId(): int;
    public function getSupplierId(): int;
}