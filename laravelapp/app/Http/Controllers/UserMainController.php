<?php

namespace App\Http\Controllers;

use App\Models\Tranning;
use App\Models\User;
use App\Models\UserMain;
use http\Env\Response;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mailgun\Mailgun;
use Illuminate\Support\Facades\Hash;

class UserMainController extends Controller
{
    public function authByPassword(Request $request)
    {
        $user = User::where('login', $request->login)->where('password', md5($request->password))->first();
        if ($user) {
            $token = $this->createToken($user->id);
            return response()->json([
                'status' => 'success',
                'token' => $token
            ])->setStatusCode(201, 'success');
        } else {
            return response()->json([
                'status' => 'error',
            ])->setStatusCode(201, 'error');
        }
    }

    public function signUp(Request $request)
    {
        if (User::where('login', $request->login)->orWhere('email', $request->email)->first()) {
            return response()->json([
                'status' => 'error',
                'error' => 'login_or_email_created_before'
            ]);
        }


        $user = User::create([
            'login' => $request->login,
            'password' => md5($request->password),
            'email' => $request->email,
            'fio' => $request->fio,
        ]);

        $token = $this->createToken($user->id);

        return response()->json([
            'status' => 'success',
            'token' => $token
        ]);
    }

    public function logout()
    {
        User::where('id', Auth::user()->id)->update(['api_token' => null]);
        return response()->json([
            'status' => 'success',
        ])->setStatusCode(201, 'success');
    }

    public function createToken($userId)
    {
        $token = Str::random(30);
        User::where('id', $userId)->update(['api_token' => $token]);
        return $token;
    }

    public function getUserInfoProfile(Request $request)
    {
        $activeUser = true;
        if (strtotime(Auth::user()->accessTimeTo) < time()) {
            $activeUser = false;
        }
        return response()->json([
            'status' => 'success',
            'usedData' => Auth::user(),
            'time' => date('d.m.Y', time()),
            'userStatus' => $activeUser
        ]);
    }

    public function getEvents()
    {
        $data = DB::table('events')->where('id', '>', 0)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getNews()
    {
        $data = DB::table('events')->where('id', '>', 0)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getUserEvents()
    {
        $dataReturn = [];

        $data = DB::table('userEvents')->where('userId', Auth::user()->id)->get();
        foreach ($data as $event) {
            $getEventData = DB::table('events')->where('id', $event->eventId)->first();
            array_push($dataReturn, $getEventData);
        }

        return response()->json([
            'status' => 'success',
            'data' => $dataReturn
        ]);
    }

    public function buyEvent(Request $request)
    {
        $data = DB::table('userEvents')->where('userId', Auth::user()->id)->where('eventId', $request->eventId)->first();

        if ($data) {
            return response()->json([
                'status' => 'error',
                'error' => 'buy_before'
            ]);
        }

        $getDataTranning = DB::table('events')->where('id', $request->eventId)->first();
        $getUserData = DB::table('users')->where('id', Auth::user()->id)->first();

        if ($getUserData->money >= $getDataTranning->price) {
            $newUserMoney = $getUserData->money - $getDataTranning->price;

            User::where('id', Auth::user()->id)->update(['money' => $newUserMoney]);
            DB::table('userEvents')->insert(['userId' => Auth::user()->id, 'eventId' => $getDataTranning->id]);

            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'error' => 'low_money'
        ]);

    }

    public function updateUserInfo(Request $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update(['fio' => $request->fio, 'email' => $request->email, 'phone' => $request->phone]);

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function getAdminOrders(Request $request){
        $dataReturn = [];

        $data = DB::table('userEvents')->where('id', '>', 0)->get();

        foreach ($data as $order){
            $userData = User::where('id', Auth::user()->id)->first();
            array_push($dataReturn, [
                'id' => $order->id,
                'fio' => $userData->fio,
                'phone' => $userData->phone,
                'email' => $userData->email,
                'date' => date('d.m.y', time())
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $dataReturn
        ]);
    }

    public function getAdminUsers(){
        $data = User::where('id', '>', 0)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function createNewEvent(Request $request){
        DB::table('events')->insert(['date' => $request->date, 'name' => $request->name, 'about' => $request->about, 'price' => $request->price, 'max' => $request->max]);

        return response()->json([
            'status' => 'success',
        ]);
    }

}
