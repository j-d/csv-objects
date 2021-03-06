<?php

namespace CSVObjects\CSVObjectsBundle\Tests\Objects;

class Fruit
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $colour;

    /**
     * @var string|null
     */
    private $originCountry;

    /**
     * @var string|null
     */
    private $originCity;

    /**
     * @var string|null
     */
    private $class;

    /**
     * @var string|null
     */
    private $expiryDate;

    /**
     * @var Contract|null
     */
    private $contract;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @return string|null
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param string $originCountry
     */
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;
    }

    /**
     * @return string|null
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * @param string $originCity
     */
    public function setOriginCity($originCity)
    {
        $this->originCity = $originCity;
    }

    /**
     * @return string|null
     */
    public function getOriginCity()
    {
        return $this->originCity;
    }

    /**
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return string|null
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $expiryDate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @return Contract|null
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param Contract $contract
     */
    public function setContract(Contract $contract)
    {
        $this->contract = $contract;
    }

    /**
     * @param string   $name
     * @param string   $colour
     * @param string   $originCountry
     * @param string   $originCity
     * @param string   $class
     * @param string   $expiryDate
     * @param Contract $contract
     *
     * @return Fruit
     */
    public static function getFruitFromFullInfo(
        $name,
        $colour = null,
        $originCountry = null,
        $originCity = null,
        $class = null,
        $expiryDate = null,
        Contract $contract = null
    ) {
        $fruit = new Fruit($name);

        if (null !== $colour) {
            $fruit->setColour($colour);
        }

        if (null !== $originCountry) {
            $fruit->setOriginCountry($originCountry);
        }

        if (null !== $originCity) {
            $fruit->setOriginCity($originCity);
        }

        if (null !== $class) {
            $fruit->setClass($class);
        }

        if (null !== $expiryDate) {
            $fruit->setExpiryDate($expiryDate);
        }

        if (null !== $contract) {
            $fruit->setContract($contract);
        }

        return $fruit;
    }
}
