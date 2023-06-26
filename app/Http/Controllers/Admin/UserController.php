<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use App\Services\UserService;
use App\Traits\FileUpload;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends \App\Http\Controllers\Controller
{
    use FileUpload;
    private  $service;
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $users = $this->service->index($request->all());
        return view('admin.user.index', compact('users'));
    }
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, '/uploads/users');
        $this->service->create($params);
        return redirect()->route('admin.user.index');
    }
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    public function update(UpdateRequest $request, User $user)
    {

        $params = $request->validated();
        if ($request->has('new_password')) {
            $params['password'] = Hash::make($request->new_password);
        }

        if ($request->photo == null && $request->photo != $user->getOriginal('photo')) {
            $params = $this->fileUpload($params, $request, '/uploads/users');
        }
        $user->update($params);
//        if ($request->has('photo') == $user->){
//            $params = $this->fileUpload($params, $request, '/uploads/users');
//        }
//        $user->update($params);
        return redirect()->route('admin.user.index');
    }
    public function destroy(User $user)
    {
        $user->update(['status'=>  User::STATUS_DESTROY]);
        return redirect()->route('admin.user.index');
    }
}
