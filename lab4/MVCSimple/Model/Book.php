<?php


class Book
{
    public $title;
    public $author;
    public $description;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $description
     */
    public function __construct($title, $author, $description)
    {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }


}