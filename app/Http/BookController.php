<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;

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
     * The service to consume authors microservice
     *
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService, AutherService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    /**
     * Return full list of books
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }

    /**
     * Create a new book
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);

        return $this->successResponse($this->bookService->createBook($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtain and show book
     *
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
        return $this->successResponse($this->bookService->obtainBook($book));
    }

    /**
     * Update an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Delete an existing book
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
        return $this->successResponse($this->bookService->deleteBook($book));
    }


    //
}
