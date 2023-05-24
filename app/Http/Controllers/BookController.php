<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function home(){
        $book_list = Book::all();
        $catnav = Category::all();

        return view('home', ['book'=>$book_list, 'catnav'=>$catnav]);
        
    }

    public function detail($id){
        $book = DB::table('books')
                ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                ->select('books.*', 'publishers.publisher_name as publisher_name')
                ->where('books.id', $id)
                ->get();
        
        $catnav = Category::all();

        return view('detail', ['book'=>$book, 'catnav'=>$catnav]);
    }

    public function category($id){


        $book = DB::table('details')
                ->join('categories', 'details.category_id', '=', 'categories.id')
                ->join('books', 'details.book_id', '=', 'books.id')
                ->select('books.*', 'categories.*', 'books.id as id_book')
                ->where('categories.id', $id)
                ->get();

        $cat = Category::find($id);
        $catnav = Category::all();

        return view('category', ['book'=>$book, 'cat' => $cat, 'catnav'=>$catnav]);
    }


    public function publisher(){
        $pub = Publisher::all();

        $catnav = Category::all();

        return view('publisher', ['pub'=>$pub, 'catnav'=>$catnav]);
    }

    public function publisherdetail($id){
        $book_list = DB::table('books')
                ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                ->where('publishers.id', $id)
                ->select('books.*', 'publishers.*', 'books.id as id_book')
                ->get();
        
        $catnav = Category::all();

        $pub = Publisher::find($id);

        return view('publisherdetail', ['book'=>$book_list, 'catnav'=>$catnav, 'pub'=>$pub]);
    }

    public function contact(){
        $catnav = Category::all();
        return view('contact', ['catnav'=>$catnav]);
    }
}
