<?php


require_once ("Firm.php") ;
require_once ("Type.php");
require_once ("Until.php");

/**
 * @Entity @Table(name = "application")
 **/
class Application{
    /**
     * @var integer $id
     *
     * @Id @Column(name = "id", type = "integer") @GeneratedValue**/
    private $id;

    /**
     * @var  DateTime $data
     *
     * @Column(name = "data", type = "date")**/
    private $data;

    /**
     * @var string $feedback
     *
     * @Column(name = "feedback", type = "string")**/
    private $feedback;

    /**
     * @var string $salary
     *
     * @Column(name = "salary", type = "string")**/
    private $salary;

    /**
     * @var Firm $firm
     *
     * One Value might be an Instance.
     * @OneToOne(targetEntity = "Firm" ,mappedBy="id",cascade={"persist"})
     * @JoinColumn(name="firm", referencedColumnName="id")
     */
    private $firm;

    /**
     * @var Until $until
     *
     * One Value might be an Instance.
     * @OneToOne(targetEntity = "Until",cascade={"persist"})
     * @JoinColumn(name="until", referencedColumnName="id")
     */
    private $until;

    /**
     * @var $types[]
     * @OneToMany(targetEntity="Type", mappedBy="application", cascade={"persist"})
     */
    public $types;

    public function __construct(Firm $firm,$salary)
    {
        $this->salary = $salary;
        $this->firm = $firm;
        $this->data = new DateTime();
        $this->types = new \Doctrine\Common\Collections\ArrayCollection();
        $type = new Type(arrayTypes[0],$this);

        $this->types->add($type);
        $this->until = new Until($this);



    }

    /**
     * @return Firm
     */
    public function getFirm(): Firm
    {
        return $this->firm;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @return DateTime
     */
    public function getData(): DateTime
    {
        return $this->data;
    }
    public function addType(string $type)
    {
        $helper = new Type($type,$this);
        $this->types->add($helper);
    }

    /**
     * @return string
     */
    public function getFeedback(): string
    {
        if ($this->feedback==null) return "";
        return $this->feedback;
    }

    /**
     * @param string $feedback
     */
    public function setFeedback(string $feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * @return string
     */
    public function getSalary(): string
    {
        if ($this->salary == null ) return "";
        return $this->salary;
    }

    /**
     * @param string $salary
     */
    public function setSalary(string $salary)
    {

        $this->salary = $salary;
    }
}
