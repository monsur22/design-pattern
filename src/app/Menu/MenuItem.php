<?php
namespace App\Menu;

class MenuItem implements MenuComponent
{
    public function __construct(
        private string $title,
        private string $url
    ) {}

    public function toArray(): array
    {
        return [
            'type' => 'item',
            'title' => $this->title,
            'url' => $this->url,
        ];
    }
}
