<?php

/**
 * @Entity @Table(name = "type")
 **/
class Type
{
    /**
     * @var integer $id
     *
     * @Id @Column(name = "id", type = "integer") @GeneratedValue**/
    private $id;

    /**
     * @var string $type
     *
     * @Column(name = "type", type = "string")**/
    private $type;
    /**
     * @var Application $application
     *
     * Many Field has One Object.
     * @ManyToOne(targetEntity = "Application", inversedBy = "types")
     * @JoinColumn(name = "idApplication")
     */
    private $application;

    public function __construct(string $type,Application $application)
    {
        $this->type = $type;
        $this->application = $application;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

}