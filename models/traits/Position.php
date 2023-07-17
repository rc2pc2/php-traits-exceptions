<?php

trait Position{
    public $corsia;
    public $scaffale;

    public function getCoords() : String{
        return "This object is at coordinates: $this->corsia, $this->scaffale";
    }
}