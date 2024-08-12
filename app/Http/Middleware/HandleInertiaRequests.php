<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\ListMenu;
use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Http\Resources\UserResource;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        $currentRole = (\Auth::check()) ? \Auth::user()->role : null;
        $laboratory = []; $inventory = [];

        $lists = ListMenu::where('is_mother',1)->where('module','Executive')->orderBy('order','ASC')->get();
        foreach($lists as $list){
            $submenus = [];
            if($list['has_child']){
                $subs = ListMenu::where('is_active',1)->where('group',$list['name'])->get();
                foreach($subs as $menu){
                    $submenus[] = $menu;
                }
            }
            $executive[] = [
                'main' => $list,
                'submenus' => $submenus
            ];
        }

        return [
            ...parent::share($request),
            'user' => (\Auth::check()) ? new UserResource(User::with('profile')->where('id',\Auth::user()->id)->first()) : '',
            'flash' => [
                'data' => session('data'),
                'message' => session('message'),
                'info' => session('info'),
                'status' => session('status'),
                'type' => session('type')
            ],
            'menus' => [
                'executive' => $executive,
            ]
        ];
    }
}
