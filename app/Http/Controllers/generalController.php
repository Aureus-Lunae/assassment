<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class generalController extends Controller
{
  public function quizStep1()
  {
    return view('quiz.step1');
  }

  public function PostQuizStep1( Request $request)
  {	
  	$request->session()->put('question1', request('question1'));

  	return redirect('/quizStep2');
  }

  public function quizStep2()
  {
    return view('quiz.step2');
  }

  public function PostQuizStep2( Request $request)
  {	
  	$request->session()->put('question2', request('question2'));

  	return redirect('/quizStep3');
  }

  public function quizStep3()
  {
    return view('quiz.step3');
  }

  public function PostQuizStep3( Request $request)
  {	
  	$request->session()->put('question3', request('question3'));

  	return redirect('/quizResult');
  }

  public function results(Request $request)
  {

    $value = $request->session()->get('question1', 0);

    if ( $value == 1 ) {
    	$user = Auth::user();
    	$user->drawing = 1;
    	$user->save();
    	$win = true;
    } else {
    	$win = false;
    }
    $request->session()->forget(['question1', 'question2', 'question3']);
    return view('quiz.result', ['win' => $win]);
  }
}