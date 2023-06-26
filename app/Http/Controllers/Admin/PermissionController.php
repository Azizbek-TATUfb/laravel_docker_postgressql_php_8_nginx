<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    public function __construct()
    {
//        $this->middleware('permission:admin.permission.index',['only'=> ['index']]);
//        $this->middleware('permission:admin.permission.create',['only'=> ['create','store']]);
//        $this->middleware('permission:admin.permission.edit',['only'=> ['edit','update']]);
//        $this->middleware('permission:admin.permission.show',['only'=> ['show']]);
//        $this->middleware('permission:admin.permission.destroy',['only'=> ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::paginate(10);
        return view('admin.permission.index', compact('permissions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            if ($request->name){
                $parentPerModel = Permission::where('name', $request->name);
                $parentPer = $parentPerModel->get();

                // SELECT * FROM permissions WHERE name='';

               if ($parentPer->isEmpty()){
                   $parentPer = Permission::create([
                       'name' => $request->name,
                       'description' => $request->description,
                   ]);
               }else{
                   $parentPerModel->update([
                       'description' => $request->description,
                   ]);
               }
            }
            if ($request->has('Permission') && !empty($request->Permission)){
                foreach ($request->Permission as $item){
                    if (!empty($item['name'])){

                        $childName =  $request->name.'.'.$item['name'];
                        $childPermissionModel =  Permission::where('name', $childName);
                        $childPermission = $childPermissionModel->get();
                        if ($childPermission->isEmpty()){
                            Permission::create([
                                'name' => $childName,
                                'description' => $item['description'],
                                'parent_name' => $request->name
                            ]);

                        }else{
                            $childPermissionModel->update([
                                'description' => $item['description']
                            ]);
                        }
                    }
                }
            }
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            echo "<pre>";
                print_r($e->getMessage());
            echo "</pre>";exit();
            Log::error('DB_TRANSACTION==='. $e->getMessage());
        }
        return redirect()->route('admin.permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findById($id);
        return view('admin.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findById($id);
        return view('admin.permission.edit', compact('permission'));
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
        $query = Permission::find($id);
        if ($request->name !== $query->name){
            Permission::where('parent_name', $query->name)->update(['parent_name'=>$request->name]);
        }
        $query->update($request->all());
        return redirect()->route('admin.permission.index');
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
            Permission::destroy($id);
            return redirect()->route('admin.permission.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    public function addPermissionData($isTrue)
    {
        Permission::addPermission();
    }
}
