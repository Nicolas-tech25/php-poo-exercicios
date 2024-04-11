<?php
namespace Tucano;

class Tecnico extends Livro {
    private array $formato = ["digital","fisico"];

    /**
     * Get the value of formato
     *
     * @return array
     */
    public function getFormato(): array
    {
        return $this->formato;
    }

    /**
     * Set the value of formato
     *
     * @param array $formato
     *
     * @return self
     */
    public function setFormato(array $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}