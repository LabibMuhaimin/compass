<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();


Route::group(['middleware' => 'auth'], function () {
Route::get('/profile/{slug}',['as' => 'profile','uses'=> 'profilesController@index'])->name('profile.profile');
Route::get('/edit/{slug}',['as' => 'profile.edit','uses'=> 'profilesController@edit'])->name('profile.edit');
Route::post('/update/{slug}',['as' => 'profile.update','uses'=> 'profilesController@update'])->name('profile.update');
Route::get('/about', 'aboutController@about')->name('about');

    Route::get('/findFriends/{slug}', 'FriendshipsController@findFriends');
    Route::get('/addFriend/{slug}', 'FriendshipsController@sendRequest');
    Route::get('/requests/{slug}', 'FriendshipsController@requests');
    Route::get('/accept/{name}/{slug}', 'FriendshipsController@accept');
    Route::get('/friends/{slug}', 'FriendshipsController@friends');
    Route::get('requestRemove/{id}', 'FriendshipsController@requestRemove');
    Route::get('/notifications/{id}', 'FriendshipsController@notifications');

    Route::get('/countries', 'aboutController@countries')->name('countries');
    Route::get('/home', 'HomeController@index')->name('home');
    //Route::get('/home', 'PostsController@getPost')->name('home');
    
    Route::get('/delete-post/{post_id}', [
        'uses' => 'PostsController@deletePost',
        'as' => 'post.delete',
    ]);
    Route::get('/unfriend/{slug}', function($id){
             $loggedUser = Auth::user()->id;
              DB::table('friendships')
              ->where('requester', $loggedUser)
              ->where('user_requested', $id)
              ->delete();
              DB::table('friendships')
              ->where('user_requested', $loggedUser)
              ->where('requester', $id)
              ->delete();
               return back()->with('msg', 'You are no longer friend with this person');

});

Route::post('/posts', ['uses'=>'PostsController@postStatus','as'=>'status.posts']);
Route::post('/posts/{post_id}/reply', ['uses'=>'PostsController@postReply','as'=>'status.reply']);
Route::get('/posts/{post_id}/like', ['uses'=>'PostsController@getLike','as'=>'status.like']);
Route::get('/search', ['uses'=>'aboutController@getResults','as'=>'search.results']);










//usa routes
Route::get('/home/countries/usa', function () {return view('countries.usa');});
Route::get('/home/countries/usa/g_canyon', function () {return view('countries.usa.g_canyon');});
Route::get('/home/countries/usa/manhattan', function () {return view('countries.usa.manhattan');});
Route::get('/home/countries/usa/yellowstone', function () {return view('countries.usa.yellowstone');});
Route::get('/home/countries/usa/gg_bridge', function () {return view('countries.usa.gg_bridge');});
Route::get('/home/countries/usa/niagra', function () {return view('countries.usa.niagra');});
Route::get('/home/countries/usa/florida_keys', function () {return view('countries.usa.florida_keys');});
Route::get('/home/countries/usa/las_vegas', function () {return view('countries.usa.las_vegas');});
Route::get('/home/countries/usa/denali', function () {return view('countries.usa.denali');});
Route::get('/home/countries/usa/disney', function () {return view('countries.usa.disney');});

//france routes
Route::get('/home/countries/france', function () {return view('countries.france');});
Route::get('/home/countries/france/eiffeltower', function () {return view('countries.france.eiffeltower');});
Route::get('/home/countries/france/l_mus', function () {return view('countries.france.l_mus');});
Route::get('/home/countries/france/mountsm', function () {return view('countries.france.mountsm');});
Route::get('/home/countries/france/provence', function () {return view('countries.france.provence');});
Route::get('/home/countries/france/al_vill', function () {return view('countries.france.al_vill');});

//england routes
Route::get('/home/countries/england', function () {return view('countries.england');});
Route::get('/home/countries/england/stonehenge', function () {return view('countries.england.stonehenge');});
Route::get('/home/countries/england/br_mus', function () {return view('countries.england.br_mus');});
Route::get('/home/countries/england/ches_zoo', function () {return view('countries.england.ches_zoo');});
Route::get('/home/countries/england/eden_project', function () {return view('countries.england.eden_project');});
Route::get('/home/countries/england/national_gall', function () {return view('countries.england.national_gall');});

//italy routes
Route::get('/home/countries/italy', function () {return view('countries.italy');});
Route::get('/home/countries/italy/colosseum', function () {return view('countries.italy.colosseum');});
Route::get('/home/countries/italy/florence', function () {return view('countries.italy.florence');});
Route::get('/home/countries/italy/gcanal', function () {return view('countries.italy.gcanal');});
Route::get('/home/countries/italy/tpisa', function () {return view('countries.italy.tpisa');});
Route::get('/home/countries/italy/vatican', function () {return view('countries.italy.vatican');});

//brazil routes
Route::get('/home/countries/brazil', function () {return view('countries.brazil');});
Route::get('/home/countries/brazil/rio', function () {return view('countries.brazil.rio');});

//maldives routes
Route::get('/home/countries/maldives', function () {return view('countries.maldives');});
Route::get('/home/countries/maldives/addu', function () {return view('countries.maldives.addu');});

//egypt routes
Route::get('/home/countries/egypt', function () {return view('countries.egypt');});
Route::get('/home/countries/egypt/cairo', function () {return view('countries.egypt.cairo');});

//uae routes
Route::get('/home/countries/uae', function () {return view('countries.uae');});
Route::get('/home/countries/uae/dubai', function () {return view('countries.uae.dubai');});

//singapore routes
Route::get('/home/countries/singapore', function () {return view('countries.singapore');});
Route::get('/home/countries/singapore/gardenbay', function () {return view('countries.singapore.gardenbay');});

//spain routes
Route::get('/home/countries/spain', function () {return view('countries.spain');});
Route::get('/home/countries/spain/barcelona', function () {return view('countries.spain.barcelona');});

//india routes
Route::get('/home/countries/india', function () {return view('countries.india');});
Route::get('/home/countries/india/kashmir', function () {return view('countries.india.kashmir');});

//nepal routes
Route::get('/home/countries/nepal', function () {return view('countries.nepal');});
Route::get('/home/countries/nepal/himalaya', function () {return view('countries.nepal.himalaya');});

//australia routes
Route::get('/home/countries/australia', function () {return view('countries.australia');});
Route::get('/home/countries/australia/sydney', function () {return view('countries.australia.sydney');});
Route::get('/home/countries/australia/gb_reef', function () {return view('countries.australia.gb_reef');});
Route::get('/home/countries/australia/ayers_rock', function () {return view('countries.australia.ayers_rock');});
Route::get('/home/countries/australia/knp', function () {return view('countries.australia.knp');});
Route::get('/home/countries/australia/whitsunday', function () {return view('countries.australia.whitsunday');});

//bangladesh routes
Route::get('/home/countries/bangladesh', function () {return view('countries.bangladesh');});
Route::get('/home/countries/bangladesh/coxsbazar', function () {return view('countries.bangladesh.coxsbazar');});
Route::get('/home/countries/bangladesh/sunderban', function () {return view('countries.bangladesh.sunderban');});
Route::get('/home/countries/bangladesh/madhabkunda', function () {return view('countries.bangladesh.madhabkunda');});
Route::get('/home/countries/bangladesh/jaflong', function () {return view('countries.bangladesh.jaflong');});
Route::get('/home/countries/bangladesh/bisnakandi', function () {return view('countries.bangladesh.bisnakandi');});
Route::get('/home/countries/bangladesh/hakaluki', function () {return view('countries.bangladesh.hakaluki');});
Route::get('/home/countries/bangladesh/shajek', function () {return view('countries.bangladesh.shajek');});
    
//switzerland routes
Route::get('/home/countries/switzerland', function () {return view('countries.switzerland');});
Route::get('/home/countries/switzerland/sw', function () {return view('countries.switzerland.sw');});


});
//Route::get('/countries/usa', 'aboutController@usa')->name('usa');
//Route::get('countries/usa', 'aboutController@contacts')->name('contacts');



