<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form;
use App\Http\Requests\FormReques;
use App\Models\User;
use App\Rules\IranPhoneCheck;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Form.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Form $request)
    {

        // $request->validate([

        //     "firstName" => 'required|min:2|max:8',
        //     "lastName" => 'required|min:2|max:8',
        //     "email" => 'required|email',
        //     "phoneNumber" => [new IranPhoneCheck, 'required'],
        //     "brithDay" => 'required|date',
        //     "gender" => ['required', Rule::in(['male', 'female'])],

        // ]);
        // $user=User::create(
        //     $request->all())
        // ;
        // dd($user);

        if (User::create(
            $request->all())
        ) {
            return redirect()->route('form.index')->with(['message' => 'success create new user']);
            return redirect()->route('form.index')->with(['message' => 'soory  cant create  new user']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
