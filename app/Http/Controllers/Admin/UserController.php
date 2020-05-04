<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('ci')->paginate(5);
        //dd($users);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $data = [
            'name'          => $request->get('name'),
            'last_name'     => $request->get('last_name'),
            'ci'            => $request->get('ci'),
            'piso'          => $request->get('piso'),
            'email'         => $request->get('email'),
            'password'      => $request->get('password'),
            'type'          => $request->get('type'),
            'active'        => $request->has('active') ? 1 : 0
        ];
        $user = User::create($data);
        $message = $user ? 'Usuario agregado correctamente!' : 'El Usuario NO pudo agregarse! :(';

        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'      => 'required|max:100',
            'last_name' => 'required|max:100',
            'ci'        => 'required|max:20',
            'piso'      => 'required',
            'email'     => 'required|email',
            'password'  => ($request->get('password') != "") ? 'required|confirmed' : "",
            'type'      => 'required|in:user,admin,vocero,voceroP',
        ]);

        $user->name          = $request->get('name');
        $user->last_name     = $request->get('last_name');
        $user->ci            = $request->get('ci');
        $user->piso          = $request->get('piso');
        $user->email         = $request->get('email');
        $user->type          = $request->get('type');
        $user->active        = $request->has('active') ? 1 : 0;
        if($request->get('password') != "") $user->password = $request->get('password');

        $updated = $user->save();
        $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse! :(';

        return redirect()->route('user.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();
        $message = $delete ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        return redirect()->route('user.index')->with('message', $message);
    }
}
