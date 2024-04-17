<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreconferenceRequest;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class ConferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'edit']);
    }

    public function index(): View
    {
        $conferences = new Conference();
        return view('conference.index', ['conferences' => $conferences->all()]);
    }

    public function store(StoreconferenceRequest $request, Conference $conference): RedirectResponse
    {
        $validated = $request->validated();

        $conferenceItem = $conference->create($validated);

        Log::info('Conference created', ['id' => $conferenceItem->id, 'name' => $conferenceItem->name]);

        $request->session()->flash('status', 'Conference created');

        return redirect()->route('conferences.show', ['conference' => $conferenceItem->id]);
    }

    public function create(): View
    {
        return view('conference.create');
    }

    public function show(int $id): View
    {
        return view('conference.show', ['conference' => Conference::findOrFail($id)]);
    }

    public function edit(int $id)
    {
        $conference = Conference::findOrFail($id);
        return view('conference.edit', ['conference' => $conference]);
    }

    public function update(StoreconferenceRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validated();;

        $conference = Conference::findOrFail($id);
        $conference->update($validated);

        $request->session()->flash('status', 'Conference updated successfully');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }

    public function destroy(int $id): RedirectResponse
    {
        $conference = (new Conference())->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference deleted!');

        return redirect()->route('conferences.index');
    }
}
