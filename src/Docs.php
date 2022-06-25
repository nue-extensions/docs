<?php

namespace Nue\Docs;

use Novay\Nue\Extension;

class Docs extends Extension
{
    public $name = 'docs';

    public $views = __DIR__.'/../resources/views';

    /**
     * Enable this function if you want to automatically inject menu & permission
     * for your package into nue.
     * 
     * {@inheritdoc}
     */
    // public static function import()
    // {
    //     parent::createMenu('Docs', 'docs', 'fa:asterisk');

    //     parent::createPermission('Docs', 'ext.docs', 'docs*');
    // }
}