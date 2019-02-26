<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller{
  use AuthenticatesUsers;

  protected $redirecTo = '/home';

  public function __construct(){
    $this->middleware('guest')->except('logout');
  }

  // GitHubの認証ページへリダイレクト
  public function redirectToProvider(){
    return Socialite::driver('github')->scopes(['read:user', 'public_repo'])->redirect();
  }

  // GitHubからユーザー情報を取得
  public function handleProviderCallback(Request $request){
    $user = Socialite::driver('github')->user();

    $request->session()->put('github_token', $user->token);
    return redirect('github');
  }
}
