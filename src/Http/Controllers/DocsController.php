<?php

namespace Nue\Docs\Http\Controllers;

use Illuminate\Routing\Controller;

class DocsController extends Controller
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Docs';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        view()->share([
            'title' => $this->title
        ]);
    }

    /**
     * Index interface.
     *
     * @param Request $request
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        return view('nue-docs::index');
    }
}