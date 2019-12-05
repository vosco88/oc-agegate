<?php namespace InfiniIT\AgeGate\Components;

use Cms\Classes\ComponentBase;

class Gate extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Age Gate Component',
            'description' => 'Includes age gate to the site'
        ];
    }

    public function defineProperties()
    {
        return [
            'cookie' => [
                'title'             => 'Cookie retention',
                'description'       => 'Specify cookie retention in days',
                'default'           => 7,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The cookie retention property can contain only numeric symbols'
            ],
            'cancelUrl' => [
                'title'             => 'Cancel URL',
                'description'       => 'URL where user will be redirected if he clicks No (use http/https for external URLs',
                'default'           => '/',
                'type'              => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/infiniit/agegate/assets/css/popup.css');
        $this->addJs('/plugins/infiniit/agegate/assets/js/popup.js');
    }
}
