<?php


class Car
{
    /**
     * @var integer
     */
    private int $nbWheels = 4;

    /**
     * @var integer
     */
    public int $currentSpeed = 0;

    /**
     * @var string
     */
    private string $color;
    /**
     * @var integer
     */
    private int $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private int $energyLevel = 80;

    /**
     * @var boolean
     */
    private bool $start = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 50;

        return 'Car goes !';
    }

    public function brake()
    {
        $sentence = '';
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Brake !';
        }
        $sentence .= 'I am stopped !';
        return $sentence;
    }

    public function start(): bool
    {
        if($this->currentSpeed == 0 && $this->energyLevel > 0 ){
            $this->start = true;
        }
        return 'Car starting to go!!!!';
    }

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels)
    {
        if($nbWheels != 4){
            $this->nbWheels = 4;
        } else {
            $this->nbWheels = $nbWheels;
        }

    }

    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy)
    {
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return bool
     */
    public function isStart()
    {
        return $this->start;
    }

    /**
     * @param bool $start
     */
    public function setStart(bool $start)
    {
        $this->start = $start;
    }




}