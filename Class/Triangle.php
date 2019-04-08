<?php
    class Triangle {
        private $a, $b, $c;

        function __construct($a, $b, $c) {
            $this->a = $a;
    		$this->b = $b;
    		$this->c = $c;
        }

        public function getSurface() {
            return $this->a + $this->b + $this->c;
        }

        // Heronova formula za površinu trokuta
        public function getCircumference() {
            $s = $this->getSurface() / 2;
            return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
        }
    }
