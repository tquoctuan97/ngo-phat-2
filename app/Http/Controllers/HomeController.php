<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Post;
use App\BodyHome;
use App\Services;
use App\Contact;
use App\About;
use App\Order;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //Trang chủ
    public function getIndex(){
        $slide = Slide::where('status','LIKE','PUBLISHED')->orderBy('id_slide', 'desc')->take(4)->get();;
        $new_post = Post::where('status','LIKE','PUBLISHED')->orderBy('id', 'desc')->take(10)->get();
        $body = BodyHome::where('name','LIKE','body')->first();;
        $services = Services::all();
        return view('page.body',compact('slide','new_post','body','services'));
    }
    
    //Vào trang dịch vụ
    public function getService(Request $req){
        $services = Services::all();
        $service = Services::where('id_service',$req->id)->first();
        return view('page.service',compact('service','services'));
        }
    public function Services(){
            $services = Services::all();
            return view('page.archiveService',compact('services'));
            }

    //Vào trang Bài Viết
    public function getPost(Request $req){
        $new_post = Post::where('status','LIKE','PUBLISHED')->orderBy('id', 'desc')->take(2)->get();
        $view_post = Post::where('status','LIKE','PUBLISHED')->orderBy('id', 'desc')->take(5)->get();
        $post = Post::where('id',$req->id)->first();
        return view('page.post',compact('post','new_post','view_post'));
    }
    public function Post(){
                $new_post = Post::where('status','LIKE','PUBLISHED')->orderBy('id', 'desc')->paginate(6);
                $view_post = Post::where('status','LIKE','PUBLISHED')->orderBy('id', 'desc')->take(6)->get();
                return view('page.archivePost',compact('new_post','view_post'));
                }

    //Trang About Us
    public function about(){
            $about = About::where('title','LIKE','about')->get();
            return view('page.about',compact('about'));
            } 
    //Form liên hệ   
    public function getForm(){
    	return view('page.contact');
    }
    public function handleRequest(Request $request){
        $this->validate($request,
            [
                'email'=>'required|email',
                'name'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập lại email',
                'email.email'=>'Không đúng định dạng'
            ]
            );
        $contact = new Contact();
        $contact->name = $request->username;
        $contact->phone = $request->phone;
        $contact->service = $request->service;
        $contact->email = $request->email;
        $contact->note = $request->note;
        $contact->status = 'draft';
        $contact->save();
        return redirect()->back()->with('thanhcong','Gửi thông tin liên hệ thành công');        
}            
       // nhan het du lieu co trong form
    
//Tra cứu thông tin
    public function getOrder(){
 
        $order = Order::all();
        return view('page.order',compact('order'));
     
        }

    }  

