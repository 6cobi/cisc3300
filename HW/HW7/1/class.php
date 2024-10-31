<?php
class Cat {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }

    public function getColor() { return $this->color; }
    public function setColor($color) { $this->color = $color; }

    public static function getBreed() {
        return "Russian Blue";
    }
}
