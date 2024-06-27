<?php

namespace App\Http\Controllers;

use App\Models\Chaliht;
use App\Models\Contact;
use App\Models\General;
use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Http\Request;
use mysqli;
use PDO;
use PDOException;
use Goutte\Client;
use Nette\Utils\Floats;
use Auth;

class HomeController extends Controller
{
    public function dashbaord()
    {
        return view('dashboard.index');
    }
    public function login_admin()
    {
        return view('dashboard.auth.login');
    }
    public function profile()
    {
        $user = auth()->user();
        return view('dashboard.auth.profile')->with('user', $user);
    }
    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        if ($request->password != null) {
            $request->validate([
                'password' => 'required',
                'confirm-password' => 'required|same:password'
            ]);
        }
        $admin = User::first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->password != null) {
            $admin->password = bcrypt($request->password);
        }
        $admin->save();
        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }
    public function post_login_admin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->with(['error' => 'البريد الاكتروني او كلمة المرور غير صحيحة']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function get_setting()
    {
        return view('dashboard.setting');
    }
    public function social()
    {
        return view('dashboard.social');
    }
    public function get_setting_post(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('general_file')) {
            foreach ($request->file('general_file') as $name => $value) {
                if ($value == null) {
                    continue;
                }
                General::setValue($name, $value->store('general'));
            }
        }

        foreach ($request->input('general') as $name => $value) {
            if ($value == null) {
                General::setValue($name, $value);
            }
            General::setValue($name, $value);
        }

        return redirect()->back()->with(['success' => 'تم التعديل بنجاح']);
    }


    public function welcom(Request $request)
    {
        $query = Chaliht::query()->orderBy('id', 'desc');


        if ($request->ajax()) {

            $page = (int)$request->page;
            $offset = (int)$request->offset;


            $query->when($request->category, function ($q) use ($request) {

                $q->where('category', 'like', '%' . $request->category . '%');
            });
            $query->when($request->state, function ($q) use ($request) {

                $q->where('state', 'like', '%' . $request->state . '%');
            });
            $query->when($request->have_pool, function ($q) use ($request) {

                $q->where('have_pool', $request->have_pool);
            });

            $query->when($request->stars, function ($q) use ($request) {

                $q->where('stars', $request->stars);
            });

            $query->when($request->dgree, function ($q) use ($request) {

                $q->where('dgree', 'like', '%' . $request->dgree . '%');
            });

            $query->when($request->have_discount, function ($q) use ($request) {

                if($request->have_discount =='yes'){
                    $q->where('discount','>',0);
                }else{
                    $q->where('discount',0);

                }
                
            });
            




            $posts = $query->paginate(12);

            $view = view('chalits')->with('chalits', $posts)->render();

            return response()->json(['html' => $view]);
        } else {

            $posts = Chaliht::query()->orderBy('id', 'desc')->paginate(12);
            // dd($posts);
        }

        return view('index')->with('chalits', $posts);
    }
    public function contact(){
        return view('contanct');
    }
    public function about(){
        return view('about');
    }
    
    public function contact_post(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'body'=>'required'
        ]);
        $contact =  new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->title = $request->title;
        $contact->body = $request->body;
        $contact->save();
        return redirect()->back()->with(['success'=>'تم الارسال بنجاح']);

    }
    public function show_model(Request $request)
    {
        $post = Chaliht::find($request->id);
        $post->view_num =+ 1;
        $post->save();
        return view('data_modal')->with('item', $post);
    }
}
