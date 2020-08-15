<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\BookService;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;


    /**
     * The service to consume books microservice
     *
     * @var BookService
     */
    public $bookService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return full list of books
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Create a new book
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain and show book
     *
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {

    }

    /**
     * Update an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {

    }

    /**
     * Delete an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {

    }

    //
}
