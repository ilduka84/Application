<?php

require_once ("Application.php") ;

/**
 * @Entity @Table(name = "firm")
 **/
class Firm{

    /**
     * @var integer $id
     *
     * @Id @Column(name = "id", type = "integer") @GeneratedValue**/
    private $id;

    /**
     * @var string $name
     *
     * @Column(name = "name", type = "string", length = 20)**/
    private $name;
    /**
     * @var integer $importance
     *
     * @Column(name = "importance", type = "integer", length = 1)**/
    private $importance;

    /**
     * @var string $location
     *
     * @Column(name = "location", type = "string")**/
    private $location;




    public function __construct(string $name,int $importance,string $location)
{
    $this->name = $name;
    $this->importance = $importance;
    $this->location = $location;


}

public function setApplication(Application $application)
{
    $this->application = $application;
}

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getImportance(): int
    {
        return $this->importance;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        if($this->location==null)return "";
        return $this->location;
    }
}
