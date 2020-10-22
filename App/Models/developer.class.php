<?php

require_once '/App/Models/mother.class.php';

final class Developer extends Mother
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

    function create($id, $name, $price, $brandId, $ram) {
        return new GpuComponent($id, $name, $price, $brandId, $ram);
    }
    
    function fetchAllGpuComponents() {
        global $databaseHandler;
    
        $statement = $databaseHandler->query('SELECT * FROM `gpus`');
        return $statement->fetchAll(PDO::FETCH_FUNC, 'createGpuComponent');
    }
    