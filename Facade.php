<?php


require_once __DIR__."/entities/Firm.php";
require_once __DIR__."/config/bootstrap.php";


class Facade
{
    private $entitymanager;
    public function __construct()
    {
        $this->entitymanager = new EManager();
        $this->entitymanager = $this->entitymanager->getEntityManager();
    }

    public function insertFirm(string $name, int $importance,string $location,string $salary)
    {
        $firm = new Firm($name,$importance,$location);
        $application = new Application($firm,$salary);
        $this->entitymanager->persist($firm);
        $this->entitymanager->persist($application);
        $this->entitymanager->flush();
    }

    public function getAll()
    {

        $query = $this->entitymanager->createQuery
        ('SELECT a FROM Application a');


        $results = $query->getResult();

        if ($results!=null) return $results;
        else return null;
    }

    public function getFromName(string $name)
    {

        $query = $this->entitymanager->createQueryBuilder();
        $query->select('a')
            ->from('Application','a')
            ->innerJoin('Firm','f','WITH','f.id = a.firm')
            ->where('f.name = :name');
            $query->setParameter('name',$name);

        $result = $query->getQuery()->getResult();

        if ($result!=null) return $result;
        else return null;
    }

   public function update(Application $application)
   {
       $this->entitymanager->flush($application);

   }




}