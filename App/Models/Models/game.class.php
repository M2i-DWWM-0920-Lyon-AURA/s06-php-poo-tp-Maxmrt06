<?php

require_once '/App/Models/mother.class.php';

final class Game extends Mother
{

protected $titre;
protected $date;

protected $developerId;
protected $platformId;

public function __construct(
    int $id = null,
    string $titre = '',
    string $date = '',
    string $link = '',
    string $developerId = '',
    string $platformId = '',
)
{
    parent::__construct(
        $id,
        $link
);
}
{
   
    $this->titre = $titre;
    $this->date = $date;
    $this->developerId = $developerId;
    $this->platformId = $platformId;

    

/**
 * Get the value of titre
 */ 
public function getTitre()
{
return $this->titre;
}

/**
 * Set the value of titre
 *
 * @return  self
 */ 
public function setTitre($titre)
{
$this->titre = $titre;

return $this;
}

/**
 * Get the value of date
 */ 
public function getDate()
{
return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
$this->date = $date;

return $this;
}



/**
 * Get the value of developerId
 */ 
public function getDeveloperId()
{
return $this->developerId;
}

/**
 * Set the value of developerId
 *
 * @return  self
 */ 
public function setDeveloperId($developerId)
{
$this->developerId = $developerId;

return $this;
}

/**
 * Get the value of platformId
 */ 
public function getPlatformId()
{
return $this->platformId;
}

/**
 * Set the value of platformId
 *
 * @return  self
 */ 
public function setPlatformId($platformId)
{
$this->platformId = $platformId;

return $this;
}


function createNewGame($id, $titre, $date, $link, $developerId, $platformId) {
    return new createNewGame($id, $titre, $date, $link, $developerId, $platformId);

function fetchAllGame() {
    global $dbh;

    $stmt = $dbh->query('SELECT * FROM `game`');
    return $stmt->fetchAll(PDO::FETCH_FUNC, 'createNewGame');
}