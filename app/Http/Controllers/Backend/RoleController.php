<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
  public function index()
  {
      $roles = Role::all();
      return view('Backend.Role.index',compact('roles'));
  }

  public function RoleCreate()
  {
      return view('Backend.Role.create');
  }

  public function create(Request $request)
  {
      $request->validate([
        'name' => 'required',
      ]);
      Role::create($request->all());
        return redirect()->route('role_index')
                  ->with('success','Roles created successfully.');
  }

  public function RoleUpdate($id)
  {
        $role = Role::findOrFail($id);
         return view('Backend.Role.update', compact('role'));
  }

  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
          'name' => 'required',
      ]);
      Role::whereId($id)->update($validatedData);
      return redirect()->route('role_index')
                ->with('success','Roles updated successfully.');
  }

  public function delete($id)
  {
      Role::where('id',$id)->delete();
      return redirect()->route('role_index')
                ->with('success','Roles Deleted successfully.');
  }
}
