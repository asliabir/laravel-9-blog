<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function profile()
    {
        alertUserCanNot('view.admin');
        return view('backend.profile.index', ['admin' => auth()->user()]);
    }
    public function editProfile()
    {
        abortIf('edit.admin');
        return view('backend.profile.edit', ['admin' => auth()->user()]);
    }
    public function updateProfile(Request $request)
    {
        abortIf('update.admin');
        $admin = User::findOrFail(auth()->user()->id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'phone' => 'nullable|max:15',
            'country' => 'required',
            'bio' => 'nullable|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $admin->update($request->except('image', '_token'));
        if ($request->hasFile('image')) {
            $image =  uploadImage($request->image, $admin->image);
            $admin->update([
                'image' => $image,
            ]);
        }
        flashSuccess('Profile Updated Successfully!');
        return back();
    }

    public function editProfilePassword()
    {
        abortIf('edit.admin');
        return view('backend.profile.edit-password');
    }
    public function updateProfilePassword(Request $request)
    {
        abortIf('update.admin.pass');
        $request->validate(
            [
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required', 'min:6', 'max:50'],
                'new_confirm_password' => ['required', 'same:new_password'],
            ],
            [
                'required' => 'The :attribute field can not be blank.',
            ]
        );

        User::find(auth()->user()->id)->update(['password' => bcrypt($request->new_password)]);
        flashSuccess('Password Updated Successfully!');
        return back();
    }
}
