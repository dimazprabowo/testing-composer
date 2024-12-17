<?php

namespace Dismky\ComposerTesting\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function triggerForSync()
    {
        return "Trigger For Hint Cuy" ;
    }

    public function triggerForAsync()
    {
        return "Trigger For Async Cuy" ;
    }
}