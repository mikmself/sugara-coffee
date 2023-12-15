<?php
namespace App\Helpers;

class SlugHelper
{
    public function createSlug($title)
    {
        $slug = preg_replace('/[^A-Za-z0-9:]+/', '-', $title);
        $slug = strtolower($slug);
        $slug = trim($slug, '-');
        return $slug;
    }

}
