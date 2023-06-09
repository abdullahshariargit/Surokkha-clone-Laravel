<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\FirstDoseMail;
use App\Mail\SecondDoseMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('Backend.user.index', compact('users'));
    }

    public function show(User $user)
    {
        $user = $user->load('first_dose', 'second_dose', 'vaccine', 'hospital');
        return view('Backend.user.show', compact('user'));
    }

    public function sendMailForFirstDose(User $user)
    {
        $user->dose_one = 1;
        $user->save();

        Mail::to($user->email)->send(new FirstDoseMail($user));
        session()->flash('success', 'Mail Sent Successfully!');
        return back();
    }

    public function firstDoseUsers()
    {
        $users = User::where('dose_one', '=', 1)->whereStatus('pending')->latest()->get();
        return view('Backend.user.first-dose', compact('users'));
    }

    public function sendMailForSecondDose(User $user)
    {
        $user->dose_two = 1;
        $user->save();

        Mail::to($user->email)->send(new SecondDoseMail($user));
        session()->flash('success', 'Mail Sent Successfully!');
        return back();
    }

    public function secondDoseUsers()
    {
        $users = User::where('dose_two', '=', 1)->whereStatus('first_dose')->latest()->get();
        return view('Backend.user.second-dose', compact('users'));
    }
}
