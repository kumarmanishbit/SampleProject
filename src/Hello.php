<?php

namespace Kumarmanish\PhpSampleProject;

class Hello {

    function getHello(): string
    {
        $person = array("Manish", "Dave", "Tom", "Stephen");

        return "Hello from ".$person[sizeof($person) % rand(1, 4)];
    }
}

