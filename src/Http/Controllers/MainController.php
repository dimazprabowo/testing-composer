<?php

namespace Dismky\ComposerTesting\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function triggerForSync()
    {
        return "Jangan Pernah Merasa Bosan Walaupun Belerick dan Gatot di Ban" ;
    }

    public function triggerForAsync()
    {
        return "Tapi Merasa Bosanlah Ketika Tidak Pernah MVP" ;
    }
}