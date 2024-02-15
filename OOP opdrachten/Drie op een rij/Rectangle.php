<?php

class Rectangle {
    private $color;
    private $height;
    private $width;

    public function __construct($color, $height, $width) {
        $this->color = $color;
        $this->height = $height;
        $this->width = $width;
    }

    public function draw() {
        $output = '<svg width="' . ($this->width + 10) . '" height="' . ($this->height + 10) . '">';
        $output .= '<rect x="5" y="5" width="' . $this->width . '" height="' . $this->height . '" style="fill: green; stroke: black; stroke-width: 2" />';
        $output .= '</svg>';

        return $output;
    }
}

$rectangle = new Rectangle("green", 50, 150);
echo $rectangle->draw();

?>
