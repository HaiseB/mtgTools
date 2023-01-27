<?php

define("TYPES", ['creature','planeswalker','artifact','enchantment','instant','sorcery','land']);

class card
{
    private $name;
    private $color;
    private $isLegendary;
    private $isCreature;
    private $isPlaneswalker;
    private $isArtifact;
    private $isEnchantment;
    private $isInstant;
    private $isSorcery;
    private $isLand;
    private $subtype;
    private $power;
    private $toughness;
    private $loyalty;
    private $artist;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return card
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return card
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     * @return card
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsLegendary()
    {
        return $this->isLegendary;
    }

    /**
     * @param mixed $isLegendary
     * @return card
     */
    public function setIsLegendary($isLegendary)
    {
        $this->isLegendary = $isLegendary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsCreature()
    {
        return $this->isCreature;
    }

    /**
     * @param mixed $isCreature
     * @return card
     */
    public function setIsCreature($isCreature)
    {
        $this->isCreature = $isCreature;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsPlaneswalker()
    {
        return $this->isPlaneswalker;
    }

    /**
     * @param mixed $isPlaneswalker
     * @return card
     */
    public function setIsPlaneswalker($isPlaneswalker)
    {
        $this->isPlaneswalker = $isPlaneswalker;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsArtifact()
    {
        return $this->isArtifact;
    }

    /**
     * @param mixed $isArtifact
     * @return card
     */
    public function setIsArtifact($isArtifact)
    {
        $this->isArtifact = $isArtifact;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsEnchantment()
    {
        return $this->isEnchantment;
    }

    /**
     * @param mixed $isEnchantment
     * @return card
     */
    public function setIsEnchantment($isEnchantment)
    {
        $this->isEnchantment = $isEnchantment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsInstant()
    {
        return $this->isInstant;
    }

    /**
     * @param mixed $isInstant
     * @return card
     */
    public function setIsInstant($isInstant)
    {
        $this->isInstant = $isInstant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsSorcery()
    {
        return $this->isSorcery;
    }

    /**
     * @param mixed $isSorcery
     * @return card
     */
    public function setIsSorcery($isSorcery)
    {
        $this->isSorcery = $isSorcery;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsLand()
    {
        return $this->isLand;
    }

    /**
     * @param mixed $isLand
     * @return card
     */
    public function setIsLand($isLand)
    {
        $this->isLand = $isLand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @param mixed $subtype
     * @return card
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     * @return card
     */
    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToughness()
    {
        return $this->toughness;
    }

    /**
     * @param mixed $toughness
     * @return card
     */
    public function setToughness($toughness)
    {
        $this->toughness = $toughness;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * @param mixed $loyalty
     * @return card
     */
    public function setLoyalty($loyalty)
    {
        $this->loyalty = $loyalty;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     * @return card
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
        return $this;
    }


    public function setDataFromForm(array $data)
    {
        // we retrieve properties names
        foreach (get_object_vars($this) as $key=>$value) {
            // we test that it exist in the data
            if (array_key_exists($key, $data) && !empty($data[$key])) {
                // we set the data binded
                $methodAsString = 'set' . ucfirst($key);
                $this->$methodAsString($data[$key]);
            }
        }

        return $this;
    }

    public function getCardForExport()
    {
        foreach ($this as $key=>$value) {
            $card[$key] = $value;
        }

        return $card;
    }
}
