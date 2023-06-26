<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRequest;
use App\Models\Admin\AuthRoleSearch;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct()
    {
//        $this->middleware('permission:admin.role.index',['only'=> ['index']]);
//        $this->middleware('permission:admin.role.create',['only'=> ['create','store']]);
//        $this->middleware('permission:admin.role.edit',['only'=> ['edit','update']]);
//        $this->middleware('permission:admin.role.show',['only'=> ['show']]);
//        $this->middleware('permission:admin.role.destroy',['only'=> ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissionData = AuthRoleSearch::getPermissions();
        return view('admin.role.create', compact('permissionData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->name){
                $parentRoleModel = Role::where('name', $request->name);
                $parentRole = $parentRoleModel->get();

                if ($parentRole->isEmpty()){
                    $parentRole = Role::create([
                        'name' => $request->name,
                        'description' => $request->description,
                    ]);
                }else{
                    $parentRoleModel->update([
                        'description' => $request->description,
                    ]);
                }
            }
            $parentRole->givePermissionTo($request->permissions);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            $permissionData = AuthRoleSearch::getPermissions();
            return view('admin.role.create', compact('permissionData'));
        }

        return redirect()->route('admin.role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findById($id);
        return view('admin.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissionData = AuthRoleSearch::getPermissions();
        $getRoleHasPermission = AuthRoleSearch::getRoleHasPermission($role->id);
        return view('admin.role.edit', compact('role','permissionData','getRoleHasPermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->syncPermissions($request->permissions);
        return redirect()->route('admin.role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Role::destroy($id);
            return redirect()->route('admin.role.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
