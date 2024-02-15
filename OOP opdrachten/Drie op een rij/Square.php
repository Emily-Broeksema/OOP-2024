<?php

class Square {
    private $color;
    private $length;

    public function __construct($color, $length) {
        $this->color = $color;
        $this->length = $length;
    }

    public function draw() {
        // Draw square as a string representation
        $output = '<svg width="' . ($this->length + 10) . '" height="' . ($this->length + 10) . '">';
        $output .= '<rect x="5" y="5" width="' . $this->length . '" height="' . $this->length . '" style="fill: green; stroke: black; stroke-width: 5" />';
        $output .= '</svg>';

        return $output;
    }
}

// Usage:
$square = new Square("green", 100);
echo $square->draw();

?>
