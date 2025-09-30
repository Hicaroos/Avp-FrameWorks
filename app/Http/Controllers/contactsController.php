<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class contactsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $contacts = Auth::user()
            ->contacts()
            ->when($search, function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('phone', 'LIKE', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('contacts.index', compact('contacts'));
    }


    public function create()
    {
        return view('contacts.create');
    }


    public function store(ContactsRequest $request)
    {
        Auth::user()->contacts()->create($request->validated());
        return redirect()->route('contacts.index')->with('success', 'contato criado com sucesso!');
    }

    public function edit(Contact $contact)
    {
        if (Auth::id() !== $contact->user_id) {
            return redirect()->route('contacts.index')->with('error', 'Ação não autorizada');
        }
        return view('contacts.edit', compact('contact'));
    }


    public function update(ContactsRequest $request, Contact $contact)
    {

        if (Auth::id() !== $contact->user_id) {
            return redirect()->route('contacts.index')->with('error', 'Ação não autorizada');
        }

        $contact->update($request->validated());
        return redirect()->route('contacts.index')->with('success', 'contato atualizado com sucesso!');
    }


    public function destroy(Contact $contact)
    {
        if (Auth::id() !== $contact->user_id) {
            return redirect()->route('contacts.index')->with('error', 'Ação não autorizada');
        }

        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'contato excluido com sucesso!');
    }
}
