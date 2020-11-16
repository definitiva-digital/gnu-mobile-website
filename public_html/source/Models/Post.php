<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Class Post
 * @package Source\Models
 */
class Post extends DataLayer
{
    /**
     * Post constructor.
     */
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

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        if(isset($this->id)){
            return (new Category())->findById($this->category);
        }

        return null;
    }
}