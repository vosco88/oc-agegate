<?php namespace InfiniIT\AgeGate;

use Backend;
use System\Classes\PluginBase;

/**
 * AgeGate Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * @var array Plugin dependencies
     */
        public $require = ['Rainlab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'AgeGate',
            'description' => 'Age Gate plugin to enable simple age checking on OctoberCMS site',
            'author'      => 'InfiniIT',
            'icon'        => 'icon-unlock-alt'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'InfiniIT\AgeGate\Components\Gate' => 'Gate',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'infiniit.agegate.some_permission' => [
                'tab' => 'AgeGate',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'agegate' => [
                'label'       => 'AgeGate',
                'url'         => Backend::url('infiniit/agegate/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['infiniit.agegate.*'],
                'order'       => 500,
            ],
        ];
    }
}
