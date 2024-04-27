<?php

namespace alihesarian\ControllerTheme\Interface;

interface InterfaceController{
    
    public function Auth(
        string $Value
    ) : string;

    public function Init(
        string $Data
    ) : void;

    public function Update() : bool;
}