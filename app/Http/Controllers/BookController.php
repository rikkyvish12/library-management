<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $book_update = false;
        return view('book.books', compact(['books', 'book_update']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        if ($request->file('files')) {

            $file = $request->file('files');
            $strFile = str_replace(" ", "_", $file->getClientOriginalName());

            $filename = rand(10000,50000).'_'.$strFile;
            $path = $file->move(
            base_path().'/public/files/', $filename
            );
        }


        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->files = $filename;
        $book->save();

        return redirect()->back()->with('status', 'Books created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_update = Book::find($id);
        $books = Book::all();
        return view('book.books', compact(['books', 'book_update']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        if ($request->file('files')) {

            $file = $request->file('files');
            $strFile = str_replace(" ", "_", $file->getClientOriginalName());
            $filename = rand(10000,50000
            ).'_'.$strFile;
            $path = $file->move(
            base_path().'/public/files/', $filename
            );
        }
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->files = $filename;
        $book->update();

        return redirect()->back()->with('status', 'Book updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->back()->with('status', 'Book deleted Successfully');
    }
}
