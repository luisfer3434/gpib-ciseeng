<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorshipSchedule;

class WorshipScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = WorshipSchedule::orderBy('time')
            ->get();

        return view(
            'admin.jadwal.index',
            compact('schedules')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|max:255',
        'day' => 'required|max:50',
        'time' => 'required',
        'location' => 'nullable|max:255',
        'description' => 'nullable',
    ]);

    WorshipSchedule::create($validated);

    return redirect()
        ->route('jadwal.index')
        ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorshipSchedule $jadwal)
    {
        return view(
            'admin.jadwal.edit',
            compact('jadwal')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorshipSchedule $jadwal)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'day' => 'required|max:50',
            'time' => 'required',
            'location' => 'nullable|max:255',
            'description' => 'nullable',
        ]);

        $jadwal->update($validated);

        return redirect()
            ->route('jadwal.index')
            ->with(
                'success',
                'Jadwal Berhasil Diperbarui.'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorshipSchedule $jadwal)
    {
        $jadwal->delete();

        return redirect()
            ->route('jadwal.index')
            ->with(
                'success',
                'Jadwal Berhasil Dihapus.'
            );
    }
}
