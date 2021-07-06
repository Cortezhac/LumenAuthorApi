<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /*
     * Return authors list
     *
     * @return Illuminate\Http\Response
     */
    public function index() {
        $authors=  Author::all();
        return $this->successResponse($authors);
    }
    /*
     * Save new author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {

    }
    /* return on especific author
     * @return Illuminate\Http\Response
     */
    public function show($id) {

    }
    /* update especific author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

    }
    /* destroy especific author
     * @return Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {

    }
}
