<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    if(!Auth::check()) {
      return redirect()->route('/')->with('message404', 'Такого пути не существует или доступ закрыт');
    }

    if(Auth::user()->role >= 3 and strpos($request->path(), 'users') and strpos($request->path(), 'edit')){
      return redirect()->route('users.index')->with('errorFlash', 'Тебе туда нельзя');
    }

    if(Auth::user()->role >= 3 and strpos($request->path(), 'users') and strpos($request->path(), 'create')) {
      return redirect()->route('works.index')->with('errorFlash', 'Тебе туда нельзя');
    }


    return $next($request);
  }
}
