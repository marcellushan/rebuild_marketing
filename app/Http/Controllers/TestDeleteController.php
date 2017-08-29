<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceRequests;


class TestDeleteController extends Controller
{
   public function index() {
       return view('service_request.destroy');
   }

   public function gone($id)
   {
//       echo $id;
       $sr = ServiceRequests::find($id);
       $sr->delete();
       dd($sr);
   }
}
