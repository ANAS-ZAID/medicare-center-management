<?php

include $categoriesData;

class CategoriesController
{
    static function fetchAllCategories()
    {
        return CategoriesData::fetchAllCategories();
    }
}

if (fileetrRequest("page", "get") === "index" || fileetrRequest("page", "get") === null) {
    include $scerennIndexCategory;
}
