<?php
require_once "tecnico.php";

final class Didatico extends Tecnico{
    private string $diciplina;
    private array $nivel = ["basico","medio", "superior"];
}