<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaryEntry;

class DiaryEntryController extends Controller
{
    public function index()
    {
        return view('diary.index');
    }

    public function create()
    {
        return view('diary.create');
    }

    public function store(Request $request)
    {
        DiaryEntry::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'mood' => $request->mood,
            'entry_date' => $request->entry_date,
        ]);

        return redirect('/dashboard');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}