<?php
class Module
{
    private $title;
    private $credits;
    public function __construct($title, $credits)
    {
        $this->title = $title;
        $this->credits = $credits;
    }
}
