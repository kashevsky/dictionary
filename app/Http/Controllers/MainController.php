<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use App\Services\FormatWords;
use App\Services\MatchingWords;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        if(is_null(session('words')))
        {
            session()->push('words',0);
        }
        if(is_null(session('main_words')))
        {
            $mainWords = Word::get();
            session()->push('main_words',0);
            foreach($mainWords as $word)
            {
                session()->push('main_words',$word->id);
            }
        }
        $flag = true;
        while($flag)
        {
            if(count(session('main_words')) == count(session('words')))
            {
                $word = null;
                return view('main.index', compact('word'));
            }
            $randId = rand(1,count(session('main_words')) - 1);
            if(!in_array($randId, session('words')) && !is_null(session('trigger')))
            {
                $session_main_words = session('main_words');
                $wordId = null;
                foreach($session_main_words as $wordy)
                {
                    if($wordy == $randId)
                    {
                        $wordId = $wordy;
                    }
                }
                $word = Word::find($wordId);
                session()->push('words',$word->id);
                session()->push('not_loop',$word->id);
                $flag = false;
                session()->forget('trigger');
            }
            elseif(!in_array($randId, session('words')) && is_null(session('trigger')))
            {
                if(is_null(session('not_loop')))
                {
                    session()->push('not_loop', $randId);
                }
                $word = Word::find(session('not_loop')[count(session('not_loop')) - 1]);
                if(!in_array($word->id, session('words')))
                {
                    session()->push('words', session('not_loop')[count(session('not_loop')) - 1]);
                }
                $flag = false;
                return view('main.index', compact('word'));
            }
        }
        return view('main.index', compact('word'));
    }

    public function check()
    {
        $checkedWord = FormatWords::format(request('eng_title'));
        $mainWord = FormatWords::format(request('mainWord'));
        if($checkedWord == $mainWord)
        {
            session()->flash('message-success','Правильно!');
            session()->push('true_words',$mainWord);
            session()->push('trigger',1);
            return redirect()->route('index');
        }
        else
        {   
            session()->flash('message-fault','Ошибка');
            session()->push('trigger',1);
            if(is_null(session('false_words')) || !in_array($mainWord, session('false_words')))
            {
                session()->push('false_words',$mainWord);
            }
            // $words = session('words');
            // array_pop($words);
            // session()->forget('words');
            // foreach($words as $word)
            // {
            //     Session::push('words', $word);
            // }
            return redirect()->route('index');
        }
    }
    public function restart()
    {
        session()->forget('words');
        session()->forget('true_words');
        session()->forget('false_words');
        session()->forget('main_words');
        session()->forget('trigger');
        session()->forget('not_loop');
        return redirect()->route('index');
    }
    public function setDifficult()
    {
        
    }
}
