<?php

namespace Idecardo\NovaTelescope;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Laravel\Telescope\Telescope;

class NovaTelescope extends Tool
{
    /**
     * The navigation view for the tool.
     *
     * @var string
     */
    protected $view;

    /**
     * The navigation title for the tool.
     *
     * @var string
     */
    protected $title;

    /**
     * The target attribute where to open the linked telescope.
     *
     * @var string
     */
    protected $target;

    /**
     * Create a new tool instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->view = 'nova-telescope::navigation';

        $this->title = config('nova-telescope.title');

        $this->target = config('nova-telescope.target');
    }

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        $this->canSee(function ($request) {
            return Telescope::check($request);
        });
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view($this->view, [
            'title' => $this->title,
            'target' => $this->target,
        ]);
    }
}
