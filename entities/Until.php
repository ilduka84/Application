<?php

/**
 * @Entity @Table(name = "until")
 **/
class Until
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
     * One Value might be an Instance.
     * @OneToOne(targetEntity = "Application",cascade={"persist"})
     * @JoinColumn(name="idApplication", referencedColumnName="id")
     */
    private $application;

    public function __construct(Application $application)
    {
        $this->application=$application;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

}