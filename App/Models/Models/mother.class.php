<?php
require_once 

abstract class Mother
{
    protected $id;
    protected $link;
}
public function __construct(
    int $id = null,
    string $link ='',
)
{
    $this->id = $id;
    $this->link = $link;

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }
}