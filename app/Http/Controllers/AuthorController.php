<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /*
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
    public function show($author) {

    }
    /* update especific author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author) {

    }
    /* destroy especific author
     * @return Illuminate\Http\Response
     */
    public function destroy(Request $request, $author) {

    }
}
