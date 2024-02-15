<?php

class Triangle {
    private $color;
    private $length;
    private $width;

    public function __construct($color, $length, $width) {
        $this->color = $color;
        $this->length = $length;
        $this->width = $width;
    }

    public function draw() {
        $output = '<svg width="' . ($this->length + 10) . '" height="' . ($this->width + 10) . '">';
        $output .= '<polygon points="' . ($this->length / 2 + 5) . ',5 5,' . ($this->width + 5) . ' ' . ($this->length + 5) . ',' . ($this->width + 5) . '" style="fill: purple; stroke: black; stroke-width: 2" />';
        $output .= '</svg>';

        return $output;
    }
}

$triangle = new Triangle("purple", 100, 100);
echo $triangle->draw();

?>
