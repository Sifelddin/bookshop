<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;

use App\Models\Category;

use App\Models\UserStatus;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
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
        $books = Book::with(['supplier', 'category'])->get();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $supplier = UserStatus::where('general_status_id', null)->where('status_name', 'Supplier')->first();
        $suppliers = UserStatus::with('users')->where('general_status_id', $supplier->status_id)->get()->flatMap(function ($status) {
            return $status->users;
        });

        return view('admin.books.create', compact('categories', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'category' => ['required'],
            'supplier' => ['required'],
            'title' => ['required', 'string', 'max:200', 'unique:books,book_title'],
            'author' => ['required', 'string', 'max:100'],
            'release' => ['required', 'date'],
            'ISBN' => ['required', 'string', 'max:30', 'unique:books,ISBN'],
            'price' => ['required', 'Numeric'],
            'description' => ['required', 'string'],
            'stock' => ['required', 'Numeric'],
            'alert' => ['required', 'Numeric'],
            'published' => ['required', 'boolean'],
            'photo' => ['required', 'file', 'mimes:jpg,bmp,png']
        ]);

        $imageNewName = time() . '.' . $request->file('photo')->extension();
        //store image in storage dir
        $request->photo->move(storage_path('app\public\books'), $imageNewName);


        Book::create([
            'book_cat_id' => $request->category,
            'book_user_id' => $request->supplier,
            'book_title' => $request->title,
            'book_author' => $request->author,
            'book_release' => $request->release,
            'ISBN' => $request->ISBN,
            'book_price' => $request->price,
            'book_description' => $request->description,
            'book_photo' => $imageNewName,
            'book_stock' => $request->stock,
            'book_stock_alert' => $request->alert
        ]);

        dd('book created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $Book)
    {

        return view('admin.books.show', compact('Book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $Book)
    {


        $categories = Category::all();
        $supplier = UserStatus::where('general_status_id', null)->where('status_name', 'Supplier')->first();
        $suppliers = UserStatus::with('users')->where('general_status_id', $supplier->status_id)->get()->flatMap(function ($status) {
            return $status->users;
        });

        return view('admin.books.edit', compact('Book', 'categories', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $Book)
    {


        $request->validate([
            'category' => ['required'],
            'supplier' => ['required'],
            'title' => ['required', 'string', 'max:200', Rule::unique('books', 'book_title')->ignore($Book)],
            'author' => ['required', 'string', 'max:100'],
            'release' => ['required', 'date'],
            'ISBN' => ['required', 'string', 'max:30', Rule::unique('books', 'ISBN')->ignore($Book)],
            'price' => ['required', 'Numeric'],
            'description' => ['required', 'string'],
            'stock' => ['required', 'Numeric'],
            'alert' => ['required', 'Numeric'],
            'published' => ['required', 'boolean'],
            'photo' => [Rule::requiredIf($Book->book_photo == null), 'file', 'mimes:jpg,png']
        ]);

        $Book->book_cat_id = $request->category;
        $Book->book_user_id = $request->supplier;
        $Book->book_title = $request->title;
        $Book->book_author = $request->author;
        $Book->book_release = $request->release;
        $Book->ISBN = $request->ISBN;
        $Book->book_price = $request->price;
        $Book->book_description = $request->description;
        $Book->book_stock = $request->stock;
        $Book->book_stock_alert = $request->alert;
        $Book->book_publish = $request->published;
        $Book->updated_at = now()->toDateTime();
        if ($Book->book_photo) {
            $imageNewName = time() . '.' . $request->file('photo')->extension();
            //store image in storage dir
            $request->photo->move(storage_path('app\public\books'), $imageNewName);

            Storage::disc('public')->delete('books/' . $Book->book_photo);

            $Book->book_photo = $imageNewName;
        }

        $Book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $Book)
    {
        //
    }
}
