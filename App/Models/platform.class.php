<?php
final class Plateform extends Mother
{

protected $name;


public function __construct(
    int $id = null,
    string $name = '',
    string $link = ''
)
{
    parent::__construct(
        $id,
        $link
);
}
{
    
    $this->name = $name;
    
}
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

