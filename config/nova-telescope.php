<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Navigation Title
    |--------------------------------------------------------------------------
    |
    | This value controls the navigation title of the tool. This value is used
    | when the tool needs to display the title within the navigation. Of course,
    | you're free to change the value.
    |
    */

    'title' => env('NOVA_TELESCOPE_TITLE', 'Telescope'),

    /*
    |--------------------------------------------------------------------------
    | Target Attribute
    |--------------------------------------------------------------------------
    |
    | Here you may specify the target attribute that should be used when opening
    | the linked telescope document. By default, "_self" is used; however, you
    | remain free to modify this option if you wish.
    |
    | Supported: "_blank", "_self", "_parent", "_top", "framename"
    |
    */

    'target' => env('NOVA_TELESCOPE_TARGET', '_self'),

];
