<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\createBookFormReq;
use App\Http\Requests\Requests\createBook;
use App\Model\book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bookController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function showList()
    {
        $books = Book::all();
        return view('admin.book.list', compact('books'));
    }

    public function create()
    {
        return view('admin.book.createBook');
    }


    public function store(createBookFormReq $createbookForm)
    {

        $book_data = [
            'name' => request()->input("name"),
            'author' => request()->input("author"),
            'pub_year' => request()->input("pub_year"),
            'pub_name' => request()->input("pub_name"),
            'translator_name' => request()->input("translator_name"),
            'category' => request()->input('category'),
            'num' => request()->input("num")
        ];
        $new_book_obj = Book::create($book_data);
        if ($new_book_obj instanceof Book) {
            return redirect()->route('admin.bookList')->with('success', 'کتاب جدید با موفقیت ثبت شد.');
        }
}

    public function delete($book_id)
    {

        if ($book_id && ctype_digit($book_id)) {

            $bookItem =Book::find($book_id);

            if ($bookItem && $bookItem instanceof Book){

                $bookItem->delete();
                return redirect()->route('admin.bookList')->with('success', 'کتاب مورد نظر با موفقیت حذف شد.');
            }
        }
    }

    public function edit($book_id)
    {
        if ($book_id && ctype_digit($book_id)) {
            $bookItem = Book::find($book_id);
            if ($bookItem && $bookItem instanceof Book) {
                return view('admin.book.edit', compact('bookItem'));
            }
        }
    }

    public function update(createBookFormReq $createbookForm, $book_id)
    {
        $book_data = [
            'name' => request()->input("name"),
            'author' => request()->input("author"),
            'pub_year' => request()->input("pub_year"),
            'pub_name' => request()->input("pub_name"),
            'translator_name' => request()->input("translator_name"),
            'category' => request()->input('category'),
            'num' => request()->input("num")
        ];

//        if (!Request()->has('password')) {
//            unset($book_data['password']);
//        }

        $bookItem = Book::find($book_id);
        $bookItem->update($book_data);
        return redirect()->route('admin.bookList')->with('success', 'کتاب مورد نظر با موفقیت به روز رسانی شد.');

    }

    public function showBookList($user_id)
    {
        if($user_id && ctype_digit($user_id)){
            $books=Book::all();
            $user=User::find($user_id);
            $booser=$user->Books()->get()->pluck('book_id')->toArray();
            dd($booser);

//            return view('admin.user.userLoan',compact('books','booser'));
        }
    }

    public function updateUserLoan(request $request,$user_id)
    {
        if($user_id && ctype_digit($user_id)){
            $userItem=User::find($user_id);
            $bookss=$request->input('bookss');
            if($userItem && is_array($bookss) && count($bookss)>0){
                $userItem->Books()->sync($bookss);
                return redirect()->route('admin.userlist');
            }
        }
    }
}
    