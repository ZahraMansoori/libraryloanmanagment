<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
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


    public function store(createBookForm $createbookForm)
    {

        $book_data = [
            'name' => request()->input("name"),
            'author' => request()->input("author"),
            'pub_year' => request()->input("pub_year"),
            'pub_name' => request()->input("pub_name"),
            'translator_name' => request()->input("translator_name"),
            'category' => request()->input('category'),
            'price' => request()->input("price")
        ];
        $new_book_obj = Book::create($book_data);
        if ($new_book_obj instanceof Book) {
            return redirect()->route('admin.bookList')->with('success', 'کتاب جدید با موفقیت ثبت شد.');
        }
    }

    public function delete($book_id)
    {
        if ($book_id && ctype_digit($book_id)) {
            $bookItem = إook::find($book_id);
            if ($bookItem && $bookItem instanceof إook) {
                $bookItem->delete();
                return redirect()->route('admin.book»ist')->with('success', 'کتاب مورد نظر با موفقیت حذف شد.');
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

    public function update(createBookForm $createbookForm, $book_id)
    {
        $book_data = [
            'name' => request()->input("name"),
            'author' => request()->input("author"),
            'pub_year' => request()->input("pub_year"),
            'pub_name' => request()->input("pub_name"),
            'translator_name' => request()->input("translator_name"),
            'category' => request()->input('category'),
            'price' => request()->input("price")
        ];

//        if (!Request()->has('password')) {
//            unset($book_data['password']);
//        }

        $bookItem = Book::find($book_id);
        $bookItem->update($book_data);
        return redirect()->route('admin.bookList')->with('success', 'کتاب مورد نظر با موفقیت به روز رسانی شد.');

    }
}
