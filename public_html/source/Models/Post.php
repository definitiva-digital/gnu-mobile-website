<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer
{
    public function __construct()
    {
        parent::__construct('posts', [
            'title',
            'slug',
            'image',
            'resume',
            'content',
            'category',
        ]);
    }

    public function getCategory(): ?Category
    {
        if(isset($this->id)){
            return (new Category())->findById($this->category);
        }

        return null;
    }
}