<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCreateBlogFormRequest;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(StoreCreateBlogFormRequest $request)
    {
        $data = $request->all();
        $blog = Blog::create($data);
        session()->flash('success', 'Blog cadastrado com sucesso!');
        return redirect()->route(('blog.create'));
    }

    public function show($id)
    {
        if (!$blog = Blog::find($id))
            return redirect()->route(('blog.index'));
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        if (!$blog = Blog::find($id))
            return redirect()->route('blog.edit');
        return view('blog.edit', compact('blog'));
    }

    public function update(StoreCreateBlogFormRequest $request, $id)
    {
        // Encontre o post existente pelo ID
        $blog = Blog::find($id);
        
        // Verifique se o post existe
        if (!$blog) {
            session()->flash('error', 'Post não encontrado!');
            return redirect()->route('blog.index');
        }
        
        // Valide os dados do formulário
        $validatedData = $request->validated();
        
        // Atualize os atributos do post existente com os dados do formulário
        $blog->update($validatedData);

        session()->flash('success', 'Atualizado com sucesso!');
        return redirect()->route('blog.edit', $blog->id);
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->route('blog.index')->with('error', 'Usuário não encontrado.');
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog excluído com sucesso.');
    }

    public function search(Request $request)
    {
        $blogId = $request->input('blog_id');
        // Faça o que quiser com o ID do blog, como redirecionar para a página específica do blog ou exibir suas informações.
    }



}