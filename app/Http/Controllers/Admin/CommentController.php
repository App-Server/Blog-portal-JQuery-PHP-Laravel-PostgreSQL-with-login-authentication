<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateComment;

class CommentController extends Controller
{
    protected $comment; 
    protected $user;   
    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function index($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }
        $comments = $user->comments()->paginate(10);
        return view('users.comments.index', compact('user', 'comments'));
    }

    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }
       
        return view('users.comments.create', compact('user'));
    }

    public function store(StoreUpdateComment $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $user->comments()->create([
            'body' => $request->body,
            'vivible' => isset($request->visible)
        ]);
        
        session()->flash('success', 'Comentário cadastrado com sucesso!');
        return redirect()->route('comments.index', $user->id);
    }

    public function edit($userId, $id)
    {
        if (!$comment = $this->comment->find($id)) {
            return redirect()->back();
        }

        $user = $comment->user;
    
        return view('users.comments.edit', compact('user', 'comment'));
    }

    public function update(StoreUpdateComment $request, $userId, $id)
    {
        if (!$comment = $this->comment->find($id)) {
            return redirect()->back();
        }

        $comment->update([
            'body' => $request->input('body'),
            'visible' => $request->has('visible')
        ]);

        return redirect()->route('comments.index', $userId);
    }

}
