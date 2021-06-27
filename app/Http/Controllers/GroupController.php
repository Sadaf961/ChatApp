<?php

namespace App\Http\Controllers;

use App\Models\Group;

use App\Models\User;

use App\Models\GroupUser;

use App\Models\Conversation;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    function createGroup(){
        $groups = User::all();
        return view('create_group',compact('groups'));
    }

    function index(){
        $groups = Group::all();
        return view('index',compact('groups'));
    }

    function addMembers(){
        $user = User::all();
        return view('add_member',compact('user'));
    }

    public function store(Request $request)
    {
        $group = new Group();
        $group->group_name = $request->group_name;
        $group->save();

        $group_user = new GroupUser();
        $group_user->group_id = $request->group_id;
        $group_user->save();

        $user = new User();
        $user['user_id']=$user->id;

        $user->id =$request->id;
        $user->save();

        return $this->index();
    }

    public function groupMembers(Request $request){
        $groups = Group::all();

        foreach ($groups as $group) {
            $group->user_count = $group->GroupUser()->count();
        }

        $groupsArray = $groups->toArray();

    }

    public function deleteAll(Group $groups){
        $groups->delete();
        return view('index' , compact('groups'));
    }

    public function viewChat(){
        $groups=Conversation::all();
        return view('chat_room', compact('groups'));
    }
}
