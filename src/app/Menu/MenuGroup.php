<?php
namespace App\Menu;

class MenuGroup implements MenuComponent
{
    private array $items = [];

    public function __construct(private string $title) {}

    public function add(MenuComponent $item): void
    {
        $this->items[] = $item;
    }

    public function toArray(): array
    {
        return [
            'type' => 'group',
            'title' => $this->title,
            'children' => array_map(fn($item) => $item->toArray(), $this->items),
        ];
    }
}
