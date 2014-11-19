<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cache config (true or false)
    |--------------------------------------------------------------------------
    */
    'cache' => false,

    /*
    |--------------------------------------------------------------------------
    | Modules config
    |--------------------------------------------------------------------------
    */
    'modules' => array(

       /*
       |--------------------------------------------------------------------------
       | Photo gallery config
       |--------------------------------------------------------------------------
       */
        'photo_gallery' => array(

            'thumb_size' => array(
                'width'  => 150,
                'height' => 150
            ),

            'image_dir'  => '/uploads/dropzone/',
        ),

        /*
        |--------------------------------------------------------------------------
        | Plugins slider config
        |--------------------------------------------------------------------------
        */
        'slider'        => array(

            'image_size' => array(
                'width'  => null,
                'height' => 450
            ),

            'image_dir'  => '/uploads/dropzone/',
        ),

        /*
        |--------------------------------------------------------------------------
        | News, Artices per page
        |--------------------------------------------------------------------------
        |
        | Set this to the number of news, articles you want per page.
        |
        */
        'per_page' => 10,
    ),
);
