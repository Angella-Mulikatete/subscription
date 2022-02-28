<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Http\Request;


use Illuminate\Foundation\Validation\ValidatesRequests;

class SubscribeController extends Controller
{
    use ValidatesRequests;
     
    public function index(Request $request)
    {
        $subscribes = Subscriber::all();
        return view('home', compact('subscribes'));
        
        
    }

    public function create(Request $request)
    {
    //     $this -> validate($request,[
    //         'name'=>'required',
    //         'description'=>'required',
    //         'trial_period'=>'required',
    //         'invoice_period'=>'required',
    //     ]);

    //      $subscribes = new Subscriber;
    //      $subscribes ->name = $request -> input('name');
    //      $subscribes ->description = $request -> input('description');
    //      $subscribes ->trial_period = $request -> input('trial_period');
    //      $subscribes ->invoice_period = $request -> input('invoice_period');
    //      $subscribes->save();
    //    return redirect('/subscribe')->with('success','plan added!');
    }

    public function edit($id)
    {
        $subscribes= Subscriber::find($id);
        return view('auth.edit', compact('subscribes'));
       

    }


    public function update(Request $request, $id)
    {
       $this -> validate($request,[
            'name'=>'required',
            'description'=>'required',
            'trial_period'=>'required',
            'invoice_period'=>'required',
        ]);

    

         $subscribes = Subscriber::find($id);
         $subscribes ->name = $request -> input('name');
         $subscribes ->description = $request -> input('description');
         $subscribes ->trial_period = $request -> input('trial_period');
         $subscribes ->invoice_period = $request -> input('invoice_period');
         $subscribes->save();
       return redirect('/subscribe')->with('success','plan updated!');
    
    }

    public function destroy($id)
    {
        // return $id;
        
        $subscribes = Subscriber::find($id);
        if(!is_null($subscribes->id)){
        $subscribes->delete($id);
        }
        return redirect('/subscribe')->with('success','plan canceled!');

    }


    public function store(Request $request)
    {
        $this -> validate($request,[
            'name'=>'required',
            'description'=>'required',
            'trial_period'=>'required',
            'invoice_period'=>'required',
        ]);

         $subscribes = new Subscriber;
         $subscribes ->name = $request -> input('name');
         $subscribes ->description = $request -> input('description');
         $subscribes ->trial_period = $request -> input('trial_period');
         $subscribes ->invoice_period = $request -> input('invoice_period');
         $subscribes->save();
       return redirect('/subscribe')->with('success','plan added!');
    }



    public function show($id)
    {
       $subscribes= Subscriber::find($id);
       return view('auth.show', compact('subscribes'));
      
    }    
}



// public function create()
    // {
    //     $subscribes = Subscriber::all();
    //     $this -> validate($request,[
    //         'name'=>required,
    //         'description'=>required,
    //         'trial_period'=>required,
    //         'invoice_period'=>required,
    //     ]);
    //      $post = new Subscriber;
    //      $post ->name = $request -> input('name');
    //      $post ->description = $request -> input('description');
    //      $post ->trial_period = $request -> input('trial_period');
    //      $post ->invoice_period = $request -> input('invoice_period');
    //      $post->save();


    //     return view('auth.create', compact('subscribes'));

    //     // Subscriber::create([
    //     //     'name'=>request('name'),
    //     //     'description'=>request('description'),
    //     //     'trial_period'=>request('trial_period'),
    //     //     'invoice_period'=>request('invoice_period'),
    //     // ]);
    //     // return redirect('/subscribe');


    //     //return view('auth.create');

    // }