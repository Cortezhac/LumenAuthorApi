<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:10|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request, $rules);

        $author = Author::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'country' => $request->country
        ]);
        return $this->successResponse($author, Response::HTTP_CREATED);
    }
    /* return on especific author
     * @return Illuminate\Http\Response
     */
    public function show($id) {
        $author = Author::findOrFail($id);
        return $this->successResponse($author);
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
