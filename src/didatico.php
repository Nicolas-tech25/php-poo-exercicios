<?php
require_once "tecnico.php";

final class Didatico extends Tecnico{
    private string $diciplina;
    private array $nivel = ["basico","medio", "superior"];

    /**
     * Get the value of diciplina
     *
     * @return string
     */
    public function getDiciplina(): string
    {
        return $this->diciplina;
    }

    /**
     * Set the value of diciplina
     *
     * @param string $diciplina
     *
     * @return self
     */
    public function setDiciplina(string $diciplina): self
    {
        $this->diciplina = $diciplina;

        return $this;
    }

    /**
     * Get the value of nivel
     *
     * @return array
     */
    public function getNivel(): array
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @param array $nivel
     *
     * @return self
     */
    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}