<?php

require_once '/App/Models/mother.class.php';

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

    function createNewPlatform($id, $name, $link) {
        return new createNewPlatform($id, $name, $link);
    
    function fetchAllPlatform() {
        global $dbh;
    
        $stmt = $dbh->query('SELECT * FROM `platform`');
        return $stmt->fetchAll(PDO::FETCH_FUNC, 'createNewPlatform');
    }

    

