<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\User;
use App\BooksRequest;
use App\Notifications\NotifyUser;
class BookRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        //here we save the request book info to DB
        $book_request=new BooksRequest();
        $book_request->user_id=Auth()->user()->id;
        $book_request->book_id=$request->input('bookid');
        $book_request->status='pending';
        $book_request->reference_number='123123';
        $book_request->save();

        $user=User::find(Auth()->user()->id);
     
        $user->notify(new NotifyUser(BooksRequest::where(function($query){
            $query->where('user_id','=',Auth()->user()->id)
            ->where('status','=','Accepted')
            ->where('id', DB::raw("(select max(`id`) from books_requests where status='Accepted')"));
        })->firstOrFail()));
        
        return $request->input('bookid');
    }
    public function findAndStore(Request $request,$id)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(!Auth()->guest()){
            $book=Books::find($id);
            return view('Request.form')->with('book',$book);
        }
        else
        {
            return view('auth.login');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
