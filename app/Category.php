<?php

namespace App;

use TCG\Voyager\Models\Category as ModelsCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends ModelsCategory
{
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }

    public function allProducts()
    {
        $allProducts = collect();

        $mainCategoryProducts = $this->products;

        $allProducts = $allProducts->concat($mainCategoryProducts);

        if ($this->children->isNotEmpty()) {
            
            foreach ($this->children as $child) {
                $allProducts = $allProducts->concat($child->products);
            }
        }

        return $allProducts;
    }
}
