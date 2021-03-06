<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Partner;

class PagesController extends Controller
{

  public function index(Partner $partner)
  {

      return view('pages.partner_detail',compact('partner'));
  }
    public function Pages($pages)
  {
    if($pages =='parteneri')
    {
      $data= Partner::all()->take(9);

      return view('pages.parteneri', compact('data'));
    }
    else
      return view('pages.'.$pages);
  }
  public function storeMessages(Request $request)
  {
    $this->validate($request, [
      'name'=> 'required',
      'email'=>'required|email',
      'message'=>'required',
      ]);

    Message::create($request->all());
    return redirect()->back()->with('message','Mesajul a fost trimis!');
  }
  public function displayMessages()
  {
    $data=Message::all();

    return view('pages.admin.messages',compact('data'));
  }


}
