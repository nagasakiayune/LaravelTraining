<?php

namespace App\Repositories;

use App\Models\Staffs;
use Illuminate\Support\Facades\DB;

class StaffRepository
{
    private $table = 'staffs';

    // 所属ごとに社員情報を取得する
    public function getStaffsByStaffDepartment() {
        $engineers = DB::table($this->table)->where('staff_department', '0001')->get();
        $sales = DB::table($this->table)->where('staff_department', '0002')->get();
        $corporate = DB::table($this->table)->where('staff_department', '0003')->get();

        $staffs = [
            'engineers' => $engineers,
            'sales' => $sales,
            'corporate' => $corporate,
        ];

        return $staffs;
    }

    // 全ての社員情報を取得する
    public function getAllStaffs() {
        $staffs = DB::table($this->table)->get();
        return $staffs;
    }

    // 社員情報を新規登録する
    public function userCreate($request){
        // 現在ログイン機能は存在しないため仮のuserとする
        $user = 'user';
        // 日付
        $today = date("Y-m-d H:i:s");

        // 登録内容を配列に格納する
        $param = [
            'staff_code' => $request->staff_code,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'last_name_romaji' => $request->last_name_romaji,
            'first_name_romaji' => $request->first_name_romaji,
            'staff_department' => $request->staff_department,
            'project_type' => $request->project_type,
            'joined_year' => $request->joined_year,
            'new_glad_flg' => $request->new_glad_flg,
            'created_by' => $user,
            'updated_by' => $user,
            'created_at' => $today,
            'updated_at' => null,
        ];
        DB::table('staffs')->insert($param);
    }

    // 社員情報を更新する
    public function userUpdate($request){
        // 現在ログイン機能は存在しないため仮のuserとする
        $user = 'user';
        // 日付
        $today = date("Y-m-d H:i:s");

        // 更新内容を配列に格納する
        $param = [
            'staff_code' => $request->staff_code,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'last_name_romaji' => $request->last_name_romaji,
            'first_name_romaji' => $request->first_name_romaji,
            'staff_department' => $request->staff_department,
            'project_type' => $request->project_type,
            'joined_year' => $request->joined_year,
            'new_glad_flg' => $request->new_glad_flg,
            // 'created_by' => $user,
            'updated_by' => $user,
            // 'created_at' => $today,
            'updated_at' => $today,
        ];
        DB::table('staffs')->where('id', $request->id)->update($param);
    }

    // 社員情報を削除する
    public function userDelete($request){
        DB::table('staffs')->where('id', $request->id)->delete();
    }
}
