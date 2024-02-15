<?php

class Circle {
    private $color;
    private $radius;

    public function __construct($color, $radius) {
        $this->color = $color;
        $this->radius = $radius;
    } // meneer van der brugge zei dat het radius moet zijn

    public function draw() {
        $output = '<svg width="' . ($this->radius * 2 + 10) . '" height="' . ($this->radius * 2 + 10) . '">';
        $output .= '<circle cx="' . ($this->radius + 5) . '" cy="' . ($this->radius + 5) . '" r="' . $this->radius . '" stroke="' . $this->color . '" stroke-width="10" fill="aqua" />';
        $output .= '</svg>';

        return $output;
    }
}

$circle = new Circle("black", 50);
echo $circle->draw();

?>
