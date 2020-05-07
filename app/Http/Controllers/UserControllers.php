<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminLogin;
use App\LoginsAdmin;
use App\RgUsers;
use App\T_acomma;
use App\T_Room;
use App\UReg;
use App\UserReg;
use App\UserRegi;
use App\users;
use App\BookingRev;
use App\usersReg;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\DB;
class UserControllers extends Controller
{
    public function RegisterUsers(Request $request){
       $this->validate($request,[
        'sdate'=>'required|Unique:t_acommas',
        'edate'=>'required|Unique:t_acommas'
        ]);
        $table=new  T_acomma();
        $table->roomid   = $request->input('cata');
        $table->sdate    = $request->input('sdate');
        $table->edate    = $request->input('edate');
        $table->numnight = $request->input('num_night');
        $table->adults   = $request->input('adults');
        $table->children = $request->input('childr');
        $table->save();
        //return redirect()->action('booking');
        return redirect()->action('Acomada@book');
       
    }
    public function Booking(){
      $data=T_Room::all()->toArray();
      return view('booking',compact('room'));
      return redirect()->action('custmer');
    }
    public function RegUsers(Request $request){
    $this->validate($request,[
        'username'=>'required|max:20',
        'cuntry'=>'required|max:20',
        'email'=>'required|unique:users',
        //'password'=>'required|min:6'
    ]);
       $table=new UserReg();
       $table->roomid = $request->input('id');
       $table->name = $request->input('username');
       $table->cuntry  = $request->input('cuntry');
       $table->city  = $request->input('city');
       $table->address = $request->input('address');
       $table->phonenumber = $request->input('ponenumber');
       $table->email = $request->input('email');
       $table->birthday = $request->input('birth');
       $table->status="Pending";
       //$table->password =bcrypt($request->input('password'));
       $table->save();
       

       $id=($request->input('id'));
       $ids=($request->input('id'));
       $datas = DB::table('t__rooms')
       ->join('t_acommas','t_acommas.roomid','t__rooms.id')
       ->join('user_regs','user_regs.roomid','t_acommas.roomid')

       ->where('user_regs.roomid', '=',6)
       ->select ('t_acommas.id','t_acommas.sdate','t_acommas.edate','t__rooms.rooms_type','t__rooms.price',
       't_acommas.numnight','t__rooms.Status','user_regs.name','user_regs.cuntry','user_regs.city','user_regs.email','user_regs.phonenumber','t__rooms.rooms_type','t__rooms.price',
       't_acommas.adults','t_acommas.children')
       ->get();
       return view('bookingconform', compact('datas','id',$id));
       return redirect()->back()->with('message','Register Sucssed!');
      //return redirect()->action('Acomada@Form');
    }
   
  
     public function getHome(){
       return view('homes');
     }

     public function Custmer(Request $request){
      $id=($request->input('id'));
     // print_r($request->input('ids'));
      return view('custmer')->with('id',$id);
    }

    public function index()
    {
     $data = DB::table('t__rooms')
     ->join('t_acommas','t_acommas.roomid','t__rooms.id')
     ->select ('t_acommas.roomid','t_acommas.sdate','t_acommas.edate','t__rooms.rooms_type','t__rooms.price',
     't_acommas.numnight','t__rooms.Status')
       
       ->get();
     return view('booking', compact('data'));
    }

    public function create()
    {
        $accomodation = T_Room::all(['id','rooms_type']);
        return view('accomodation',compact('room'));
    }
    public function cree(Request $request){
   
      
    }
    public function RegisterAdmin(Request $request){
      
       $table=new Users();
       $table->name    = $request->input('name');
       $table->email    = $request->input('email');
       $table->password =bcrypt($request->input('password'));
       $table->roal     = "admin";
       $table->save();
       return redirect()->back()->with('message','Register Sucssed!');
       //return redirect()->action('booking');
      
      
   }
   public function LogingAdmin (Request $request){
    $data=$request->only('email','password');
  if(Auth::attempt($data))
  {
    return redirect()->action('Acomada@adminp');
  }
  return redirect()->back();
}
public function Logout(){
  Auth::logout();
  Session::flush();
  return redirect('login_admin')->with('message','LOGOUT');
}
public function Rooms(Request $request){
      
  $table=new T_Room();
  $table->rooms_type    = $request->input('room');
  $table->accomadation  = $request->input('aco');
  $table->descriptiom   = $request->input('des');
  $table->num_person    = $request->input('nper');
  $table->price         = $request->input('price');
  $table->status        = "Available";
  $table->save();
  return redirect()->back()->with('message','Room Add Sucssed!');
  //return redirect()->action('booking');
 
 
}
public function AdminAco(){
  $aco=DB::select('select * from t__rooms');
   return view ('admin/accomadation',['aco'=>$aco]);
}
 public function edit($id){
  
    $troom =  T_Room::find($id);
    return view('admin.Edit',compact('troom'));
    
 }

  public function show($id){
  
    $troom =  T_Room::find($id);
    return view('admin.show',compact('troom'));
    
 }
  public function Delete($id){
  
    $troom =  T_Room::find($id);
    return view('admin.Delete',compact('troom'));
    
 }
 public function Update(Request $request){
  $id=$request->input('id');
  $table =  T_Room::find($id);
  $table->rooms_type    = $request->input('room');
  $table->accomadation  = $request->input('aco');
  $table->descriptiom   = $request->input('des');
  $table->num_person    = $request->input('nper');
  $table->price         = $request->input('price');
  $table->save();
 // return view('admin.Edit',compact('troom'));
  return redirect()->back()->with('message','Your Update Sucssed!');
 }
public function Del(Request $request){
$id=$request->input('id');
$flight = T_Room::find($id);
$flight->delete();
return redirect()->action('UserControllers@AdminAco')->with('message', 'One recoard deleted');
}
public function B_Res(Request $request){
            $table=new BookingRev();
            $table->checkin = $request->input('checkin');
            $table->checkout= $request->input('checkout');
            $table->room    = $request->input('room');
            $table->userid  = $request->input('id');
            $table->name    = $request->input('name');
            $table->price   = $request->input('price');
            $table->adults  = $request->input('adults');
            $table->children= $request->input('children');
            $table->cuntry  = $request->input('cuntry');
            $table->city    = $request->input('city');
            $table->email   = $request->input('email');
            $table->phone   = $request->input('phone');
            $table->status  = "NEW ACCOMADATION";
            $table->save();
}
public function AdminBoook(){
   $aco=DB::select('select * from booking_revs where Status="OK"');
   return view ('admin/reservation',['aco'=>$aco]);
}
public function bookinedit($id){
  
    $troom =  BookingRev::find($id);
    return view('admin.conforme',compact('troom'));
    
 }
public function cancel($id){
  
    $troom =  BookingRev::find($id);
    return view('admin.cancel',compact('troom'));
    
 }
 public function bookinupdate(Request $request ,$id){
            $table =  BookingRev::find($id);
            $table->checkin = $request->input('checkin');
            $table->checkout= $request->input('checkout');
            $table->room    = $request->input('room');
            $table->userid  = $request->input('uid');
            $table->name    = $request->input('name');
            $table->price   = $request->input('price');
            $table->adults  = $request->input('adults');
            $table->children= $request->input('children');
            $table->cuntry  = $request->input('cuntry');
            $table->city    = $request->input('city');
            $table->email   = $request->input('email');
            $table->phone   = $request->input('phone');
            $table->status  = "CONFORM";
            $table->save();
            return view('admin.error');
    
 }
 public function error(){
        return view('admin/error');
    }
     public function bookincacel(Request $request ,$id){
            $table =  BookingRev::find($id);
            $table->checkin = $request->input('checkin');
            $table->checkout= $request->input('checkout');
            $table->room    = $request->input('room');
            $table->userid  = $request->input('uid');
            $table->name    = $request->input('name');
            $table->price   = $request->input('price');
            $table->adults  = $request->input('adults');
            $table->children= $request->input('children');
            $table->cuntry  = $request->input('cuntry');
            $table->city    = $request->input('city');
            $table->email   = $request->input('email');
            $table->phone   = $request->input('phone');
            $table->status  = "CANCEL";
            $table->save();
            return view('admin.error');
    
 }
}
