<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPost;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Throwable;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Searches the post based on the requested query string.
     */
    public function search(Request $request)
    {
        $input = $request->input('content');
        try {
            $posts = Post::where('title', 'LIKE', '%' . $input . '%')
                ->orWhere('content', 'LIKE', '%' . $input . '%')
                ->get();
            if ($posts->isEmpty()) {
                throw new ModelNotFoundException();
            };

            return view('results', compact('posts'));
        } catch (ModelNotFoundException $exception) {
            return view('results', [
                'posts' => collect(),
                'message' => NO_RESULT_ERROR,
            ]);
        } catch (Throwable $exception) {
            return view('results', [
                'posts' => collect(),
                'message' => ERROR_MESSAGE,
            ]);
        }
    }
}
