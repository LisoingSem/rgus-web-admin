<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\PasswordRequest;
use App\Http\Requests\Admin\UserRequest;
use App\Models\ModulePermission;
use App\Models\Permission;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
      public function __construct()
      {
            $this->middleware('permission:admin-view', ['only' => ['index']]);
            // $this->middleware('permission:admin-create', ['only' => ['onCreate', 'onSave']]);
            // $this->middleware('permission:admin-update', ['only' => ['onUpdate', 'onUpdateStatus', 'onDelete', 'onRestore', 'onChangePassword', 'onSavePassword', 'userPermission', 'userPermissionSave']]);
      }

      public function login()
      {
            if (Auth::check()) {
                  return redirect()->route('admin-dashboard');
            }
            return view("admin::auth.sign-in");
      }
}
