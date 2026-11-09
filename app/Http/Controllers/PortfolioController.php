<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    // Menampilkan semua data portfolio
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('portfolio.index', compact('portfolios'));
    }

    // Menampilkan form tambah
    public function create()
    {
        return view('portfolio.create');
    }

    // Menyimpan data portfolio
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'teknologi' => 'required',
            'link' => 'nullable|url'
        ]);

        Portfolio::create($request->all());

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio berhasil ditambahkan!');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('portfolio.edit', compact('portfolio'));
    }

    // Mengubah data portfolio
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'teknologi' => 'required',
            'link' => 'nullable|url'
        ]);

        $portfolio = Portfolio::findOrFail($id);

        $portfolio->update($request->all());

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio berhasil diubah!');
    }

    // Menghapus data portfolio
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $portfolio->delete();

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio berhasil dihapus!');
    }
}