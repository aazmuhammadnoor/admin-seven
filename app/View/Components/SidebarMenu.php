<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarMenu extends Component
{
    public $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->getMenu();
    }

    public function getMenu()
    {
        $menu = [
                    [
                        "url" => '#',
                        "label" => 'Dashboard 1',
                        "icon" => 'fa-tachometer-alt',
                        "child" => [
                            [
                                "url" => '#',
                                "label" => 'Form',
                                "icon" => 'fa-dashboard'
                            ],
                            [
                                "url" => '#',
                                "label" => 'Table',
                                "icon" => 'fa-dashboard'
                            ]
                        ]
                    ],
                    [
                        "url" => '#',
                        "label" => 'Template',
                        "icon" => 'fa-clipboard',
                        "child" => [
                            [
                                "url" => '#',
                                "label" => 'Form',
                                "icon" => 'fa-dashboard'
                            ],
                            [
                                "url" => '#',
                                "label" => 'Table',
                                "icon" => 'fa-dashboard'
                            ]
                        ]
                    ]
                ];

        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar-menu');
    }
}
