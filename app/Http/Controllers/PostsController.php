<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\posts;
use App\comments;
use App\User;
use DB;

class PostsController extends Controller
{
  
    public function postStatus(Request $request)
    {
        $this->validate($request,[
            'posts'=>'required|max:1000',
        ]);
        
        Auth::user()->posts()->create([
            'content'=>$request->input('posts'),
                    ]);
        return redirect()->route('home')->with('info','Status Updated');
    }

    public function getPost(){
        $posts=posts::orderBy('created_at','desc')->get();
        return view('home',['posts'=>$posts]);
    }

    public function deletePost($post_id)
    {
        $posts = posts::where('id', $post_id)->first();
        if (Auth::user() != $post->User) {
            return redirect()->back();
        }
        $posts->delete();
        return redirect()->route('home')->with(['message' => 'Successfully deleted!']);
    }
    public function fr() {
        $uid = Auth::user()->id;

        $friends1 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.user_requested') // who is not loggedin but send request to
                ->where('status', 1)
                ->where('requester', $uid) // who is loggedin
                ->get();

        //dd($friends1);

        $friends2 = DB::table('friendships')
                ->leftJoin('users', 'users.id', 'friendships.requester')
                ->where('status', 1)
                ->where('user_requested', $uid)
                ->get();

        $friends = array_merge($friends1->toArray(), $friends2->toArray());

        return view('home', compact('friends'));
    }

    public function postReply(Request $request, $post_id)
        {
            $this->validate($request,[
                "reply-{$post_id}"=>'required|max:1000',
            ],[
                'required'=>'Comments required'
            ]);
                $posts=posts::notReply()->find($post_id);
                if(!$posts){
                    return redirect()->route('home');
                }
                if(!Auth::user()->isFriendWith($posts->user) && Auth::user()->id !== $posts->user->id){
                    return redirect()->route('home');
                }
                $reply=posts::create([
                    'content'=>$request->input("reply-{$post_id}"),
                ])->user()->associate(Auth::user());
                $posts->replies()->save($reply);
                return redirect()->back();
        }

        public function getLike($post_id){
            $posts=posts::find($post_id);

            if(!$posts)
            {
                return redirect()->route('home');
            }
            if(!Auth::user()->isFriendWith($posts->user))
            {
                return redirect()->route('home');
            }
            if(Auth::user()->hasLikedStatus($posts))
            {
                return redirect()->back();
            }
            $like=$posts->likes()->create([]);
            Auth::user()->likes()->save($like);

            return redirect()->back();
        }
}