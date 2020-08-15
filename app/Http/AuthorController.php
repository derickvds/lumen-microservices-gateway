<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;

class AuthorController extends Controller
{

    use ApiResponser;

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
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return full list of authors
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Create a new author
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain and show author
     *
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {

    }

    /**
     * Update an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {

    }

    /**
     * Delete an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {

    }


    //
}
