<?php
require_once "tecnico.php";

final class Programacao extends Tecnico{
    private string $area;

    /**
     * Get the value of area
     *
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * Set the value of area
     *
     * @param string $area
     *
     * @return self
     */
    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}