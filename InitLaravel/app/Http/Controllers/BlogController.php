<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(): View
    {
        // retourner une vue avec les posts
        // nom du dossier.index
        return view('blog.index', [
            // j'envoi des articles paginé a ma vue
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, string $id): RedirectResponse | View
    {
        // recuperation de l'article
        $post = Post::findOrFail($id);
        if ($post->slug != $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        // retourne une vue
        return view('blog.show', [
            'post' => $post
        ]);
    }
    // end class
}
