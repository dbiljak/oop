<?php
    class Circle {
        private $r;

        function __construct($r) {
            $this->r = $r;
        }

        public function getSurface() {
            return pi() * ($this->r ** 2);
        }

        public function getCircumference() {
            return 2 * $this->r * pi();
        }
    }
