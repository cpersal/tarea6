<?php
namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index()
    {
        return Series::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'episodes' => 'required|integer|min:1',
            'seasons' => 'required|integer|min:1',
            'average_rating' => 'required|numeric|min:0|max:10',
        ]);

        return Series::create($request->all());
    }

    public function show($id)
    {
        return Series::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $series = Series::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|string|max:255',
            'release_year' => 'sometimes|integer|min:1900|max:' . date('Y'),
            'episodes' => 'sometimes|integer|min:1',
            'seasons' => 'sometimes|integer|min:1',
            'average_rating' => 'sometimes|numeric|min:0|max:10',
        ]);

        $series->update($request->all());
        return $series;
    }

    public function destroy($id)
    {
        Series::destroy($id);
        return response()->noContent();
    }
}
