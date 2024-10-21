<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\StaffRepository;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    //初期画面表示
    public function index() {
        $repository = new StaffRepository;
        $staffs = $repository->getStaffsByStaffDepartment();
        return view('User.Home')->with($staffs);
    }

    //社員情報画面表示
    public function information() {
        $repository = new StaffRepository;
        $staffs = $repository->getAllStaffs();
        return view('User.Information')->with('staffs',$staffs);
    }

    //新規登録画面表示
    public function create() {
        return view('User.Create');
    }

    //新規登録処理
    public function createResult(CreateUserRequest $request) {
        $repository = new StaffRepository;
        $staffs = $repository->userCreate($request);
        return view('User.CreateResult');
    }

    // 更新画面表示
    public function update(Request $request) {
        $item = DB::table('staffs')->where('id', $request->id)->first();
        return view('User.Update', ['form' => $item]);
    }

    // 更新処理
    public function updateResult(UpdateUserRequest $request) {
        $repository = new StaffRepository;
        $staffs = $repository->userUpdate($request);
        return view('/User.UpdateResult');
    }

    // 削除画面表示
    public function delete(Request $request) {
        $item = DB::table('staffs')->where('id', $request->id)->first();
        return view('User.Delete', ['form' => $item]);
    }

    // 削除処理
    public function deleteResult(Request $request) {
        $repository = new StaffRepository;
        $staffs = $repository->userDelete($request);
        return view('User.DeleteResult');
    }
}
