<?php

class Team
{
    private $team;
    private $country;

    public function __construct($team)
{
    $this->team = $team;
}

    public function __toString()
{
    if ($this->country !== NULL)
        return $this->team . ' (' . $this->country . ')';
    else return $this->team;
}


    public function setCountry($country)
{
    $this->country = $country;
    return $this;
}
}


