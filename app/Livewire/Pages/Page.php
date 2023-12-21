<?php

namespace App\Livewire\Pages;

class Page
{
    public static string $pageTitle;
    public static array $pageSideBarLinks;

    public static function setPageTitle($title): string
    {
        return self::$pageTitle = $title;
    }

    public static function getPageTitle(): string
    {
        return self::$pageTitle;
    }

    public static function setSideBarLinks(array $linksArray): array
    {
        return self::$pageSideBarLinks = $linksArray;
    }

    public static function getSideBarLinks(): array
    {
        return self::$pageSideBarLinks;
    }

}
